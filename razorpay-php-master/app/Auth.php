<?php
/**
 * Authentication Class
 * Handles user registration, login, and session management
 */

require_once __DIR__ . '/../config/database.php';

class Auth {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    /**
     * Register a new user
     *
     * @param string $name User's full name
     * @param string $email User's email address
     * @param string $password User's password (will be hashed)
     * @param string $phone User's phone number (optional)
     * @return array Registration result with success status and message
     */
    public function register($name, $email, $password, $phone = '') {
        try {
            // Sanitize input
            $name = trim($name);
            $email = trim($email);
            $phone = trim($phone);

            // Validate input - check for empty values
            if (empty($name) || empty($email) || empty($password)) {
                throw new Exception('Name, email, and password are required');
            }

            // Validate name length
            if (strlen($name) < 2 || strlen($name) > 100) {
                throw new Exception('Name must be between 2 and 100 characters');
            }

            // Validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception('Invalid email format');
            }

            // Validate email length
            if (strlen($email) > 255) {
                throw new Exception('Email is too long');
            }

            // Validate password strength
            if (strlen($password) < 6) {
                throw new Exception('Password must be at least 6 characters');
            }

            if (strlen($password) > 255) {
                throw new Exception('Password is too long');
            }

            // Check if user already exists
            $existing = $this->db->selectOne('users', 'email = ?', [$email]);
            if ($existing) {
                throw new Exception('Email already registered');
            }

            // Hash password using bcrypt
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

            // Insert user into database
            $userId = $this->db->insert('users', [
                'name' => $name,
                'email' => $email,
                'password' => $hashedPassword,
                'phone' => $phone
            ]);

            // Start session with user data
            $_SESSION['user_id'] = $userId;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_name'] = $name;
            $_SESSION['created_at'] = time();

            return [
                'success' => true,
                'message' => 'Registration successful. Welcome!',
                'user_id' => $userId
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    /**
     * Login user
     *
     * @param string $email User's email address
     * @param string $password User's password (will be verified against hash)
     * @return array Login result with success status and message
     */
    public function login($email, $password) {
        try {
            // Sanitize input
            $email = trim($email);

            // Validate input
            if (empty($email) || empty($password)) {
                throw new Exception('Email and password are required');
            }

            // Validate email format
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception('Invalid email or password');
            }

            // Find user by email
            $user = $this->db->selectOne('users', 'email = ?', [$email]);
            if (!$user) {
                // Use generic message to prevent email enumeration
                throw new Exception('Invalid email or password');
            }

            // Verify password against hash
            if (!password_verify($password, $user['password'])) {
                // Use generic message to prevent email enumeration
                throw new Exception('Invalid email or password');
            }

            // Start session with user data
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['created_at'] = time();

            return [
                'success' => true,
                'message' => 'Login successful. Welcome back!',
                'user_id' => $user['id']
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    /**
     * Logout user
     */
    public function logout() {
        session_destroy();
        return [
            'success' => true,
            'message' => 'Logged out successfully'
        ];
    }

    /**
     * Check if user is logged in
     */
    public function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }

    /**
     * Get current user
     */
    public function getCurrentUser() {
        if (!$this->isLoggedIn()) {
            return null;
        }

        return [
            'id' => $_SESSION['user_id'],
            'email' => $_SESSION['user_email'],
            'name' => $_SESSION['user_name']
        ];
    }

    /**
     * Get user by ID
     */
    public function getUserById($userId) {
        return $this->db->selectOne('users', 'id = ?', [$userId]);
    }
}
?>


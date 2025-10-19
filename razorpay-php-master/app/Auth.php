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
     */
    public function register($name, $email, $password, $phone = '') {
        try {
            // Validate input
            if (empty($name) || empty($email) || empty($password)) {
                throw new Exception('Name, email, and password are required');
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception('Invalid email format');
            }

            if (strlen($password) < 6) {
                throw new Exception('Password must be at least 6 characters');
            }

            // Check if user already exists
            $existing = $this->db->selectOne('users', 'email = ?', [$email]);
            if ($existing) {
                throw new Exception('Email already registered');
            }

            // Hash password
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Insert user
            $userId = $this->db->insert('users', [
                'name' => $name,
                'email' => $email,
                'password' => $hashedPassword,
                'phone' => $phone
            ]);

            // Start session
            $_SESSION['user_id'] = $userId;
            $_SESSION['user_email'] = $email;
            $_SESSION['user_name'] = $name;

            return [
                'success' => true,
                'message' => 'Registration successful',
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
     */
    public function login($email, $password) {
        try {
            if (empty($email) || empty($password)) {
                throw new Exception('Email and password are required');
            }

            // Find user
            $user = $this->db->selectOne('users', 'email = ?', [$email]);
            if (!$user) {
                throw new Exception('Invalid email or password');
            }

            // Verify password
            if (!password_verify($password, $user['password'])) {
                throw new Exception('Invalid email or password');
            }

            // Start session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_name'] = $user['name'];

            return [
                'success' => true,
                'message' => 'Login successful',
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


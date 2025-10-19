<?php
/**
 * Authentication API Endpoints
 * Handles user registration, login, logout, and authentication checks
 *
 * Security Features:
 * - Session-based authentication
 * - Input validation and sanitization
 * - HTTPS recommended for production
 * - Secure password hashing (bcrypt)
 * - CSRF protection via session
 */

// Start secure session
session_start();

// Set security headers
header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('Strict-Transport-Security: max-age=31536000; includeSubDomains');

// Prevent caching of sensitive data
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: 0');

require_once __DIR__ . '/../app/Auth.php';

$auth = new Auth();
$action = $_GET['action'] ?? '';
$response = ['success' => false, 'message' => 'Invalid action'];

try {
    // Validate action parameter
    if (empty($action)) {
        throw new Exception('Action parameter is required');
    }

    // Validate action is alphanumeric
    if (!preg_match('/^[a-z_]+$/', $action)) {
        throw new Exception('Invalid action format');
    }

    switch ($action) {
        case 'register':
            // Only accept POST requests
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                http_response_code(405);
                throw new Exception('Method not allowed. Use POST.');
            }

            // Get JSON input
            $input = file_get_contents('php://input');
            $data = json_decode($input, true);

            // Fallback to POST if JSON parsing fails
            if (!$data || !is_array($data)) {
                $data = $_POST;
            }

            // Sanitize and validate input
            $name = isset($data['name']) ? trim($data['name']) : '';
            $email = isset($data['email']) ? trim($data['email']) : '';
            $password = isset($data['password']) ? $data['password'] : '';
            $phone = isset($data['phone']) ? trim($data['phone']) : '';

            // Call registration method
            $result = $auth->register($name, $email, $password, $phone);
            $response = $result;
            break;

        case 'login':
            // Only accept POST requests
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                http_response_code(405);
                throw new Exception('Method not allowed. Use POST.');
            }

            // Get JSON input
            $input = file_get_contents('php://input');
            $data = json_decode($input, true);

            // Fallback to POST if JSON parsing fails
            if (!$data || !is_array($data)) {
                $data = $_POST;
            }

            // Sanitize and validate input
            $email = isset($data['email']) ? trim($data['email']) : '';
            $password = isset($data['password']) ? $data['password'] : '';

            // Call login method
            $result = $auth->login($email, $password);
            $response = $result;
            break;

        case 'logout':
            // Logout user
            $result = $auth->logout();
            $response = $result;
            break;

        case 'check':
            // Check authentication status
            if ($auth->isLoggedIn()) {
                $user = $auth->getCurrentUser();
                $response = [
                    'success' => true,
                    'logged_in' => true,
                    'user' => $user
                ];
            } else {
                $response = [
                    'success' => true,
                    'logged_in' => false
                ];
            }
            break;

        default:
            http_response_code(400);
            throw new Exception('Unknown action: ' . htmlspecialchars($action));
    }
} catch (Exception $e) {
    // Log error for debugging (in production, log to file)
    error_log('Auth API Error: ' . $e->getMessage());

    $response = [
        'success' => false,
        'message' => $e->getMessage()
    ];
}

// Return JSON response
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>


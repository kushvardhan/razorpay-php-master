<?php
/**
 * Payment API Endpoints
 * Handles payment creation, verification, and history retrieval
 *
 * Security Features:
 * - Authentication required for all endpoints
 * - Input validation and sanitization
 * - Razorpay signature verification
 * - User authorization checks
 * - HTTPS recommended for production
 * - Rate limiting recommended
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
require_once __DIR__ . '/../app/PaymentHandler.php';

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

    // Check if user is authenticated (required for all payment operations)
    if (!$auth->isLoggedIn()) {
        http_response_code(401);
        throw new Exception('User not authenticated. Please login first.');
    }

    $user = $auth->getCurrentUser();
    if (!$user || !isset($user['id'])) {
        http_response_code(401);
        throw new Exception('Invalid user session');
    }

    $paymentHandler = new PaymentHandler();

    switch ($action) {
        case 'create_order':
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
            $amount = isset($data['amount']) ? floatval($data['amount']) : 0;
            $description = isset($data['description']) ? trim($data['description']) : '';

            // Validate amount
            if (!$amount || $amount <= 0) {
                throw new Exception('Invalid amount. Amount must be greater than 0.');
            }

            // Limit amount to prevent abuse (e.g., max 1,000,000 INR)
            if ($amount > 1000000) {
                throw new Exception('Amount exceeds maximum limit');
            }

            // Sanitize description
            $description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');

            // Create order
            $result = $paymentHandler->createOrder($user['id'], $amount, $description);
            $response = $result;
            break;

        case 'verify_payment':
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
            $orderId = isset($data['order_id']) ? trim($data['order_id']) : '';
            $paymentId = isset($data['payment_id']) ? trim($data['payment_id']) : '';
            $signature = isset($data['signature']) ? trim($data['signature']) : '';

            // Validate required fields
            if (!$orderId || !$paymentId || !$signature) {
                throw new Exception('Missing required payment verification data');
            }

            // Validate format (basic check)
            if (!preg_match('/^order_/', $orderId)) {
                throw new Exception('Invalid order ID format');
            }

            if (!preg_match('/^pay_/', $paymentId)) {
                throw new Exception('Invalid payment ID format');
            }

            // Verify payment
            $result = $paymentHandler->verifyPayment($orderId, $paymentId, $signature);
            $response = $result;
            break;

        case 'get_payment':
            // Get specific payment details
            $orderId = isset($_GET['order_id']) ? trim($_GET['order_id']) : '';

            if (!$orderId) {
                throw new Exception('Order ID is required');
            }

            // Validate order ID format
            if (!preg_match('/^order_/', $orderId)) {
                throw new Exception('Invalid order ID format');
            }

            // Get payment details
            $result = $paymentHandler->getPaymentDetails($orderId);
            $response = $result;
            break;

        case 'get_user_payments':
            // Get all payments for current user
            $result = $paymentHandler->getUserPayments($user['id']);
            $response = $result;
            break;

        default:
            http_response_code(400);
            throw new Exception('Unknown action: ' . htmlspecialchars($action));
    }
} catch (Exception $e) {
    // Log error for debugging (in production, log to file)
    error_log('Payment API Error: ' . $e->getMessage());

    $response = [
        'success' => false,
        'message' => $e->getMessage()
    ];
}

// Return JSON response
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>


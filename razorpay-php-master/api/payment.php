<?php
/**
 * Payment API Endpoints
 */

session_start();
header('Content-Type: application/json');

require_once __DIR__ . '/../app/Auth.php';
require_once __DIR__ . '/../app/PaymentHandler.php';

$auth = new Auth();
$action = $_GET['action'] ?? '';
$response = ['success' => false, 'message' => 'Invalid action'];

try {
    // Check if user is logged in
    if (!$auth->isLoggedIn()) {
        throw new Exception('User not authenticated');
    }

    $user = $auth->getCurrentUser();
    $paymentHandler = new PaymentHandler();

    switch ($action) {
        case 'create_order':
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                throw new Exception('Invalid request method');
            }

            $data = json_decode(file_get_contents('php://input'), true);
            
            if (!$data) {
                $data = $_POST;
            }

            $amount = $data['amount'] ?? 0;
            $description = $data['description'] ?? '';

            if (!$amount || $amount <= 0) {
                throw new Exception('Invalid amount');
            }

            $result = $paymentHandler->createOrder($user['id'], $amount, $description);
            $response = $result;
            break;

        case 'verify_payment':
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                throw new Exception('Invalid request method');
            }

            $data = json_decode(file_get_contents('php://input'), true);
            
            if (!$data) {
                $data = $_POST;
            }

            $orderId = $data['order_id'] ?? '';
            $paymentId = $data['payment_id'] ?? '';
            $signature = $data['signature'] ?? '';

            if (!$orderId || !$paymentId || !$signature) {
                throw new Exception('Missing required payment verification data');
            }

            $result = $paymentHandler->verifyPayment($orderId, $paymentId, $signature);
            $response = $result;
            break;

        case 'get_payment':
            $orderId = $_GET['order_id'] ?? '';
            
            if (!$orderId) {
                throw new Exception('Order ID is required');
            }

            $result = $paymentHandler->getPaymentDetails($orderId);
            $response = $result;
            break;

        case 'get_user_payments':
            $result = $paymentHandler->getUserPayments($user['id']);
            $response = $result;
            break;

        default:
            throw new Exception('Unknown action: ' . $action);
    }
} catch (Exception $e) {
    $response = [
        'success' => false,
        'message' => $e->getMessage()
    ];
}

echo json_encode($response);
?>


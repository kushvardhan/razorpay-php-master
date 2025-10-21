<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/razorpay/config.php';
use Razorpay\Api\Api;

session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /login.php?return_to=/payment.php');
    exit;
}

$api = new Api(RAZOR_KEY_ID, RAZOR_KEY_SECRET);

$amount_rupees = isset($_POST['amount']) ? intval($_POST['amount']) : 100;
$amount_paise = $amount_rupees * 100;

try {
    $orderData = [
        'amount' => $amount_paise,
        'currency' => 'INR',
        'payment_capture' => 1
    ];
    $order = $api->order->create($orderData);
    $razorpay_order_id = $order['id'];

    // DB connection
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prevent duplicate orders for same user/order_id
    $check = $pdo->prepare('SELECT id FROM orders WHERE razorpay_order_id = ?');
    $check->execute([$razorpay_order_id]);
    if ($check->fetch()) {
        throw new Exception('Duplicate order');
    }

    $stmt = $pdo->prepare('INSERT INTO orders (user_id, razorpay_order_id, amount, currency, status, created_at) VALUES (?, ?, ?, ?, ?, NOW())');
    $stmt->execute([
        $_SESSION['user_id'],
        $razorpay_order_id,
        $amount_paise,
        'INR',
        'created'
    ]);

    header('Content-Type: application/json');
    echo json_encode([
        'order_id' => $razorpay_order_id,
        'amount' => $amount_paise
    ]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}

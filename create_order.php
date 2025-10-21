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

// Accept POST amount (in rupees)
$amount_rupees = isset($_POST['amount']) ? intval($_POST['amount']) : 100; // Default 100 for testing
$amount_paise = $amount_rupees * 100;

$orderData = [
    'amount' => $amount_paise,
    'currency' => 'INR',
    'payment_capture' => 1
];

$order = $api->order->create($orderData);
$razorpay_order_id = $order['id'];

// DB connection
$pdo = new PDO('mysql:host=localhost;dbname=your_db', 'your_user', 'your_pass');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

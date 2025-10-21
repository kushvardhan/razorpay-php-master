<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/razorpay/config.php';
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /login.php?return_to=/payment.php');
    exit;
}

$api = new Api(RAZOR_KEY_ID, RAZOR_KEY_SECRET);

$payment_id = $_POST['razorpay_payment_id'] ?? null;
$order_id = $_POST['razorpay_order_id'] ?? null;
$signature = $_POST['razorpay_signature'] ?? null;

function log_error($msg) {
    file_put_contents(__DIR__ . '/server.log', date('Y-m-d H:i:s') . " " . $msg . "\n", FILE_APPEND);
}

if ($payment_id && $order_id && $signature) {
    try {
        $attributes = [
            'razorpay_order_id' => $order_id,
            'razorpay_payment_id' => $payment_id,
            'razorpay_signature' => $signature
        ];
        $api->utility->verifyPaymentSignature($attributes);

            // DB connection
            $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Get order
            $orderStmt = $pdo->prepare('SELECT id, status, amount FROM orders WHERE razorpay_order_id = ?');
            $orderStmt->execute([$order_id]);
            $order = $orderStmt->fetch(PDO::FETCH_ASSOC);
            $order_db_id = $order['id'] ?? null;
            $amount = $order['amount'] ?? 0;
            $order_status = $order['status'] ?? '';

            // Prevent duplicate payment
            $payCheck = $pdo->prepare('SELECT id FROM payments WHERE razorpay_payment_id = ?');
            $payCheck->execute([$payment_id]);
            if ($payCheck->fetch()) {
                log_error('Duplicate payment: ' . $payment_id);
                header('Location: /success.html');
                exit;
            }

            // Only update if order is not already paid
            if ($order_status !== 'paid') {
                $stmt = $pdo->prepare('UPDATE orders SET status = ? WHERE razorpay_order_id = ?');
                $stmt->execute(['paid', $order_id]);
            }

            $stmt = $pdo->prepare('INSERT INTO payments (user_id, order_id, razorpay_payment_id, razorpay_signature, amount, status, created_at) VALUES (?, ?, ?, ?, ?, ?, NOW())');
            $stmt->execute([$_SESSION['user_id'], $order_db_id, $payment_id, $signature, $amount, 'paid']);

            // Capture payment if authorized
            $payment = $api->payment->fetch($payment_id);
            if ($payment['status'] === 'authorized') {
                $payment->capture(['amount' => $amount]);
            }

            header('Location: /success.html');
            exit;
    } catch (SignatureVerificationError $e) {
        log_error('Signature verification failed: ' . $e->getMessage());
        header('Location: /failure.html');
        exit;
    } catch (Exception $e) {
        log_error('Payment error: ' . $e->getMessage());
        header('Location: /failure.html');
        exit;
    }
} else {
    log_error('Missing required POST data');
    header('Location: /failure.html');
    exit;
}
?>

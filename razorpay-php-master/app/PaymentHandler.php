<?php
/**
 * Payment Handler Class
 * Handles Razorpay payment creation, verification, and storage
 */

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../Razorpay.php';

use Razorpay\Api\Api;

class PaymentHandler {
    private $db;
    private $api;
    private $config;

    public function __construct() {
        $this->db = new Database();
        $this->config = require __DIR__ . '/../config/razorpay.php';
        
        try {
            $this->api = new Api($this->config['key_id'], $this->config['key_secret']);
        } catch (Exception $e) {
            throw new Exception('Failed to initialize Razorpay API: ' . $e->getMessage());
        }
    }

    /**
     * Create a payment order
     */
    public function createOrder($userId, $amount, $description = '') {
        try {
            if (!$userId || !$amount) {
                throw new Exception('User ID and amount are required');
            }

            if ($amount <= 0) {
                throw new Exception('Amount must be greater than 0');
            }

            // Create order with Razorpay
            $orderData = [
                'amount' => $amount * 100, // Convert to paise
                'currency' => $this->config['currency'],
                'receipt' => 'receipt_' . time(),
                'description' => $description ?: 'Payment for services'
            ];

            $order = $this->api->order->create($orderData);

            // Store order in database
            $paymentId = $this->db->insert('payments', [
                'user_id' => $userId,
                'razorpay_order_id' => $order['id'],
                'amount' => $amount,
                'currency' => $this->config['currency'],
                'description' => $description,
                'status' => 'pending'
            ]);

            return [
                'success' => true,
                'order_id' => $order['id'],
                'payment_id' => $paymentId,
                'amount' => $amount,
                'currency' => $this->config['currency'],
                'key_id' => $this->config['key_id']
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => 'Failed to create order: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Verify payment signature
     */
    public function verifyPayment($orderId, $paymentId, $signature) {
        try {
            if (!$orderId || !$paymentId || !$signature) {
                throw new Exception('Order ID, Payment ID, and Signature are required');
            }

            // Verify signature
            $this->api->utility->verifyPaymentSignature([
                'order_id' => $orderId,
                'payment_id' => $paymentId,
                'signature' => $signature
            ]);

            // Update payment status in database
            $this->db->update('payments', 
                [
                    'razorpay_payment_id' => $paymentId,
                    'razorpay_signature' => $signature,
                    'status' => 'completed',
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                'razorpay_order_id = ?',
                [$orderId]
            );

            return [
                'success' => true,
                'message' => 'Payment verified successfully'
            ];
        } catch (Exception $e) {
            // Update payment status to failed
            $this->db->update('payments',
                [
                    'status' => 'failed',
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                'razorpay_order_id = ?',
                [$orderId]
            );

            return [
                'success' => false,
                'message' => 'Payment verification failed: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Get payment details
     */
    public function getPaymentDetails($orderId) {
        try {
            $payment = $this->db->selectOne('payments', 'razorpay_order_id = ?', [$orderId]);
            
            if (!$payment) {
                throw new Exception('Payment not found');
            }

            return [
                'success' => true,
                'payment' => $payment
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    /**
     * Get user payments
     */
    public function getUserPayments($userId) {
        try {
            $payments = $this->db->select('payments', 'user_id = ? ORDER BY created_at DESC', [$userId]);
            
            return [
                'success' => true,
                'payments' => $payments
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    /**
     * Get Razorpay API instance
     */
    public function getApi() {
        return $this->api;
    }
}
?>


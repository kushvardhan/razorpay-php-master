<?php
session_start();
require __DIR__ . '/razorpay/config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare('
    SELECT p.razorpay_payment_id, p.amount, p.status, p.created_at, o.razorpay_order_id 
    FROM payments p 
    JOIN orders o ON p.order_id = o.id 
    WHERE p.user_id = ? 
    ORDER BY p.created_at DESC
');
$stmt->execute([$_SESSION['user_id']]);
$donations = $stmt->fetchAll(PDO::FETCH_ASSOC);

$userStmt = $pdo->prepare('SELECT name FROM users WHERE id = ?');
$userStmt->execute([$_SESSION['user_id']]);
$user = $userStmt->fetch(PDO::FETCH_ASSOC);
$user_name = $user['name'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Donations | Cambridge Public Education and Welfare Trust</title>
    <link rel="icon" type="image/png" href="cpeduw-Photoroom.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">
    <?php include 'includes/nav.php'; ?>

    <main class="container mx-auto py-12">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-2xl font-bold text-[#1a237e] mb-6">My Donation History</h2>
            
            <?php if (empty($donations)): ?>
                <div class="bg-white p-8 rounded-lg shadow text-center">
                    <p class="text-gray-600 mb-4">You haven't made any donations yet.</p>
                    <a href="payment.php" class="bg-yellow-400 text-[#1a237e] font-bold py-2 px-6 rounded-full hover:bg-yellow-300 transition">Make Your First Donation</a>
                </div>
            <?php else: ?>
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <table class="w-full">
                        <thead class="bg-[#1a237e] text-white">
                            <tr>
                                <th class="px-6 py-3 text-left">Date</th>
                                <th class="px-6 py-3 text-left">Amount</th>
                                <th class="px-6 py-3 text-left">Payment ID</th>
                                <th class="px-6 py-3 text-left">Status</th>
                                <th class="px-6 py-3 text-left">Receipt</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($donations as $donation): ?>
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-6 py-4"><?= date('d M Y, H:i', strtotime($donation['created_at'])) ?></td>
                                    <td class="px-6 py-4 font-semibold">₹<?= number_format($donation['amount'] / 100, 2) ?></td>
                                    <td class="px-6 py-4 font-mono text-sm"><?= htmlspecialchars($donation['razorpay_payment_id']) ?></td>
                                    <td class="px-6 py-4">
                                        <span class="px-2 py-1 text-xs rounded-full <?= $donation['status'] === 'paid' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' ?>">
                                            <?= ucfirst($donation['status']) ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="receipt.php?payment_id=<?= urlencode($donation['razorpay_payment_id']) ?>" 
                                           class="text-[#1a237e] hover:underline">Download</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                
                <div class="mt-8 bg-white p-6 rounded-lg shadow">
                    <h3 class="text-lg font-bold text-[#1a237e] mb-4">Donation Summary</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-[#1a237e]"><?= count($donations) ?></div>
                            <div class="text-gray-600">Total Donations</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-[#1a237e]">₹<?= number_format(array_sum(array_column($donations, 'amount')) / 100, 2) ?></div>
                            <div class="text-gray-600">Total Amount</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-[#1a237e]"><?= count(array_filter($donations, fn($d) => $d['status'] === 'paid')) ?></div>
                            <div class="text-gray-600">Successful</div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <footer class="bg-[#1a237e] text-white py-6 mt-16">
        <div class="container mx-auto text-center text-sm">
            <p>&copy; <?= date('Y') ?> Cambridge Public Education and Welfare Trust. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
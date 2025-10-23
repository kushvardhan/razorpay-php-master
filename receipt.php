<?php
session_start();
require __DIR__ . '/razorpay/config.php';

if (!isset($_SESSION['user_id']) || !isset($_GET['payment_id'])) {
    header('Location: login.php');
    exit;
}

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare('
    SELECT p.razorpay_payment_id, p.amount, p.created_at, u.name, u.email 
    FROM payments p 
    JOIN users u ON p.user_id = u.id 
    WHERE p.razorpay_payment_id = ? AND p.user_id = ?
');
$stmt->execute([$_GET['payment_id'], $_SESSION['user_id']]);
$payment = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$payment) {
    header('Location: donations.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donation Receipt | Cambridge Public Education and Welfare Trust</title>
    <link rel="icon" type="image/png" href="cpeduw-Photoroom.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto py-8">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <div class="text-center mb-8">
                <img src="cpeduw-Photoroom.png" alt="Trust Logo" class="h-16 w-16 mx-auto mb-4">
                <h1 class="text-xl font-bold text-[#1a237e]">CAMBRIDGE PUBLIC EDUCATION AND WELFARE TRUST</h1>
                <p class="text-sm text-gray-600">Vill. Saidpur PO Sormar Baghala, P.S.-Moro, Dist.-Darbhanga, Bihar, India</p>
                <p class="text-sm text-gray-600">Registered: 11th July 2014</p>
            </div>

            <div class="border-t border-b py-4 mb-6">
                <h2 class="text-lg font-bold text-center text-[#1a237e]">DONATION RECEIPT</h2>
            </div>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <div>
                    <h3 class="font-semibold text-[#1a237e] mb-2">Donor Details:</h3>
                    <p><strong>Name:</strong> <?= htmlspecialchars($payment['name']) ?></p>
                    <p><strong>Email:</strong> <?= htmlspecialchars($payment['email']) ?></p>
                </div>
                <div>
                    <h3 class="font-semibold text-[#1a237e] mb-2">Payment Details:</h3>
                    <p><strong>Date:</strong> <?= date('d M Y, H:i', strtotime($payment['created_at'])) ?></p>
                    <p><strong>Payment ID:</strong> <?= htmlspecialchars($payment['razorpay_payment_id']) ?></p>
                </div>
            </div>

            <div class="bg-yellow-50 p-4 rounded-lg mb-6">
                <div class="flex justify-between items-center">
                    <span class="text-lg font-semibold">Donation Amount:</span>
                    <span class="text-2xl font-bold text-[#1a237e]">₹<?= number_format($payment['amount'] / 100, 2) ?></span>
                </div>
            </div>

            <div class="text-sm text-gray-600 mb-6">
                <p class="mb-2">Thank you for your generous donation to Cambridge Public Education and Welfare Trust. Your contribution will help us continue our mission of providing quality education and welfare support to underprivileged children.</p>
                <p>This receipt serves as proof of your donation for tax purposes under Section 80G of the Income Tax Act.</p>
            </div>

            <div class="text-center">
                <button onclick="window.print()" class="bg-[#1a237e] text-white px-6 py-2 rounded hover:bg-blue-800 transition mr-4">Print Receipt</button>
                <a href="donations.php" class="bg-yellow-400 text-[#1a237e] px-6 py-2 rounded hover:bg-yellow-300 transition">Back to Donations</a>
            </div>
        </div>
    </div>

    <style>
        @media print {
            body { background: white; }
            .container { margin: 0; padding: 0; }
            button, a { display: none; }
        }
    </style>
</body>
</html>
<?php
session_start();
require __DIR__ . '/razorpay/config.php';

$user_name = '';
if (isset($_SESSION['user_id'])) {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare('SELECT name FROM users WHERE id = ?');
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $user_name = $user['name'] ?? '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Failed | Cambridge Public Education and Welfare Trust</title>
    <link rel="icon" type="image/png" href="cpeduw-Photoroom.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">
    <header class="bg-[#1a237e] text-white py-4">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center gap-4">
                <img src="cpeduw-Photoroom.png" alt="Trust Logo" class="h-10 w-10 rounded-lg">
                <h1 class="text-lg font-bold">CAMBRIDGE PUBLIC EDUCATION AND WELFARE TRUST</h1>
            </div>
            <?php if (isset($_SESSION['user_id'])): ?>
            <nav>
                <ul class="flex gap-6 text-base font-medium">
                    <li><a href="index.php" class="hover:text-yellow-400">Home</a></li>
                    <li><a href="payment.php" class="hover:text-yellow-400">Donate</a></li>
                    <li><span class="text-yellow-400">Hi, <?= htmlspecialchars($user_name) ?></span></li>
                    <li><a href="logout.php" class="hover:text-yellow-400">Logout</a></li>
                </ul>
            </nav>
            <?php endif; ?>
        </div>
    </header>

    <main class="container mx-auto py-16">
        <div class="max-w-2xl mx-auto text-center">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <div class="mb-6">
                    <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-red-600 mb-4">Payment Failed</h2>
                    <p class="text-lg text-gray-700 mb-6">Unfortunately, your payment could not be processed. Please try again.</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="payment.php" class="bg-[#1a237e] text-white px-6 py-3 rounded-full hover:bg-blue-800 transition">Try Again</a>
                    <a href="index.php" class="border border-[#1a237e] text-[#1a237e] px-6 py-3 rounded-full hover:bg-gray-50 transition">Go to Home</a>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#1a237e] text-white py-6 mt-16">
        <div class="container mx-auto text-center text-sm">
            <p>&copy; <?= date('Y') ?> Cambridge Public Education and Welfare Trust. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
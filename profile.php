<?php
session_start();
require __DIR__ . '/razorpay/config.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Fetch user data
$userStmt = $pdo->prepare('SELECT name, email, created_at FROM users WHERE id = ?');
$userStmt->execute([$_SESSION['user_id']]);
$user = $userStmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    header('Location: login.php');
    exit;
}

// Fetch donation stats
$donationStmt = $pdo->prepare('SELECT COUNT(*) as total_donations, COALESCE(SUM(amount), 0) as total_amount FROM payments WHERE user_id = ? AND status = "paid"');
$donationStmt->execute([$_SESSION['user_id']]);
$donation_stats = $donationStmt->fetch(PDO::FETCH_ASSOC);

$page_title = 'Profile | Cambridge Public Education and Welfare Trust';

// Store user data before including header (in case header.php modifies variables)
$userName = htmlspecialchars($user['name']);
$userEmail = htmlspecialchars($user['email']);
$memberSince = date('d M Y', strtotime($user['created_at']));

include 'includes/header.php';
?>

<main class="container mx-auto py-12">
    <div class="max-w-2xl mx-auto">
        <h2 class="text-2xl font-bold text-[#1a237e] mb-6">My Profile</h2>
        
        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <h3 class="text-lg font-bold text-[#1a237e] mb-4">Personal Information</h3>
            <div class="space-y-3">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Name</label>
                    <p class="text-lg"><?= $userName ?></p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <p class="text-lg"><?= $userEmail ?></p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Member Since</label>
                    <p class="text-lg"><?= $memberSince ?></p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-bold text-[#1a237e] mb-4">Donation Summary</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="text-center p-4 bg-yellow-50 rounded-lg">
                    <div class="text-3xl font-bold text-[#1a237e]"><?= $donation_stats['total_donations'] ?></div>
                    <div class="text-gray-600">Total Donations</div>
                </div>
                <div class="text-center p-4 bg-yellow-50 rounded-lg">
                    <div class="text-3xl font-bold text-[#1a237e]">₹<?= number_format($donation_stats['total_amount'] / 100, 2) ?></div>
                    <div class="text-gray-600">Total Amount</div>
                </div>
            </div>
            
            <div class="mt-6 text-center">
                <a href="donations.php" class="bg-[#1a237e] text-white px-6 py-2 rounded hover:bg-blue-800 transition mr-4">View All Donations</a>
                <a href="payment.php" class="bg-yellow-400 text-[#1a237e] px-6 py-2 rounded hover:bg-yellow-300 transition">Make New Donation</a>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

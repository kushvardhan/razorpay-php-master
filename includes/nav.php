<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once __DIR__ . '/../razorpay/config.php';

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
<header class="bg-[#1a237e] text-white py-4">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
        <div class="flex items-center gap-4">
            <a href="index.php">
                <img src="cpeduw-Photoroom.png" alt="Trust Logo" class="h-12 w-12 rounded-lg">
            </a>
            <div>
                <a href="index.php" class="hover:text-yellow-400">
                    <h1 class="text-base md:text-lg font-bold">CAMBRIDGE PUBLIC EDUCATION AND WELFARE TRUST</h1>
                </a>
                <p class="text-yellow-400 text-xs hidden md:block">Vill. Jatpur, P.O.-Somra Baghla, P.S.-Moro, Dist.-Darbhanga, Bihar, India</p>
            </div>
        </div>
        <nav class="mt-4 md:mt-0">
            <ul class="flex flex-wrap gap-4 md:gap-6 text-sm md:text-base font-medium">
                <li><a href="index.php" class="hover:text-yellow-400">Home</a></li>
                <li><a href="about.php" class="hover:text-yellow-400">About</a></li>
                <li><a href="projects.php" class="hover:text-yellow-400">Projects</a></li>
                <li><a href="cause_details.php" class="hover:text-yellow-400">Donate</a></li>
                <li><a href="contact.php" class="hover:text-yellow-400">Contact</a></li>
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li><a href="profile.php" class="hover:text-yellow-400">Profile</a></li>
                    <li><a href="donations.php" class="hover:text-yellow-400">My Donations</a></li>
                    <li><span class="text-yellow-400 text-xs md:text-sm">Hi, <?= htmlspecialchars($user_name) ?></span></li>
                    <li><a href="logout.php" class="hover:text-yellow-400">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php" class="hover:text-yellow-400">Login</a></li>
                    <li><a href="register.php" class="hover:text-yellow-400">Register</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>
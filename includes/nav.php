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
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-white shadow-lg">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4">
            <!-- Logo & Brand -->
            <div class="flex items-center gap-4">
                <a href="index.php" class="flex items-center gap-4">
                    <img src="cpeduw-Photoroom.png" alt="Trust Logo" style="width: 60px; height: 60px;">
                    <div>
                        <h1 class="text-xl md:text-2xl font-bold text-gray-900">Cambridge Trust</h1>
                        <p class="text-sm text-gray-600 hidden md:block">Education • Welfare • Hope</p>
                    </div>
                </a>
            </div>

            <!-- Navigation -->
            <nav class="hidden md:flex items-center gap-8">
                <a href="index.php" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Home</a>
                <a href="about.php" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">About</a>
                <a href="projects.php" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Our Work</a>
                <a href="contact.php" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Contact</a>
            </nav>

            <!-- CTA & User Menu -->
            <div class="flex items-center gap-4">
                <!-- Donate Button -->
                <a href="cause_details.php" class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200">
                    ❤️ Donate
                </a>

                <!-- User Menu -->
                <?php if (isset($_SESSION['user_id'])): ?>
                    <div class="relative group">
                        <button class="flex items-center gap-2 text-gray-700 hover:text-blue-600 transition-colors">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                <span class="text-blue-600 font-semibold"><?= strtoupper(substr($user_name, 0, 1)) ?></span>
                            </div>
                            <span class="hidden md:block text-gray-700"><?= htmlspecialchars($user_name) ?></span>
                            <span class="text-xs">▼</span>
                        </button>
                        <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl border opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <a href="profile.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50">My Profile</a>
                            <a href="donations.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50">My Donations</a>
                            <hr class="my-1">
                            <a href="logout.php" class="block px-4 py-3 text-red-600 hover:bg-red-50">Logout</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="flex items-center gap-2">
                        <a href="login.php" class="text-gray-700 hover:text-blue-600 transition-colors px-4 py-2 rounded-lg">
                            Sign In
                        </a>
                        <a href="register.php" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                            Sign Up
                        </a>
                    </div>
                <?php endif; ?>

                <!-- Mobile Menu Button -->
                <button class="md:hidden p-2 text-gray-700" onclick="toggleMobileMenu()">
                    <span class="text-xl">☰</span>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden hidden border-t bg-white">
            <div class="py-4 space-y-2">
                <a href="index.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50">Home</a>
                <a href="about.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50">About</a>
                <a href="projects.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50">Our Work</a>
                <a href="contact.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50">Contact</a>
            </div>
        </div>
    </div>
</nav>

<script>
function toggleMobileMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
}
</script>
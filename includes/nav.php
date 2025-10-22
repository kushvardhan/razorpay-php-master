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
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-white shadow-lg transition-all duration-300">
  <div class="container mx-auto px-4">
    <div class="flex items-center justify-between py-3 md:py-4">

      <!-- Logo & Brand -->
      <div class="flex items-center gap-3 md:gap-4">
        <a href="index.php" class="flex items-center gap-3 md:gap-4">
          <img src="cpeduw-Photoroom.png" alt="Trust Logo" class="w-12 h-12 sm:w-14 sm:h-14">
          <div>
            <h1 class="text-lg sm:text-xl md:text-2xl font-bold text-gray-900">Cambridge Trust</h1>
            <p class="text-xs sm:text-sm text-gray-600 hidden md:block">Education • Welfare • Hope</p>
          </div>
        </a>
      </div>

      <!-- Desktop Navigation -->
      <nav class="hidden md:flex items-center gap-6 md:gap-8">
        <a href="index.php" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Home</a>
        <a href="about.php" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">About</a>
        <a href="projects.php" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Our Work</a>
        <a href="contact.php" class="text-gray-700 hover:text-blue-600 transition-colors font-medium">Contact</a>
      </nav>

      <!-- Desktop Donate Button & Sign In / Sign Up -->
      <div class="hidden md:flex items-center gap-3 md:gap-4">

        <!-- Donate Button (always visible) -->
        <a href="cause_details.php" class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-5 py-2.5 rounded-full font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200 whitespace-nowrap text-base">
          ❤️ Donate
        </a>

        <!-- User Menu if logged in -->
        <?php if (isset($_SESSION['user_id'])): ?>
          <div class="relative group">
            <button class="flex items-center gap-2 text-gray-700 hover:text-blue-600 transition-colors text-base">
              <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                <span class="text-blue-600 font-semibold"><?= strtoupper(substr($user_name, 0, 1)) ?></span>
              </div>
              <span><?= htmlspecialchars($user_name) ?></span>
              <span class="text-xs">▼</span>
            </button>
            <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl border opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <a href="profile.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50">My Profile</a>
              <a href="donations.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50">My Donations</a>
              <hr class="my-1">
              <a href="logout.php" class="block px-4 py-3 text-red-600 hover:bg-red-50">Logout</a>
            </div>
          </div>

        <!-- Sign In / Sign Up if NOT logged in -->
        <?php else: ?>
          <a href="login.php" class="text-gray-700 hover:text-blue-600 transition-colors px-4 py-2 rounded-md text-base text-center">
            Sign In
          </a>
          <a href="register.php" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors text-base text-center">
            Sign Up
          </a>
        <?php endif; ?>

      </div>

      <!-- Mobile Menu Button -->
      <button class="md:hidden p-2 text-gray-700" onclick="toggleMobileMenu()">
        <span class="text-2xl">☰</span>
      </button>

    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="md:hidden hidden border-t bg-white">
      <div class="py-4 flex flex-col gap-1">
        <a href="index.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg">Home</a>
        <a href="about.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg">About</a>
        <a href="projects.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg">Our Work</a>
        <a href="contact.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg">Contact</a>
        <a href="cause_details.php" class="block px-4 py-3 text-white bg-gradient-to-r from-orange-500 to-red-500 rounded-lg text-center font-semibold hover:opacity-90 transition-all duration-200">❤️ Donate</a>

        <!-- Sign In / Sign Up for Mobile -->
        <?php if (!isset($_SESSION['user_id'])): ?>
          <a href="login.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg text-center">Sign In</a>
          <a href="register.php" class="block px-4 py-3 text-white bg-blue-600 hover:bg-blue-700 rounded-lg text-center font-semibold">Sign Up</a>
        <?php endif; ?>
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

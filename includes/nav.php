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
  <div class="container mx-auto px-3 sm:px-4">
    <div class="flex items-center justify-between py-2 sm:py-3 lg:py-4">

      <!-- Logo & Brand -->
      <div class="flex items-center gap-2 sm:gap-3 lg:gap-4 flex-shrink-0">
        <a href="index.php" class="flex items-center gap-2 sm:gap-3 lg:gap-4">
          <img src="cpeduw-Photoroom.png" alt="Trust Logo" class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14">
          <div class="hidden sm:block">
            <h1 class="text-sm sm:text-base lg:text-xl font-bold text-gray-900 leading-tight">Cambridge Trust</h1>
            <p class="text-xs text-gray-600 hidden lg:block">Education • Welfare • Hope</p>
          </div>
        </a>
      </div>

      <!-- Desktop Navigation - Hidden on mobile, visible on lg -->
      <nav class="hidden lg:flex items-center gap-6 xl:gap-8">
        <a href="index.php" class="text-gray-700 hover:text-blue-600 transition-colors font-semibold text-base lg:text-lg xl:text-xl">Home</a>
        <a href="about.php" class="text-gray-700 hover:text-blue-600 transition-colors font-semibold text-base lg:text-lg xl:text-xl">About</a>
        <a href="projects.php" class="text-gray-700 hover:text-blue-600 transition-colors font-semibold text-base lg:text-lg xl:text-xl">Our Work</a>
        <a href="contact.php" class="text-gray-700 hover:text-blue-600 transition-colors font-semibold text-base lg:text-lg xl:text-xl">Contact</a>
      </nav>

      <!-- Desktop Donate Button & Sign In / Sign Up -->
      <div class="hidden lg:flex items-center gap-2 xl:gap-3 flex-shrink-0">

        <!-- Donate Button (always visible) -->
        <a href="cause_details.php" class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-4 xl:px-5 py-2 xl:py-2.5 rounded-full font-semibold shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200 whitespace-nowrap text-sm xl:text-base">
          ❤️ Donate
        </a>

        <!-- User Menu if logged in -->
        <?php if (isset($_SESSION['user_id'])): ?>
          <div class="relative group">
            <button class="flex items-center gap-2 text-gray-700 hover:text-blue-600 transition-colors text-sm xl:text-base">
              <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 font-semibold text-xs"><?= strtoupper(substr($user_name, 0, 1)) ?></span>
              </div>
              <span class="hidden xl:inline"><?= htmlspecialchars($user_name) ?></span>
              <span class="text-xs">▼</span>
            </button>
            <div class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl border opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
              <a href="profile.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 text-sm">My Profile</a>
              <a href="donations.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 text-sm">My Donations</a>
              <hr class="my-1">
              <a href="logout.php" class="block px-4 py-3 text-red-600 hover:bg-red-50 text-sm">Logout</a>
            </div>
          </div>

        <!-- Sign In / Sign Up if NOT logged in -->
        <?php else: ?>
          <a href="login.php" class="text-gray-700 hover:text-blue-600 transition-colors px-3 py-2 rounded-md text-sm xl:text-base text-center">
            Sign In
          </a>
          <a href="register.php" class="bg-blue-600 text-white px-3 py-2 rounded-md hover:bg-blue-700 transition-colors text-sm xl:text-base text-center">
            Sign Up
          </a>
        <?php endif; ?>

      </div>

      <!-- Mobile/Tablet Menu Button - Visible on md and below -->
      <div class="lg:hidden flex items-center gap-2">
        <!-- Mobile Donate Button -->
        <a href="cause_details.php" class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-3 sm:px-4 py-2 rounded-full font-semibold shadow-lg hover:shadow-xl transition-all duration-200 whitespace-nowrap text-xs sm:text-sm">
          ❤️ Donate
        </a>

        <!-- Menu Toggle Button -->
        <button class="p-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors" onclick="toggleMobileMenu()">
          <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>

    </div>

    <!-- Mobile/Tablet Menu -->
    <div id="mobileMenu" class="lg:hidden hidden border-t bg-white max-h-[calc(100vh-80px)] overflow-y-auto">
      <div class="py-3 sm:py-4 flex flex-col gap-1">
        <a href="index.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg text-sm sm:text-base font-medium transition-colors">Home</a>
        <a href="about.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg text-sm sm:text-base font-medium transition-colors">About</a>
        <a href="projects.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg text-sm sm:text-base font-medium transition-colors">Our Work</a>
        <a href="contact.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg text-sm sm:text-base font-medium transition-colors">Contact</a>

        <div class="border-t my-2"></div>

        <!-- User Menu for Mobile/Tablet -->
        <?php if (isset($_SESSION['user_id'])): ?>
          <div class="px-4 py-3">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 font-semibold"><?= strtoupper(substr($user_name, 0, 1)) ?></span>
              </div>
              <span class="text-gray-700 font-medium text-sm sm:text-base"><?= htmlspecialchars($user_name) ?></span>
            </div>
            <a href="profile.php" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm transition-colors">My Profile</a>
            <a href="donations.php" class="block px-3 py-2 text-gray-700 hover:bg-gray-50 rounded-lg text-sm transition-colors">My Donations</a>
            <a href="logout.php" class="block px-3 py-2 text-red-600 hover:bg-red-50 rounded-lg text-sm transition-colors font-medium">Logout</a>
          </div>
        <?php else: ?>
          <a href="login.php" class="block px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg text-sm sm:text-base font-medium transition-colors text-center">Sign In</a>
          <a href="register.php" class="block px-4 py-3 text-white bg-blue-600 hover:bg-blue-700 rounded-lg text-center font-semibold text-sm sm:text-base transition-colors">Sign Up</a>
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

  // Close menu when clicking on a link
  document.querySelectorAll('#mobileMenu a').forEach(link => {
    link.addEventListener('click', () => {
      document.getElementById('mobileMenu').classList.add('hidden');
    });
  });
</script>

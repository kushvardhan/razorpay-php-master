<?php
session_start();
$page_title = 'Terms and Conditions | Cambridge Public Education and Welfare Trust';
include 'includes/header.php';
?>

<!-- Hero Section (Subtle beige-gold gradient) -->
<section class="relative overflow-hidden bg-gradient-to-br from-[#f7f4ef] via-[#f0e6d8] to-[#e4d6b8] text-gray-900 py-20 sm:py-24 lg:py-28">
  <!-- Decorative soft glow -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div class="absolute -top-16 -left-16 w-72 h-72 bg-amber-200/40 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-[26rem] h-[26rem] bg-yellow-100/30 rounded-full blur-3xl"></div>
  </div>

  <div class="relative container mx-auto px-6 text-center">
    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-5 leading-tight drop-shadow">
      Terms & Conditions
    </h1>
    <p class="text-base sm:text-lg lg:text-xl max-w-3xl mx-auto text-gray-700 leading-relaxed">
      Please review our policies carefully — designed to protect your rights and maintain the transparency of our operations.
    </p>

    <div class="mt-10 flex flex-wrap justify-center gap-4">
      <span class="inline-flex items-center bg-white/40 backdrop-blur-sm px-5 py-2.5 rounded-full text-sm font-medium shadow-sm hover:bg-white/60 transition">
        Ethical Practices
      </span>
      <span class="inline-flex items-center bg-white/40 backdrop-blur-sm px-5 py-2.5 rounded-full text-sm font-medium shadow-sm hover:bg-white/60 transition">
        Trust & Fairness
      </span>
      <span class="inline-flex items-center bg-white/40 backdrop-blur-sm px-5 py-2.5 rounded-full text-sm font-medium shadow-sm hover:bg-white/60 transition">
        Accountability
      </span>
    </div>

    <div class="mt-12 h-1 w-40 mx-auto bg-gradient-to-r from-amber-300 via-yellow-200 to-amber-100 rounded-full shadow"></div>
  </div>
</section>


<!-- Main Content Section -->
<main class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
  <div class="bg-white rounded-2xl shadow-md p-8 space-y-10 border border-amber-100">

    <?php
    $terms = [
      ['1. Acceptance of Terms', 'By accessing this website, you agree to be bound by these Terms and Conditions. Cambridge Welfare Trust reserves the right to update or modify these terms at any time without prior notice.'],
      ['2. Permitted Use', 'You may use this website for personal, non-commercial purposes only. Reproduction or redistribution of any material is strictly prohibited without written permission.'],
      ['3. Disclaimer', 'All information provided on this site is for general purposes only. Cambridge Welfare Trust disclaims any liability for inaccuracies or omissions.'],
      ['4. Limitations of Liability', 'Cambridge Welfare Trust shall not be responsible for any damages arising from the use or inability to use the materials provided herein.'],
      ['5. Accuracy of Content', 'While we strive for accuracy, the information on this site may contain errors or outdated content. We reserve the right to make corrections without notice.'],
      ['6. External Links', 'Our website may contain links to external websites. We are not responsible for their content, privacy practices, or accuracy.'],
      ['7. Policy Updates', 'These terms may be reviewed and updated periodically. Continued use of our website implies your acceptance of the latest version.'],
      ['8. Governing Law', 'These terms are governed by the laws of India. All disputes are subject to the exclusive jurisdiction of Indian courts.']
    ];

    foreach ($terms as $index => $section) {
      echo "
        <section class='border-b border-gray-100 pb-6'>
          <h2 class='text-2xl font-semibold text-amber-800 mb-3'>{$section[0]}</h2>
          <p class='text-gray-700 leading-relaxed text-[15px]'>{$section[1]}</p>
        </section>
      ";
    }
    ?>

    <!-- Contact Info -->
    <section>
      <h2 class="text-2xl font-semibold text-amber-800 mb-4">Contact Information</h2>
      <div class="bg-gradient-to-br from-amber-50 via-white to-yellow-50 p-6 rounded-xl border border-amber-100">
        <p class="text-gray-700 mb-2 font-medium">Cambridge Welfare Trust</p>
        <p class="text-gray-700 mb-1">Vill. Saidpur, PO Sormar Baghala</p>
        <p class="text-gray-700 mb-1">P.S. Moro, Dist. Darbhanga, Bihar - 847106</p>
        <p class="text-gray-700">Email: <a href="mailto:cps4287@gmail.com" class="text-amber-700 hover:underline">cps4287@gmail.com</a></p>
      </div>
    </section>
  </div>

  <!-- CTA Section -->
  <div class="mt-16 rounded-2xl overflow-hidden">
    <div class="bg-gradient-to-r from-[#f5d29b] to-[#e4c48f] text-gray-900 px-6 py-8 sm:px-10 flex flex-col sm:flex-row items-center justify-between gap-4">
      <div>
        <h4 class="text-lg font-semibold">Have questions regarding our Terms?</h4>
        <p class="text-sm text-gray-700">We’re happy to assist — feel free to reach out for clarification or queries.</p>
      </div>
      <div>
        <a href="contact-us.php" class="inline-block bg-gray-900 text-white px-4 py-2 rounded-lg font-semibold hover:bg-gray-800 transition">Contact Us</a>
      </div>
    </div>
  </div>
</main>

<?php include 'includes/footer.php'; ?>

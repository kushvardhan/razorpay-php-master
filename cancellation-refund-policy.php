<?php
session_start();
$page_title = 'Cancellation & Refund Policy | Cambridge Public Education and Welfare Trust';
include 'includes/header.php';
?>

    <!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-[#0d47a1] via-[#1565c0] to-[#1e88e5] text-white py-20 sm:py-24 lg:py-28">
  <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
  <div class="relative container mx-auto px-6 text-center">
    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-4 drop-shadow-lg">
      Cancellation & Refund Policy
    </h1>
    <p class="text-base sm:text-lg lg:text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
      Transparency and trust — our approach to handling donations, cancellations, and refunds with care.
    </p>
  </div>
</section>

<!-- Main Content -->
<main class="container mx-auto px-6 py-20 space-y-20">

  <!-- 1. Donation Policy -->
  <section class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl shadow-xl p-8 sm:p-10 border border-blue-100">
    <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0d47a1] mb-4">1. Donation Policy</h2>
    <p class="text-gray-700 text-base sm:text-lg leading-relaxed">
      All donations made to <strong>Cambridge Welfare Trust</strong> are voluntary contributions to support our charitable initiatives. Donations are generally non-refundable as they are immediately utilized for educational and welfare programs.
    </p>
  </section>

  <!-- 2. Cancellation of Donation -->
  <section class="bg-white rounded-3xl shadow-md p-8 sm:p-10 border-l-4 border-blue-600 hover:shadow-lg transition duration-300">
    <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0d47a1] mb-4">2. Cancellation of Donation</h2>
    <p class="text-gray-700 text-base sm:text-lg mb-4">
      Once a donation has been successfully processed and confirmed, it cannot be cancelled. However, if you experience any issues during the payment process:
    </p>
    <ul class="list-disc list-inside space-y-2 pl-4 text-gray-700">
      <li>If payment fails, no amount will be deducted.</li>
      <li>If charged twice due to a technical error, contact us immediately.</li>
      <li>We’ll investigate and process refunds within 7–10 business days.</li>
    </ul>
  </section>

  <!-- 3. Refund Process -->
  <section class="relative rounded-3xl p-8 sm:p-10 overflow-hidden text-white bg-gradient-to-br from-[#1976d2] via-[#1e88e5] to-[#42a5f5] shadow-xl">
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/white-diamond.png')] opacity-10"></div>
    <div class="relative">
      <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">3. Refund Process</h2>
      <p class="text-blue-50 text-base sm:text-lg mb-4">
        In case of duplicate charges or technical errors, we ensure quick resolution:
      </p>
      <ul class="list-disc list-inside space-y-2 pl-4 text-blue-50">
        <li>Share proof of duplicate charge with us.</li>
        <li>We verify the transaction with Razorpay.</li>
        <li>Refunds are processed to your original payment method.</li>
        <li>Expected within 5–7 business days.</li>
      </ul>
    </div>
  </section>

  <!-- 4. Payment Issues -->
  <section class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-3xl shadow-lg p-8 sm:p-10">
    <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0d47a1] mb-4">4. Payment Issues</h2>
    <p class="text-gray-700 text-base sm:text-lg mb-4">
      If you face any payment-related issues, contact us at 
      <a href="mailto:" class="text-blue-700 font-medium hover:underline"></a> with:
    </p>
    <ul class="list-disc list-inside space-y-2 pl-4 text-gray-700">
      <li>Transaction ID or Receipt Number</li>
      <li>Date and amount of transaction</li>
      <li>Brief description of issue</li>
    </ul>
  </section>

  <!-- 5. Recurring Donations -->
  <section class="bg-white border border-blue-100 rounded-3xl shadow-lg p-8 sm:p-10 hover:border-blue-300 transition">
    <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0d47a1] mb-4">5. Recurring Donations</h2>
    <p class="text-gray-700 text-base sm:text-lg leading-relaxed">
      You can cancel recurring donations anytime by contacting us. The cancellation takes effect from your next scheduled donation.
    </p>
  </section>

  <!-- 6. Dispute Resolution -->
  <section class="bg-gradient-to-r from-indigo-600 via-blue-700 to-cyan-600 rounded-3xl text-white p-8 sm:p-10 shadow-2xl">
    <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">6. Dispute Resolution</h2>
    <p class="text-blue-50 text-base sm:text-lg leading-relaxed">
      We collaborate closely with Razorpay to resolve any disputes transparently and fairly. All matters are resolved within 30 days, ensuring donor satisfaction and compliance.
    </p>
  </section>

  <!-- Contact -->
  <section class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl p-10 shadow-inner border-l-4 border-blue-600">
    <h2 class="text-3xl sm:text-4xl font-extrabold text-[#0d47a1] mb-6">Contact Information</h2>
    <p class="text-lg font-semibold text-gray-900">Cambridge Welfare Trust</p>
    <p class="text-gray-700">Vill. Saidpur, PO Sormar Baghala</p>
    <p class="text-gray-700">P.S. Moro, Dist. Darbhanga, Bihar – 847106</p>
    <p class="mt-3">Email: 
      <a href="mailto:cps4287@gmail.com" class="text-blue-700 hover:underline">cps4287@gmail.com</a>
    </p>
  </section>

</main>


<?php include 'includes/footer.php'; ?>

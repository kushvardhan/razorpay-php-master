<?php
session_start();
$page_title = 'Shipping Policy | Cambridge Public Education and Welfare Trust';
include 'includes/header.php';
?>

    <!-- Hero Section (unique look - soft green gradient) -->
<section class="relative overflow-hidden bg-gradient-to-br from-[#0d47a1] via-[#1976d2] to-[#00bcd4] text-white py-20 sm:py-24 lg:py-28">
  <!-- Decorative Background Elements -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div class="absolute -top-20 -left-20 w-96 h-96 bg-blue-300/20 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-[28rem] h-[28rem] bg-cyan-400/30 rounded-full blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 w-[40rem] h-[40rem] bg-indigo-500/10 rounded-full blur-[160px] -translate-x-1/2 -translate-y-1/2"></div>
  </div>

  <div class="relative container mx-auto px-6 text-center">
    <!-- Heading -->
    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-5 leading-tight drop-shadow-lg">
      Shipping Policy
    </h1>
    <p class="text-base sm:text-lg lg:text-xl max-w-3xl mx-auto text-blue-100 leading-relaxed">
      Clear, transparent, and donor-focused — how we manage digital receipts, physical certificates, and secure document delivery across India.
    </p>

    <!-- Animated Info Badges -->
    <div class="mt-10 flex flex-wrap justify-center gap-4">
      <span class="inline-flex items-center bg-white/15 backdrop-blur-sm px-5 py-2.5 rounded-full text-sm font-medium shadow-lg hover:bg-white/25 transition duration-300">
        <svg class="w-5 h-5 mr-2 text-blue-50" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
          <path d="M3 8l7-5 7 5v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8z" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Digital-first Receipts
      </span>

      <span class="inline-flex items-center bg-white/15 backdrop-blur-sm px-5 py-2.5 rounded-full text-sm font-medium shadow-lg hover:bg-white/25 transition duration-300">
        <svg class="w-5 h-5 mr-2 text-blue-50" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
          <path d="M3 10h18M7 6h.01M7 14h.01M7 18h.01" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Physical Copies on Request
      </span>

      <span class="inline-flex items-center bg-white/15 backdrop-blur-sm px-5 py-2.5 rounded-full text-sm font-medium shadow-lg hover:bg-white/25 transition duration-300">
        <svg class="w-5 h-5 mr-2 text-blue-50" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
          <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Secure & Verified Processing
      </span>
    </div>

    <!-- Gradient Divider -->
    <div class="mt-12 h-1 w-40 mx-auto bg-gradient-to-r from-cyan-300 via-sky-200 to-indigo-300 rounded-full shadow-lg"></div>
  </div>
</section>



    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <!-- Two column intro -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-10">
            <div class="lg:col-span-2 bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-2xl sm:text-3xl font-semibold text-emerald-700 mb-4">What this policy covers</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Cambridge Welfare Trust primarily issues digital receipts and certificates to donors. When physical documents are requested, this policy explains timelines, shipping methods, and what to expect.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                    <div class="p-4 border border-gray-100 rounded-lg">
                        <h3 class="font-semibold text-gray-800 mb-2">Digital Receipts</h3>
                        <p class="text-gray-600 text-sm">Automatically emailed after a successful donation (PDF). Prefer paper? Request below.</p>
                    </div>
                    <div class="p-4 border border-gray-100 rounded-lg">
                        <h3 class="font-semibold text-gray-800 mb-2">Physical Receipts</h3>
                        <p class="text-gray-600 text-sm">Dispatched within 7–10 business days to any Indian postal address provided by the donor.</p>
                    </div>
                </div>
            </div>

            <aside class="bg-emerald-50 border-l-4 border-emerald-600 rounded-2xl p-6 shadow-sm">
                <h4 class="text-lg font-semibold text-emerald-700 mb-3">Need a physical receipt?</h4>
                <p class="text-gray-700 text-sm mb-4">Email us with your donation transaction ID and postal address. We’ll confirm and dispatch the physical copy.</p>
                <a href="contact-us.html" class="inline-block bg-emerald-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:shadow-md transition">Request Receipt</a>
            </aside>
        </div>

        <!-- Timeline / Steps (unique visual) -->
        <div class="bg-white rounded-2xl shadow-lg p-8 mb-10">
            <h2 class="text-2xl sm:text-3xl font-semibold text-emerald-700 mb-6">How shipping works — step by step</h2>

            <ol class="relative border-l border-gray-200 ml-2 space-y-8">
                <li class="relative pl-6">
                    <span class="absolute -left-3 top-0 bg-emerald-600 text-white w-6 h-6 rounded-full flex items-center justify-center text-xs">1</span>
                    <h3 class="text-md font-semibold text-gray-800">Donation completed</h3>
                    <p class="text-gray-600 text-sm">Digital receipt emailed instantly. Save the transaction ID for any follow-up.</p>
                </li>

                <li class="relative pl-6">
                    <span class="absolute -left-3 top-0 bg-emerald-600 text-white w-6 h-6 rounded-full flex items-center justify-center text-xs">2</span>
                    <h3 class="text-md font-semibold text-gray-800">Request physical copy (optional)</h3>
                    <p class="text-gray-600 text-sm">Send a mail to <a href="mailto:cps4287@gmail.com" class="text-emerald-600 hover:underline">cps4287@gmail.com</a> with your transaction ID and address.</p>
                </li>

                <li class="relative pl-6">
                    <span class="absolute -left-3 top-0 bg-emerald-600 text-white w-6 h-6 rounded-full flex items-center justify-center text-xs">3</span>
                    <h3 class="text-md font-semibold text-gray-800">Processing & dispatch</h3>
                    <p class="text-gray-600 text-sm">We prepare and dispatch within 7–10 business days (certificates 14–21 days where applicable).</p>
                </li>

                <li class="relative pl-6">
                    <span class="absolute -left-3 top-0 bg-emerald-600 text-white w-6 h-6 rounded-full flex items-center justify-center text-xs">4</span>
                    <h3 class="text-md font-semibold text-gray-800">Delivery</h3>
                    <p class="text-gray-600 text-sm">Standard postal delivery times vary by region; we can arrange courier delivery if tracking is required (additional charges may apply).</p>
                </li>
            </ol>
        </div>

        <!-- Policies details grid (responsive and unique style) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-10">
            <div class="lg:col-span-2 bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-xl font-semibold text-emerald-700 mb-4">Detailed Guidelines</h2>

                <div class="space-y-6 text-gray-700">
                    <div>
                        <h4 class="font-semibold mb-2">Address accuracy</h4>
                        <p class="text-sm">Please provide a complete address (name, street/village, post office, district, state, pincode). Incorrect addresses may delay or prevent delivery.</p>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Tracking</h4>
                        <p class="text-sm">Standard post may not offer tracking. If you require tracking, request courier delivery and we will provide the estimate and charges.</p>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">Lost or damaged items</h4>
                        <p class="text-sm">If a receipt or certificate is lost/damaged in transit, contact us with the transaction ID. We will issue a replacement within 7–10 business days after verification.</p>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-2">International donors</h4>
                        <p class="text-sm">We currently dispatch physical documents only within India. International donors receive digital receipts and certificates via email.</p>
                    </div>
                </div>
            </div>

            <!-- Right column contact card -->
            <aside class="bg-gradient-to-br from-emerald-50 to-white border border-emerald-100 rounded-2xl p-6 shadow-sm">
                <h3 class="text-lg font-semibold text-emerald-700 mb-3">Contact for Shipping</h3>
                <p class="text-gray-700 text-sm mb-4">Email us with your transaction details and preferred shipping method.</p>
                <div class="text-sm text-gray-700 mb-4">
                    <p class="font-medium">Cambridge Welfare Trust</p>
                    <p>Vill. Saidpur, PO Sormar Baghala</p>
                    <p>P.S. Moro, Dist. Darbhanga, Bihar - 847106</p>
                </div>
                <a href="mailto:cps4287@gmail.com" class="block text-center bg-emerald-600 text-white py-2 rounded-lg font-medium hover:bg-emerald-700 transition">Email: cps4287@gmail.com</a>
            </aside>
        </div>

        <!-- CTA strip -->
        <div class="rounded-2xl overflow-hidden">
            <div class="bg-gradient-to-r from-emerald-600 to-teal-500 text-white px-6 py-8 sm:px-10 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div>
                    <h4 class="text-lg font-semibold">Want physical receipt or certificate?</h4>
                    <p class="text-sm opacity-90">Send your transaction ID and address to <a href="mailto:cps4287@gmail.com" class="underline">cps4287@gmail.com</a> — we’ll confirm dispatch timeline.</p>
                </div>
                <div>
                    <a href="contact-us.html" class="inline-block bg-white text-emerald-700 px-4 py-2 rounded-lg font-semibold hover:shadow-md transition">Contact Us</a>
                </div>
            </div>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>

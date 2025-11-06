<?php
session_start();
$page_title = 'Cancellation & Refund Policy | Cambridge Public Education and Welfare Trust';
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-[#1a237e] to-[#0d47a1] text-white py-16 sm:py-20 lg:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-4 leading-tight">Cancellation & Refund Policy</h1>
            <p class="text-lg sm:text-xl lg:text-2xl text-blue-100 max-w-3xl mx-auto">
                Your support matters — here’s how we handle cancellations, refunds, and payment issues.
            </p>
        </div>
    </section>

    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">
        <div class="max-w-5xl mx-auto bg-white rounded-3xl shadow-lg p-8 sm:p-10 lg:p-12 space-y-12 border-l-4 border-blue-600">
            
            <!-- Section 1 -->
            <section>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-4">1. Donation Policy</h2>
                <p class="text-gray-700 text-base sm:text-lg leading-relaxed">
                    All donations made to <strong>Cambridge Welfare Trust</strong> are voluntary contributions to support our charitable activities.
                    Donations are generally non-refundable as they are immediately utilised for our welfare and educational programs.
                </p>
            </section>

            <!-- Section 2 -->
            <section>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-4">2. Cancellation of Donation</h2>
                <p class="text-gray-700 text-base sm:text-lg mb-4">
                    Once a donation has been successfully processed and confirmed, it cannot be cancelled. However, if you experience any issues during the payment process:
                </p>
                <ul class="list-disc list-inside space-y-2 pl-4 text-gray-700">
                    <li>If payment fails, no amount will be deducted from your account.</li>
                    <li>If you are charged twice due to a technical error, please contact us immediately.</li>
                    <li>We will investigate and process a refund within 7–10 business days.</li>
                </ul>
            </section>

            <!-- Section 3 -->
            <section>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-4">3. Refund Process</h2>
                <p class="text-gray-700 text-base sm:text-lg mb-4">
                    In case of duplicate charges or payment errors:
                </p>
                <ul class="list-disc list-inside space-y-2 pl-4 text-gray-700">
                    <li>Contact us with proof of duplicate charge.</li>
                    <li>We will verify the transaction with Razorpay.</li>
                    <li>Refund will be processed to your original payment method.</li>
                    <li>Refunds typically appear within 5–7 business days.</li>
                </ul>
            </section>

            <!-- Section 4 -->
            <section>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-4">4. Payment Issues</h2>
                <p class="text-gray-700 text-base sm:text-lg mb-4">
                    If you encounter any payment issues or have concerns about a transaction, please contact us immediately at 
                    <a href="mailto:info@cambridgewelfaretrust.org" class="text-blue-600 hover:underline">info@cambridgewelfaretrust.org</a> with:
                </p>
                <ul class="list-disc list-inside space-y-2 pl-4 text-gray-700">
                    <li>Transaction ID or Receipt Number</li>
                    <li>Date and amount of transaction</li>
                    <li>Description of the issue</li>
                </ul>
            </section>

            <!-- Section 5 -->
            <section>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-4">5. Recurring Donations</h2>
                <p class="text-gray-700 text-base sm:text-lg leading-relaxed">
                    If you have set up a recurring donation, you can cancel it at any time by contacting us. Cancellation will take effect from the next scheduled donation date.
                </p>
            </section>

            <!-- Section 6 -->
            <section>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-4">6. Dispute Resolution</h2>
                <p class="text-gray-700 text-base sm:text-lg leading-relaxed">
                    In case of any disputes regarding donations or refunds, we will work with Razorpay to resolve the matter fairly and transparently. 
                    All disputes will be resolved within 30 days.
                </p>
            </section>

            <!-- Contact Section -->
            <section>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-6">Contact Information</h2>
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl shadow-inner p-6 sm:p-8 border-l-4 border-blue-600">
                    <p class="mb-2 text-lg font-semibold text-gray-900">Cambridge Welfare Trust</p>
                    <p class="text-gray-700">Vill. Saidpur, PO Sormar Baghala</p>
                    <p class="text-gray-700">P.S. Moro, Dist. Darbhanga, Bihar – 847106</p>
                    <p class="mt-2">Email: 
                        <a href="mailto:info@cambridgewelfaretrust.org" class="text-blue-600 hover:underline">info@cambridgewelfaretrust.org</a>
                    </p>
                </div>
            </section>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>

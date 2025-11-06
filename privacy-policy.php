<?php
session_start();
$page_title = 'Privacy Policy | Cambridge Public Education and Welfare Trust';
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-[#1a237e] to-[#0d47a1] text-white py-16 sm:py-20 lg:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-4 leading-tight">Privacy Policy</h1>
            <p class="text-lg sm:text-xl lg:text-2xl text-blue-100 max-w-3xl mx-auto">
                Your privacy and trust are our highest priorities — here’s how we protect your data.
            </p>
        </div>
    </section>

    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">
        <div class="max-w-5xl mx-auto bg-white rounded-3xl shadow-lg p-8 sm:p-10 lg:p-12 space-y-12 border-l-4 border-blue-600">
            
            <!-- Section 1 -->
            <section>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-4">1. Introduction</h2>
                <p class="text-gray-700 text-base sm:text-lg leading-relaxed">
                    <strong>Cambridge Welfare Trust</strong> (“we”, “us”, “our”) operates this website to support our charitable and educational missions. 
                    This Privacy Policy explains how we collect, use, and safeguard your information when you interact with our website or make a donation.
                </p>
            </section>

            <!-- Section 2 -->
            <section>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-4">2. Information We Collect</h2>
                <p class="text-gray-700 text-base sm:text-lg mb-4">
                    We collect only the data necessary to operate our website and manage donations effectively:
                </p>
                <ul class="list-disc list-inside text-gray-700 space-y-2 pl-4">
                    <li><strong>Personal Data:</strong> Name, email address, phone number, and donation amount</li>
                    <li><strong>Usage Data:</strong> Browser type, IP address, pages visited, and visit duration</li>
                    <li><strong>Payment Information:</strong> Securely processed through Razorpay — we do not store your card details</li>
                </ul>
            </section>

            <!-- Section 3 -->
            <section>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-4">3. How We Use Your Data</h2>
                <p class="text-gray-700 text-base sm:text-lg leading-relaxed">
                    The information collected helps us improve our services and maintain transparency. Specifically, we use data:
                </p>
                <ul class="list-disc list-inside text-gray-700 space-y-2 pl-4">
                    <li>To process donations and send receipts</li>
                    <li>To communicate updates about our projects</li>
                    <li>To enhance user experience on our website</li>
                    <li>To comply with legal and regulatory requirements</li>
                </ul>
            </section>

            <!-- Section 4 -->
            <section>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-4">4. Security of Your Information</h2>
                <p class="text-gray-700 text-base sm:text-lg leading-relaxed">
                    We implement appropriate technical and organizational measures to protect your personal information. 
                    While no online method is entirely risk-free, we use SSL encryption, secure servers, and trusted partners to ensure your data is safe.
                </p>
            </section>

            <!-- Section 5 -->
            <section>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-4">5. Payment Processing</h2>
                <p class="text-gray-700 text-base sm:text-lg leading-relaxed">
                    All donations are processed through <strong>Razorpay</strong>, our secure payment partner. 
                    We do not have access to or store your payment card details. 
                    Razorpay uses encryption and PCI DSS compliant systems to handle all transactions securely.
                </p>
            </section>

            <!-- Section 6 -->
            <section>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-4">6. Policy Updates</h2>
                <p class="text-gray-700 text-base sm:text-lg leading-relaxed">
                    We may update this Privacy Policy periodically to reflect changes in legal, technical, or operational requirements. 
                    Any updates will be posted on this page with a revised “Last Updated” date.
                </p>
            </section>

            <!-- Section 7 -->
            <section>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#1a237e] mb-6">7. Contact Us</h2>
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl shadow-inner p-6 sm:p-8 border-l-4 border-blue-600">
                    <p class="mb-2 text-lg font-semibold text-gray-900">Cambridge Welfare Trust</p>
                    <p class="text-gray-700">Vill. Saidpur, PO Sormar Baghala</p>
                    <p class="text-gray-700">P.S. Moro, Dist. Darbhanga, Bihar – 847106</p>
                    <p class="mt-2">Email: 
                        <a href="mailto:cps4287@gmail.com" class="text-blue-600 hover:underline">cps4287@gmail.com</a>
                    </p>
                </div>
            </section>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>

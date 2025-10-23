<?php
session_start();
$page_title = 'About Us | Cambridge Public Education and Welfare Trust';
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-[#1a237e] to-[#0d47a1] text-white py-16 sm:py-20 lg:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-4 leading-tight">About Cambridge Trust</h1>
            <p class="text-lg sm:text-xl lg:text-2xl text-blue-100 max-w-3xl mx-auto">Empowering Lives Through Education, Welfare & Community Development</p>
        </div>
    </section>

    <main class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">
        <!-- Mission Section -->
        <div class="max-w-5xl mx-auto mb-16 lg:mb-24">
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl shadow-lg p-8 sm:p-10 lg:p-12 border-l-4 border-blue-600">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#1a237e] mb-6">Our Mission</h2>
                <p class="text-gray-700 text-base sm:text-lg lg:text-xl mb-4 leading-relaxed">Cambridge Public Education and Welfare Trust is dedicated to providing quality education and welfare support to underprivileged children in Bihar, India. We believe that education is the foundation for a secure, dignified, and fulfilling life.</p>
                <p class="text-gray-700 text-base sm:text-lg lg:text-xl leading-relaxed">Registered on 15th July 2014 under the Government of Bihar, we have been working tirelessly to ensure that no child is left behind in their educational journey. Our commitment extends beyond education to encompass comprehensive welfare and community development.</p>
            </div>
        </div>

        <!-- Core Values -->
        <div class="mb-16 lg:mb-24">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#1a237e] mb-12 text-center">Our Core Values</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl p-8 lg:p-10 transition-all duration-300 border-t-4 border-blue-600 hover:-translate-y-2">
                    <div class="flex items-center justify-center w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-blue-100 to-blue-50 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 sm:w-10 sm:h-10 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C6.5 6.253 2 10.998 2 17s4.5 10.747 10 10.747c5.5 0 10-4.998 10-10.747S17.5 6.253 12 6.253z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#1a237e] mb-3">Education</h3>
                    <p class="text-gray-700 text-base sm:text-lg">Providing quality education to underprivileged children and empowering them for a better future</p>
                </div>
                <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl p-8 lg:p-10 transition-all duration-300 border-t-4 border-green-600 hover:-translate-y-2">
                    <div class="flex items-center justify-center w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-green-100 to-green-50 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 sm:w-10 sm:h-10 text-green-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#1a237e] mb-3">Welfare</h3>
                    <p class="text-gray-700 text-base sm:text-lg">Supporting children's overall well-being, health, and holistic development</p>
                </div>
                <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl p-8 lg:p-10 transition-all duration-300 border-t-4 border-purple-600 hover:-translate-y-2">
                    <div class="flex items-center justify-center w-16 h-16 sm:w-20 sm:h-20 bg-gradient-to-br from-purple-100 to-purple-50 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 sm:w-10 sm:h-10 text-purple-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.856-1.487M15 10a3 3 0 11-6 0 3 3 0 016 0zM4.318 6.318a4.5 4.5 0 000 6.364M4.318 6.318L12 14.682m0 0L19.682 7m0 0a4.5 4.5 0 010 6.364m0 0L12 14.682"/>
                        </svg>
                    </div>
                    <h3 class="text-xl sm:text-2xl font-bold text-[#1a237e] mb-3">Community</h3>
                    <p class="text-gray-700 text-base sm:text-lg">Building stronger communities through sustainable development and social empowerment</p>
                </div>
            </div>
        </div>

        <!-- Registration & Certifications -->
        <div class="mb-16 lg:mb-24">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#1a237e] mb-12 text-center">Official Registration & Certifications</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                <!-- 12G Registration -->
                <div class="bg-white rounded-3xl shadow-lg p-8 lg:p-10 border-t-4 border-green-600 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-green-100 to-green-50 rounded-2xl mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-[#1a237e] mb-2">12G Registration</h3>
                    <p class="text-gray-700 text-sm sm:text-base">Income Tax Exemption Certificate under Section 12A</p>
                </div>

                <!-- 80G Registration -->
                <div class="bg-white rounded-3xl shadow-lg p-8 lg:p-10 border-t-4 border-blue-600 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-100 to-blue-50 rounded-2xl mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-[#1a237e] mb-2">80G Registration</h3>
                    <p class="text-gray-700 text-sm sm:text-base">Tax Deductible Donations under Section 80G</p>
                </div>

                <!-- CSR Registration -->
                <div class="bg-white rounded-3xl shadow-lg p-8 lg:p-10 border-t-4 border-purple-600 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-purple-100 to-purple-50 rounded-2xl mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-[#1a237e] mb-2">CSR Registration</h3>
                    <p class="text-gray-700 text-sm sm:text-base">Corporate Social Responsibility Eligible Organization</p>
                </div>

                <!-- FCRA Registration -->
                <div class="bg-white rounded-3xl shadow-lg p-8 lg:p-10 border-t-4 border-orange-600 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-br from-orange-100 to-orange-50 rounded-2xl mb-6">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg sm:text-xl font-bold text-[#1a237e] mb-2">FCRA Registration</h3>
                    <p class="text-gray-700 text-sm sm:text-base">Foreign Contribution Regulation Act Registered</p>
                </div>
            </div>
        </div>

        <!-- Contact & Address Information -->
        <div class="mb-16 lg:mb-24">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#1a237e] mb-12 text-center">Contact & Address Information</h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                <!-- Official Registration -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl shadow-lg p-8 sm:p-10 lg:p-12 border-l-4 border-blue-600">
                    <h3 class="text-2xl sm:text-3xl font-bold text-[#1a237e] mb-6 flex items-center gap-3">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Official Registration
                    </h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-gray-600 text-sm font-semibold uppercase tracking-wide">Registration Date</p>
                            <p class="text-gray-900 text-lg font-semibold">15th July 2014</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm font-semibold uppercase tracking-wide">Registered Under</p>
                            <p class="text-gray-900 text-lg font-semibold">Government of Bihar</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm font-semibold uppercase tracking-wide">Registry Office</p>
                            <p class="text-gray-900 text-lg font-semibold">Sub Registry Office, Darbhanga</p>
                        </div>
                    </div>
                </div>

                <!-- Address Information -->
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-3xl shadow-lg p-8 sm:p-10 lg:p-12 border-l-4 border-green-600">
                    <h3 class="text-2xl sm:text-3xl font-bold text-[#1a237e] mb-6 flex items-center gap-3">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Address Information
                    </h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-gray-600 text-sm font-semibold uppercase tracking-wide">Village & Post Office</p>
                            <p class="text-gray-900 text-lg font-semibold">Vill. Saidpur, PO Sormar Baghala</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm font-semibold uppercase tracking-wide">Police Station & District</p>
                            <p class="text-gray-900 text-lg font-semibold">P.S. Moro, Dist. Darbhanga</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm font-semibold uppercase tracking-wide">State & Pincode</p>
                            <p class="text-gray-900 text-lg font-semibold">Bihar, India - 847106</p>
                        </div>
                        <div>
                            <p class="text-gray-600 text-sm font-semibold uppercase tracking-wide">Founder/Trustee</p>
                            <p class="text-gray-900 text-lg font-semibold">Md. Tabrej (Sattler)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Key Statistics -->
        <div class="bg-gradient-to-r from-[#1a237e] to-[#0d47a1] rounded-3xl shadow-2xl p-8 sm:p-12 lg:p-16 text-white">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-12 text-center">Our Impact</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-3">500+</div>
                    <p class="text-lg sm:text-xl text-blue-100">Children Supported</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-3">10+</div>
                    <p class="text-lg sm:text-xl text-blue-100">Schools Partnered</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-3">12</div>
                    <p class="text-lg sm:text-xl text-blue-100">Program Areas</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl sm:text-5xl lg:text-6xl font-extrabold mb-3">10+</div>
                    <p class="text-lg sm:text-xl text-blue-100">Years of Service</p>
                </div>
            </div>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
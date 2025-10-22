<?php
session_start();
$page_title = 'Cambridge Public Education and Welfare Trust';
include 'includes/header.php';
?>

    <!-- Simple Hero Section -->
    <section class="bg-gradient-to-br from-blue-900 via-blue-800 to-purple-900 text-white py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2 text-center md:text-left">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                        Empowering Education,
                        <span class="text-yellow-400">Enabling Futures</span>
                    </h1>
                    <p class="text-xl mb-8 text-gray-200">
                        Join us in transforming lives through quality education for every child in India.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="cause_details.php" class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-8 py-4 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                            ❤️ Donate Now
                        </a>
                        <a href="about.php" class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-gray-900 transition-all duration-300">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="img/banner/banner.png" alt="Children Learning" class="rounded-2xl shadow-2xl w-full">
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto text-center">
            <h3 class="text-2xl font-bold text-[#1a237e] mb-4">Our Mission</h3>
            <p class="max-w-2xl mx-auto mb-8 text-lg">To provide quality education and welfare support to underprivileged children in Bihar, India. Registered as a charitable public trust, we are committed to building a brighter future for every child.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-yellow-50 p-6 rounded-lg shadow">
                    <h4 class="text-xl font-bold text-[#1a237e] mb-2">Trust Goals</h4>
                    <ul class="text-left list-disc list-inside text-gray-700">
                        <li>Access to quality education</li>
                        <li>Welfare programs for children</li>
                        <li>Community empowerment</li>
                    </ul>
                </div>
                <div class="bg-yellow-50 p-6 rounded-lg shadow">
                    <h4 class="text-xl font-bold text-[#1a237e] mb-2">Achievements</h4>
                    <ul class="text-left list-disc list-inside text-gray-700">
                        <li>500+ children supported</li>
                        <li>10+ schools partnered</li>
                        <li>Numerous successful projects</li>
                    </ul>
                </div>
                <div class="bg-yellow-50 p-6 rounded-lg shadow">
                    <h4 class="text-xl font-bold text-[#1a237e] mb-2">Official Registration</h4>
                    <ul class="text-left list-disc list-inside text-gray-700">
                        <li>Govt. of Bihar, Sub Registry Office, Darbhanga</li>
                        <li>Registered: 15/07/2014</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-gray-100">
        <div class="container mx-auto">
            <h3 class="text-2xl font-bold text-[#1a237e] mb-8 text-center">Our Projects</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="img/causes/1.png" alt="Education Camp" class="rounded-lg h-40 w-full object-cover mb-4">
                    <h4 class="text-lg font-bold text-[#1a237e] mb-2">Education Camp</h4>
                    <p>Free learning camps for rural children in Darbhanga.</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="img/causes/2.png" alt="School Renovation" class="rounded-lg h-40 w-full object-cover mb-4">
                    <h4 class="text-lg font-bold text-[#1a237e] mb-2">School Renovation</h4>
                    <p>Renovating local schools to create better learning environments.</p>
                </div>
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="img/causes/3.png" alt="Scholarship Program" class="rounded-lg h-40 w-full object-cover mb-4">
                    <h4 class="text-lg font-bold text-[#1a237e] mb-2">Scholarship Program</h4>
                    <p>Providing scholarships to meritorious students from low-income families.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto">
            <h3 class="text-2xl font-bold text-[#1a237e] mb-8 text-center">Testimonials</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-50 p-6 rounded-lg shadow flex flex-col">
                    <p class="text-lg italic mb-4">"Thanks to Cambridge Trust, my daughter now attends school and dreams of becoming a teacher."</p>
                    <div class="flex items-center gap-4">
                        <img src="img/post/post_1.png" alt="Beneficiary" class="h-12 w-12 rounded-full object-cover">
                        <span class="font-bold text-[#1a237e]">Asha Devi, Beneficiary</span>
                    </div>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow flex flex-col">
                    <p class="text-lg italic mb-4">"I have seen the impact of their work in my village. Truly trustworthy and dedicated."</p>
                    <div class="flex items-center gap-4">
                        <img src="img/post/post_2.png" alt="Donor" class="h-12 w-12 rounded-full object-cover">
                        <span class="font-bold text-[#1a237e]">Rahul Singh, Donor</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="donate" class="py-16 bg-yellow-50">
        <div class="container mx-auto">
            <h3 class="text-2xl font-bold text-[#1a237e] mb-8 text-center">Make a Donation</h3>
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-md mx-auto text-center">
                <p class="mb-6 text-gray-700">Your support can transform a child's future through education.</p>
                <a href="cause_details.php" class="w-full inline-block bg-yellow-400 text-[#1a237e] font-bold py-3 px-8 rounded-full hover:bg-yellow-300 transition">Support Our Cause</a>
                <p class="text-center text-sm text-gray-600 mt-4">All donations are processed securely via Razorpay. Your support makes a difference!</p>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
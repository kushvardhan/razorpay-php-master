<?php
session_start();
require __DIR__ . '/razorpay/config.php';

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambridge Public Education and Welfare Trust</title>
    <link rel="icon" type="image/png" href="cpeduw-Photoroom.png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">
    <?php include 'includes/nav.php'; ?>

    <section class="bg-[#1a237e] text-white py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center gap-8">
            <div class="md:w-1/2">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Empowering Education, Enabling Futures</h2>
                <p class="mb-6 text-lg">Join us in transforming lives through quality education for every child in India.</p>
                <a href="cause_details.php" class="bg-yellow-400 text-[#1a237e] font-bold py-3 px-8 rounded-full shadow hover:bg-yellow-300 transition">Support a Cause</a>
            </div>
            <div class="md:w-1/2">
                <img src="img/banner/banner.png" alt="Children Learning" class="rounded-lg shadow-lg w-full h-64 object-cover">
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
                        <li>Deed No.: 61, Book No.: 4</li>
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

    <footer class="bg-[#1a237e] text-white py-8 mt-16">
        <div class="container mx-auto text-center">
            <img src="cpeduw-Photoroom.png" alt="Trust Logo" class="h-8 w-8 mx-auto mb-2">
            <p>Registered: 11th July 2014 | Deed No.: 61, Book No.: 4 | Sub Registry Office, Darbhanga, Govt. of Bihar</p>
            <p>Founder/Trustee: Md. Tabrizi (Sattler)</p>
            <p>&copy; <span id="year"></span> Cambridge Public Education and Welfare Trust. All rights reserved.</p>
        </div>
        <script>document.getElementById('year').textContent = new Date().getFullYear();</script>
    </footer>
</body>
</html>
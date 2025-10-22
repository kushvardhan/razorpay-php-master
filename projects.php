<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Projects | Cambridge Public Education and Welfare Trust</title>
    <link rel="icon" type="image/png" href="cpeduw-Photoroom.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">
    <?php include 'includes/nav.php'; ?>

    <section class="bg-[#1a237e] text-white py-16">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Our Projects</h1>
            <p class="text-xl">Discover the impact we're making in education and welfare</p>
        </div>
    </section>

    <main class="container mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="img/causes/1.png" alt="Education Camp" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="mb-4">
                        <div class="bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 75%"></div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600 mt-2">
                            <span>Raised: ₹75,000</span>
                            <span>Goal: ₹1,00,000</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-[#1a237e] mb-2">Education Camp</h3>
                    <p class="text-gray-700 mb-4">Free learning camps for rural children in Darbhanga district, providing quality education and learning materials.</p>
                    <a href="cause_details.php" class="text-[#1a237e] hover:underline font-semibold">Learn More →</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="img/causes/2.png" alt="School Renovation" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="mb-4">
                        <div class="bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 60%"></div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600 mt-2">
                            <span>Raised: ₹1,20,000</span>
                            <span>Goal: ₹2,00,000</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-[#1a237e] mb-2">School Renovation</h3>
                    <p class="text-gray-700 mb-4">Renovating local schools to create better learning environments with proper infrastructure and facilities.</p>
                    <a href="cause_details.php" class="text-[#1a237e] hover:underline font-semibold">Learn More →</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="img/causes/3.png" alt="Scholarship Program" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="mb-4">
                        <div class="bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 85%"></div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600 mt-2">
                            <span>Raised: ₹85,000</span>
                            <span>Goal: ₹1,00,000</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-[#1a237e] mb-2">Scholarship Program</h3>
                    <p class="text-gray-700 mb-4">Providing scholarships to meritorious students from low-income families to continue their education.</p>
                    <a href="cause_details.php" class="text-[#1a237e] hover:underline font-semibold">Learn More →</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="img/causes/4.png" alt="Digital Learning" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="mb-4">
                        <div class="bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 40%"></div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600 mt-2">
                            <span>Raised: ₹40,000</span>
                            <span>Goal: ₹1,00,000</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-[#1a237e] mb-2">Digital Learning Initiative</h3>
                    <p class="text-gray-700 mb-4">Introducing digital learning tools and computer education to bridge the digital divide in rural areas.</p>
                    <a href="cause_details.php" class="text-[#1a237e] hover:underline font-semibold">Learn More →</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="img/causes/5.png" alt="Teacher Training" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="mb-4">
                        <div class="bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 70%"></div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600 mt-2">
                            <span>Raised: ₹70,000</span>
                            <span>Goal: ₹1,00,000</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-[#1a237e] mb-2">Teacher Training Program</h3>
                    <p class="text-gray-700 mb-4">Training local teachers with modern teaching methods and educational techniques for better learning outcomes.</p>
                    <a href="cause_details.php" class="text-[#1a237e] hover:underline font-semibold">Learn More →</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="img/causes/6.png" alt="Nutrition Program" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="mb-4">
                        <div class="bg-gray-200 rounded-full h-2">
                            <div class="bg-yellow-400 h-2 rounded-full" style="width: 55%"></div>
                        </div>
                        <div class="flex justify-between text-sm text-gray-600 mt-2">
                            <span>Raised: ₹55,000</span>
                            <span>Goal: ₹1,00,000</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-[#1a237e] mb-2">Nutrition Support</h3>
                    <p class="text-gray-700 mb-4">Providing nutritious meals to children to ensure they can focus on learning without hunger.</p>
                    <a href="cause_details.php" class="text-[#1a237e] hover:underline font-semibold">Learn More →</a>
                </div>
            </div>
        </div>

        <div class="mt-16 bg-white rounded-lg shadow-lg p-8 text-center">
            <h2 class="text-2xl font-bold text-[#1a237e] mb-4">Support Our Mission</h2>
            <p class="text-gray-700 mb-6">Your donation can help us expand these projects and reach more children in need of quality education.</p>
            <a href="cause_details.php" class="bg-yellow-400 text-[#1a237e] font-bold py-3 px-8 rounded-full hover:bg-yellow-300 transition">Donate Now</a>
        </div>
    </main>

    <footer class="bg-[#1a237e] text-white py-6 mt-16">
        <div class="container mx-auto text-center text-sm">
            <p>&copy; <?= date('Y') ?> Cambridge Public Education and Welfare Trust. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
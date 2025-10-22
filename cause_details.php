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
    <title>Give Every Child a Chance | Cambridge Public Education and Welfare Trust</title>
    <link rel="icon" type="image/png" href="cpeduw-Photoroom.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">
    <?php include 'includes/nav.php'; ?>

    <section class="bg-[#1a237e] text-white py-16">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Give Every Child a Chance to Learn and Dream</h1>
            <p class="text-xl mb-8 max-w-3xl mx-auto">Education is every child's right — it's the foundation for a secure, dignified, and fulfilling life.</p>
        </div>
    </section>

    <main class="container mx-auto py-12">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <img src="img/causes/large_img.png" alt="Children Learning" class="rounded-lg w-full h-64 object-cover">
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-[#1a237e] mb-4">The Challenge</h2>
                        <p class="text-gray-700 mb-4">For countless children in India, the simple dream of education remains out of reach. Poverty, lack of awareness, and social inequalities often force children out of classrooms and into child labour, early marriages, or other unsafe situations.</p>
                        <p class="text-gray-700">At Cambridge Public Education and Welfare Trust, we believe that no child should have to choose between survival and school.</p>
                    </div>
                </div>

                <div class="prose max-w-none text-gray-700 space-y-6">
                    <p>Through our 'Shiksha Na Ruke' initiative, we are making sure that learning never stops, even in the toughest of times. Currently, we are empowering more than 160,000 children across 27 states, helping them step confidently into a future full of hope and opportunities.</p>

                    <p>Our education centres are much more than classrooms. They are safe havens where children discover their potential, build friendships, learn important life skills, and develop into healthy and responsible citizens. We also engage with parents, teachers, and communities to create an environment where every child is encouraged to go to school and stay in school.</p>

                    <p>These children are resilient dreamers — they continue to study and grow despite hardships that no child should ever face. But they can't do it alone. Your support can make all the difference in keeping them in school and away from the dangers of child labour and exploitation.</p>

                    <p class="font-semibold text-[#1a237e]">Join us in giving every child the right to learn, to play, and to dream big. Together, let's build a nation where no child is left behind.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                <h2 class="text-2xl font-bold text-[#1a237e] mb-6">What Will Your Donation Support?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center p-4 bg-yellow-50 rounded-lg">
                        <div class="text-3xl mb-2">📚</div>
                        <h3 class="font-bold text-[#1a237e] mb-2">Education Materials</h3>
                        <p class="text-sm text-gray-600">Books, notebooks, and learning resources for underprivileged children</p>
                    </div>
                    <div class="text-center p-4 bg-yellow-50 rounded-lg">
                        <div class="text-3xl mb-2">🏫</div>
                        <h3 class="font-bold text-[#1a237e] mb-2">School Infrastructure</h3>
                        <p class="text-sm text-gray-600">Building and renovating classrooms, libraries, and safe learning spaces</p>
                    </div>
                    <div class="text-center p-4 bg-yellow-50 rounded-lg">
                        <div class="text-3xl mb-2">👨‍🏫</div>
                        <h3 class="font-bold text-[#1a237e] mb-2">Teacher Training</h3>
                        <p class="text-sm text-gray-600">Training educators to provide quality education and support</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                <h2 class="text-2xl font-bold text-[#1a237e] mb-6">Frequently Asked Questions</h2>
                <div class="space-y-4">
                    <div class="border-b pb-4">
                        <h3 class="font-semibold text-[#1a237e] mb-2">How is my donation used?</h3>
                        <p class="text-gray-700">100% of your donation goes directly to our education programs. We ensure transparency in all our operations and provide regular updates on fund utilization.</p>
                    </div>
                    <div class="border-b pb-4">
                        <h3 class="font-semibold text-[#1a237e] mb-2">Is my donation tax-deductible?</h3>
                        <p class="text-gray-700">Yes, donations to Cambridge Public Education and Welfare Trust are eligible for tax deduction under Section 80G of the Income Tax Act.</p>
                    </div>
                    <div class="border-b pb-4">
                        <h3 class="font-semibold text-[#1a237e] mb-2">Can I track my donation impact?</h3>
                        <p class="text-gray-700">Absolutely! We provide regular updates and reports on how your contributions are making a difference in children's lives.</p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-[#1a237e] mb-2">What is the minimum donation amount?</h3>
                        <p class="text-gray-700">The minimum donation amount is ₹100 to help us process donations efficiently and maximize impact.</p>
                    </div>
                </div>
            </div>

            <div class="bg-yellow-50 rounded-lg shadow-lg p-8 text-center">
                <h2 class="text-2xl font-bold text-[#1a237e] mb-4">Ready to Make a Difference?</h2>
                <p class="text-gray-700 mb-6">Your donation can transform a child's future through education. Every contribution counts!</p>
                
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="payment.php" class="bg-yellow-400 text-[#1a237e] font-bold py-3 px-8 rounded-full hover:bg-yellow-300 transition text-lg">Donate Now</a>
                <?php else: ?>
                    <div class="bg-white p-6 rounded-lg mb-4">
                        <p class="text-gray-600 mb-4">Please login or register to track your donation status and receive updates on your contribution's impact.</p>
                        <div class="flex justify-center gap-4">
                            <a href="login.php?return_to=cause_details.php" class="bg-[#1a237e] text-white px-6 py-3 rounded-full hover:bg-blue-800 transition">Login</a>
                            <a href="register.php" class="bg-yellow-400 text-[#1a237e] px-6 py-3 rounded-full hover:bg-yellow-300 transition">Register</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </main>

    <footer class="bg-[#1a237e] text-white py-6 mt-16">
        <div class="container mx-auto text-center text-sm">
            <img src="cpeduw-Photoroom.png" alt="Trust Logo" class="h-8 w-8 mx-auto mb-2">
            <p>Registered: 11th July 2014 | Deed No.: 61, Book No.: 4 | Sub Registry Office, Darbhanga, Govt. of Bihar</p>
            <p>Founder/Trustee: Md. Tabrizi (Sattler)</p>
            <p>&copy; <?= date('Y') ?> Cambridge Public Education and Welfare Trust. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
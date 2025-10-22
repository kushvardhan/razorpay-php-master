<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us | Cambridge Public Education and Welfare Trust</title>
    <link rel="icon" type="image/png" href="cpeduw-Photoroom.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">
    <?php include 'includes/nav.php'; ?>

    <section class="bg-[#1a237e] text-white py-16">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">About Us</h1>
            <p class="text-xl">Learn more about Cambridge Public Education and Welfare Trust</p>
        </div>
    </section>

    <main class="container mx-auto py-12">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                <h2 class="text-2xl font-bold text-[#1a237e] mb-6">Our Mission</h2>
                <p class="text-gray-700 mb-4">Cambridge Public Education and Welfare Trust is dedicated to providing quality education and welfare support to underprivileged children in Bihar, India. We believe that education is the foundation for a secure, dignified, and fulfilling life.</p>
                <p class="text-gray-700">Registered on 11th July 2014 under the Government of Bihar, we have been working tirelessly to ensure that no child is left behind in their educational journey.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div class="bg-white rounded-lg shadow p-6 text-center">
                    <div class="text-4xl mb-4">🎓</div>
                    <h3 class="text-xl font-bold text-[#1a237e] mb-2">Education</h3>
                    <p class="text-gray-600">Providing quality education to underprivileged children</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 text-center">
                    <div class="text-4xl mb-4">❤️</div>
                    <h3 class="text-xl font-bold text-[#1a237e] mb-2">Welfare</h3>
                    <p class="text-gray-600">Supporting children's overall well-being and development</p>
                </div>
                <div class="bg-white rounded-lg shadow p-6 text-center">
                    <div class="text-4xl mb-4">🤝</div>
                    <h3 class="text-xl font-bold text-[#1a237e] mb-2">Community</h3>
                    <p class="text-gray-600">Building stronger communities through education</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-bold text-[#1a237e] mb-6">Registration Details</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="font-semibold text-[#1a237e] mb-2">Official Registration</h3>
                        <p class="text-gray-700">Registered: 11th July 2014</p>
                        <p class="text-gray-700">Deed No.: 61, Book No.: 4</p>
                        <p class="text-gray-700">Sub Registry Office, Darbhanga</p>
                        <p class="text-gray-700">Government of Bihar</p>
                    </div>
                    <div>
                        <h3 class="font-semibold text-[#1a237e] mb-2">Contact Information</h3>
                        <p class="text-gray-700">Vill. Jatpur, P.O.-Somra Baghla</p>
                        <p class="text-gray-700">P.S.-Moro, Dist.-Darbhanga</p>
                        <p class="text-gray-700">Bihar, India</p>
                        <p class="text-gray-700">Founder/Trustee: Md. Tabrizi (Sattler)</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#1a237e] text-white py-6 mt-16">
        <div class="container mx-auto text-center text-sm">
            <p>&copy; <?= date('Y') ?> Cambridge Public Education and Welfare Trust. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
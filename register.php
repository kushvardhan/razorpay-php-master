<?php
// Set session cookie lifetime to 1 day
session_set_cookie_params(86400);
session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: index.html');
    exit;
}
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require __DIR__ . '/razorpay/config.php';
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    if (!$name || !$email || !$password) {
        $error = 'All fields are required.';
    } else {
        $stmt = $pdo->prepare('SELECT id FROM users WHERE email = ?');
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            $error = 'Email already registered.';
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare('INSERT INTO users (name, email, password_hash, created_at) VALUES (?, ?, ?, NOW())');
            $stmt->execute([$name, $email, $hash]);
            $_SESSION['user_id'] = $pdo->lastInsertId();
            header('Location: index.html');
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | Cambridge Public Education and Welfare Trust</title>
    <link rel="icon" type="image/png" href="cpeduw-Photoroom.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900">
    <!-- Header -->
    <header class="bg-[#1a237e] text-white py-4">
        <div class="container mx-auto flex items-center gap-4">
            <img src="cpeduw-Photoroom.png" alt="Trust Logo" class="h-10 w-10 rounded-lg">
            <div>
                <h1 class="text-lg font-bold">CAMBRIDGE PUBLIC EDUCATION AND WELFARE TRUST</h1>
                <p class="text-yellow-400 text-xs">Vill. Jatpur, P.O.-Somra Baghla, P.S.-Moro, Dist.-Darbhanga, Bihar, India</p>
            </div>
        </div>
    </header>
    <!-- Register Form -->
    <main class="container mx-auto py-12">
        <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-[#1a237e] mb-4 text-center">Register</h2>
            <?php if ($error): ?>
                <div class="text-red-500 text-sm mb-4 text-center"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            <form method="post" class="space-y-4">
                <label class="block text-sm font-medium text-[#1a237e]">Name</label>
                <input type="text" name="name" required class="w-full p-3 border border-yellow-400 rounded mb-2" placeholder="Enter your name">
                <label class="block text-sm font-medium text-[#1a237e]">Email</label>
                <input type="email" name="email" required class="w-full p-3 border border-yellow-400 rounded mb-2" placeholder="Enter your email">
                <label class="block text-sm font-medium text-[#1a237e]">Password</label>
                <input type="password" name="password" required class="w-full p-3 border border-yellow-400 rounded mb-2" placeholder="Enter your password">
                <button type="submit" class="w-full bg-yellow-400 text-[#1a237e] font-bold py-3 rounded-full hover:bg-yellow-300 transition">Register</button>
            </form>
            <p class="text-center text-sm text-gray-600 mt-4">Already have an account? <a href="login.php" class="text-[#1a237e] font-semibold hover:underline">Login</a></p>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-[#1a237e] text-white py-6 mt-16">
        <div class="container mx-auto text-center text-sm">
            <img src="cpeduw-Photoroom.png" alt="Trust Logo" class="h-8 w-8 mx-auto mb-2">
            <p>Registered: 11th July 2014 | Deed No.: 61, Book No.: 4 | Sub Registry Office, Darbhanga, Govt. of Bihar</p>
            <p>Founder/Trustee: Md. Tabrizi (Sattler)</p>
            <p>&copy; <span id="year"></span> Cambridge Public Education and Welfare Trust. All rights reserved.</p>
        </div>
        <script>document.getElementById('year').textContent = new Date().getFullYear();</script>
    </footer>
</body>
</html>

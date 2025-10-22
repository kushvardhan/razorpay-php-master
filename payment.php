<?php
session_start();
require __DIR__ . '/razorpay/config.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: /charifit/login.php?return_to=/charifit/payment.php');
    exit;
}

$pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->prepare('SELECT name, email FROM users WHERE id = ?');
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Donate | Cambridge Public Education and Welfare Trust</title>
    <link rel="icon" type="image/png" href="cpeduw-Photoroom.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
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
    <!-- Payment Section -->
    <main class="container mx-auto py-12">
        <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-[#1a237e] mb-4 text-center">Make a Donation</h2>
            <p class="text-center text-sm text-gray-600 mb-6">Hello <?= htmlspecialchars($user['name']) ?>! Choose your donation amount below.</p>
            
            <div class="mb-6">
                <label class="block text-sm font-medium text-[#1a237e] mb-3">Quick Amount Selection</label>
                <div class="grid grid-cols-2 gap-3 mb-4">
                    <button type="button" onclick="setAmount(100)" class="preset-btn bg-yellow-100 text-[#1a237e] font-bold py-3 rounded-lg hover:bg-yellow-200 transition border-2 border-transparent">₹100</button>
                    <button type="button" onclick="setAmount(500)" class="preset-btn bg-yellow-100 text-[#1a237e] font-bold py-3 rounded-lg hover:bg-yellow-200 transition border-2 border-transparent">₹500</button>
                    <button type="button" onclick="setAmount(1000)" class="preset-btn bg-yellow-100 text-[#1a237e] font-bold py-3 rounded-lg hover:bg-yellow-200 transition border-2 border-transparent">₹1000</button>
                    <button type="button" onclick="setAmount(1500)" class="preset-btn bg-yellow-100 text-[#1a237e] font-bold py-3 rounded-lg hover:bg-yellow-200 transition border-2 border-transparent">₹1500</button>
                </div>
            </div>

            <form id="donate-form" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-[#1a237e]">Custom Amount (₹)</label>
                    <input type="number" id="donation-amount" name="amount" min="100" required class="w-full p-3 border border-yellow-400 rounded" placeholder="Enter amount (minimum ₹100)">
                    <p class="text-xs text-gray-500 mt-1">Minimum donation amount is ₹100</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-[#1a237e]">Message (optional)</label>
                    <textarea id="donation-message" name="message" class="w-full p-3 border border-yellow-400 rounded" placeholder="Your message or dedication"></textarea>
                </div>
                <button type="submit" id="pay-btn" class="w-full bg-yellow-400 text-[#1a237e] font-bold py-3 rounded-full hover:bg-yellow-300 transition">Donate Now</button>
                <div id="error-msg" class="text-red-500 text-sm mt-4 hidden"></div>
            </form>
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
    <script>
    const razorKey = "<?php echo htmlspecialchars(RAZOR_KEY_ID); ?>";
    const userName = "<?php echo htmlspecialchars($user['name']); ?>";
    const userEmail = "<?php echo htmlspecialchars($user['email']); ?>";
    
    function setAmount(amount) {
        document.getElementById('donation-amount').value = amount;
        document.querySelectorAll('.preset-btn').forEach(btn => {
            btn.classList.remove('border-[#1a237e]', 'bg-yellow-200');
            btn.classList.add('border-transparent', 'bg-yellow-100');
        });
        event.target.classList.remove('border-transparent', 'bg-yellow-100');
        event.target.classList.add('border-[#1a237e]', 'bg-yellow-200');
    }
    
    document.getElementById('donate-form').addEventListener('submit', async function(e) {
        e.preventDefault();
        const amount = parseInt(document.getElementById('donation-amount').value);
        const message = document.getElementById('donation-message').value.trim();
        const errorMsg = document.getElementById('error-msg');
        errorMsg.classList.add('hidden');
        
        if (!amount || isNaN(amount) || amount < 100) {
            errorMsg.textContent = 'We appreciate your generosity, but the minimum donation amount is ₹100 to help us process donations efficiently.';
            errorMsg.classList.remove('hidden');
            return;
        }
        
        try {
            const res = await fetch('/charifit/create_order.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                body: 'amount=' + encodeURIComponent(amount) + '&message=' + encodeURIComponent(message)
            });
            if (!res.ok) throw new Error('Order creation failed');
            const data = await res.json();
            if (!data.order_id) {
                errorMsg.textContent = 'Order creation failed: ' + (data.error || 'Unknown error');
                errorMsg.classList.remove('hidden');
                return;
            }
            const options = {
                key: razorKey,
                amount: data.amount,
                currency: 'INR',
                order_id: data.order_id,
                name: 'Cambridge Public Education and Welfare Trust',
                description: message || 'Donation to Cambridge Trust',
                prefill: {
                    name: userName,
                    email: userEmail
                },
                handler: function (response){
                    fetch('/charifit/verify.php', {
                        method: 'POST',
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                        body: 'razorpay_payment_id=' + encodeURIComponent(response.razorpay_payment_id) +
                              '&razorpay_order_id=' + encodeURIComponent(response.razorpay_order_id) +
                              '&razorpay_signature=' + encodeURIComponent(response.razorpay_signature)
                    }).then(r => {
                        if (r.redirected) {
                            window.location = r.url;
                        } else {
                            r.text().then(t => alert(t));
                        }
                    });
                },
                theme: { color: "#1a237e" }
            };
            const rzp = new Razorpay(options);
            rzp.open();
        } catch (err) {
            errorMsg.textContent = 'Error: ' + err.message;
            errorMsg.classList.remove('hidden');
        }
    });
    </script>
</body>
</html>

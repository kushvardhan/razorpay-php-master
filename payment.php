<?php
session_start();
require __DIR__ . '/razorpay/config.php';
if (!isset($_SESSION['user_id'])) {
    header('Location: /login.php?return_to=/payment.php');
    exit;
}
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
            <p class="text-center text-sm text-gray-600 mb-6">All donations are processed securely via Razorpay. Your support makes a difference!</p>
            <form id="donate-form" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-[#1a237e]">Name</label>
                        <input type="text" id="donor-name" name="name" required class="w-full p-3 border border-yellow-400 rounded" placeholder="Your Name">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-[#1a237e]">Email</label>
                        <input type="email" id="donor-email" name="email" required class="w-full p-3 border border-yellow-400 rounded" placeholder="Your Email">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-[#1a237e]">Country</label>
                    <input type="text" id="donor-country" name="country" required class="w-full p-3 border border-yellow-400 rounded" placeholder="Your Country">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-[#1a237e]">Amount</label>
                        <input type="number" id="donation-amount" name="amount" min="1" required class="w-full p-3 border border-yellow-400 rounded" placeholder="Amount">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-[#1a237e]">Currency</label>
                        <select id="donation-currency" name="currency" class="w-full p-3 border border-yellow-400 rounded">
                            <option value="INR" selected>INR</option>
                            <option value="USD">USD</option>
                            <option value="EUR">EUR</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-[#1a237e]">Message (optional)</label>
                    <textarea id="donation-message" name="message" class="w-full p-3 border border-yellow-400 rounded" placeholder="Your message"></textarea>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="recurring" name="recurring" class="mr-2">
                    <label for="recurring" class="text-sm text-[#1a237e]">Make this a recurring donation</label>
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
    document.getElementById('donate-form').addEventListener('submit', async function(e) {
        e.preventDefault();
        const name = document.getElementById('donor-name').value.trim();
        const email = document.getElementById('donor-email').value.trim();
        const country = document.getElementById('donor-country').value.trim();
        const amount = document.getElementById('donation-amount').value;
        const currency = document.getElementById('donation-currency').value;
        const message = document.getElementById('donation-message').value.trim();
        const recurring = document.getElementById('recurring').checked ? 1 : 0;
        const errorMsg = document.getElementById('error-msg');
        errorMsg.classList.add('hidden');
        if (!name || !email || !country || !amount || isNaN(amount) || amount <= 0) {
            errorMsg.textContent = 'Please fill all required fields and enter a valid amount.';
            errorMsg.classList.remove('hidden');
            return;
        }
        try {
            const res = await fetch('/create_order.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                body: 'amount=' + encodeURIComponent(amount) +
                      '&currency=' + encodeURIComponent(currency) +
                      '&name=' + encodeURIComponent(name) +
                      '&email=' + encodeURIComponent(email) +
                      '&country=' + encodeURIComponent(country) +
                      '&message=' + encodeURIComponent(message) +
                      '&recurring=' + encodeURIComponent(recurring)
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
                currency: currency,
                order_id: data.order_id,
                name: name,
                description: message,
                prefill: {
                    name: name,
                    email: email
                },
                handler: function (response){
                    fetch('/verify.php', {
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

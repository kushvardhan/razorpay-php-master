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
    <title>Razorpay Payment</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    <h2>Pay with Razorpay</h2>
    <form id="pay-form">
        <label>Amount (INR): <input type="number" id="amount" name="amount" value="100" min="1" required></label>
        <button type="submit" id="pay-btn">Pay</button>
    </form>
    <script>
    const razorKey = "<?php echo htmlspecialchars(RAZOR_KEY_ID); ?>";
    document.getElementById('pay-form').addEventListener('submit', async function(e) {
        e.preventDefault();
        const amount = document.getElementById('amount').value;
        try {
            const res = await fetch('/create_order.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                body: 'amount=' + encodeURIComponent(amount)
            });
            if (!res.ok) throw new Error('Order creation failed');
            const data = await res.json();
            if (!data.order_id) {
                alert('Order creation failed: ' + (data.error || 'Unknown error'));
                return;
            }
            const options = {
                key: razorKey,
                amount: data.amount,
                currency: "INR",
                order_id: data.order_id,
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
                theme: { color: "#3399cc" }
            };
            const rzp = new Razorpay(options);
            rzp.open();
        } catch (err) {
            alert('Error: ' + err.message);
        }
    });
    </script>
</body>
</html>

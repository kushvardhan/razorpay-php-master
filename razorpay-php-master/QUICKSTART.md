# Quick Start Guide - Razorpay Payment Gateway

## 🚀 Get Started in 5 Minutes

### Prerequisites
- PHP 7.3 or higher
- Composer installed
- SQLite3 extension enabled

### Step 1: Install Dependencies (1 minute)
```bash
cd razorpay-php-master
composer install
```

### Step 2: Create Data Directory (30 seconds)
```bash
mkdir data
chmod 755 data
```

### Step 3: Start PHP Server (30 seconds)
```bash
php -S localhost:8000 -t public/
```

### Step 4: Open in Browser (30 seconds)
```
http://localhost:8000
```

### Step 5: Test the System (2 minutes)

#### Register a New Account
1. Click "Register"
2. Fill in your details:
   - Name: Your Name
   - Email: your@email.com
   - Phone: 9876543210 (optional)
   - Password: password123
3. Click "Register"

#### Make a Test Payment
1. Enter amount: 100
2. Click "Pay Now"
3. Use test card: **4111111111111111**
4. Expiry: Any future date (e.g., 12/25)
5. CVV: Any 3 digits (e.g., 123)
6. Complete payment

#### View Payment History
- Check the right panel for payment history
- Status should show "completed"

---

## 📋 What's Included

✅ **User Authentication**
- Registration with email validation
- Secure login with password hashing
- Session management

✅ **Payment Gateway**
- Razorpay integration
- Test mode ready
- Payment verification

✅ **Database**
- SQLite local database
- User storage
- Payment history

✅ **Web Interface**
- Responsive design
- Login/Register page
- Payment dashboard
- Payment history

---

## 🔑 Test Credentials

### Razorpay Test Account
```
Key ID: rzp_test_1DP5ibUubEsz3e
Key Secret: SkL1Vi8FVrWWWW5sIiE1i66j
```

### Test Cards
| Type | Card Number | Expiry | CVV |
|------|-------------|--------|-----|
| Success | 4111111111111111 | Any future | Any 3 |
| Failure | 4000000000000002 | Any future | Any 3 |

---

## 📁 Project Structure

```
razorpay-php-master/
├── app/                    # Application logic
├── api/                    # API endpoints
├── config/                 # Configuration files
├── public/                 # Web interface
├── data/                   # SQLite database
└── docs/                   # Documentation
```

---

## 🧪 Verify Installation

### Option 1: Web Test
Open: `http://localhost:8000/test.php`

All tests should show ✓ (green checkmarks)

### Option 2: CLI Test
```bash
php verify.php
```

Should show: "✓ All checks passed!"

---

## 🔗 API Endpoints

### Authentication
```
POST   /api/auth.php?action=register
POST   /api/auth.php?action=login
GET    /api/auth.php?action=logout
GET    /api/auth.php?action=check
```

### Payments
```
POST   /api/payment.php?action=create_order
POST   /api/payment.php?action=verify_payment
GET    /api/payment.php?action=get_user_payments
GET    /api/payment.php?action=get_payment
```

---

## 📚 Documentation

- **SETUP_GUIDE.md** - Detailed setup instructions
- **TESTING_GUIDE.md** - Complete testing procedures
- **IMPLEMENTATION_SUMMARY.md** - Technical details
- **QUICKSTART.md** - This file

---

## ⚠️ Common Issues

### "PHP not found"
- Install PHP or add to PATH
- Use full path: `C:\php\php.exe -S localhost:8000 -t public/`

### "Database connection failed"
- Ensure `data` directory exists
- Check SQLite3 extension is enabled
- Verify directory permissions

### "Razorpay SDK not found"
- Run `composer install`
- Check Razorpay.php exists

### "Payment verification failed"
- Verify API credentials
- Check internet connection
- Ensure test mode is enabled

---

## 🔒 Security Notes

1. **Test Mode Only**
   - Current setup uses Razorpay test credentials
   - No real payments are processed

2. **Before Production**
   - Replace test credentials with production keys
   - Enable HTTPS
   - Implement additional security measures
   - Review SETUP_GUIDE.md security section

3. **Database**
   - Keep `data/` directory outside web root
   - Set proper file permissions
   - Regular backups

---

## 🎯 Next Steps

1. ✅ Complete quick start above
2. ✅ Test all features
3. ✅ Review TESTING_GUIDE.md
4. ✅ Check SETUP_GUIDE.md for details
5. ✅ Plan production deployment

---

## 💡 Tips

- Use browser DevTools (F12) to inspect network requests
- Check database with SQLite browser: `sqlite3 data/payments.db`
- View logs in browser console
- Test with different amounts
- Try both success and failure cards

---

## 📞 Need Help?

1. Check error messages in browser console
2. Review SETUP_GUIDE.md
3. Run system test: `http://localhost:8000/test.php`
4. Check database: `sqlite3 data/payments.db`
5. Review Razorpay docs: https://docs.razorpay.com

---

## ✨ Features Checklist

- [x] User Registration
- [x] User Login
- [x] Password Hashing
- [x] Session Management
- [x] Payment Creation
- [x] Payment Verification
- [x] Payment History
- [x] Database Storage
- [x] Error Handling
- [x] Responsive UI
- [x] Test Mode
- [x] Documentation

---

## 🎉 You're All Set!

Your Razorpay payment gateway is ready to use!

**Start here:** `http://localhost:8000`

Enjoy! 🚀


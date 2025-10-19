# Razorpay Payment Gateway Setup Guide

## Overview
This is a complete Razorpay payment gateway integration with user authentication and local database storage using SQLite.

## Features
✓ User Registration & Login (with password hashing)
✓ Razorpay Payment Integration (Test Mode)
✓ Payment Verification & Signature Validation
✓ Local SQLite Database for User & Payment Storage
✓ Responsive Web Interface
✓ Payment History Tracking

## Project Structure

```
razorpay-php-master/
├── app/
│   ├── Auth.php                 # Authentication class
│   └── PaymentHandler.php       # Payment processing class
├── api/
│   ├── auth.php                 # Authentication API endpoints
│   └── payment.php              # Payment API endpoints
├── config/
│   ├── database.php             # Database configuration
│   └── razorpay.php             # Razorpay API credentials
├── public/
│   ├── index.php                # Entry point
│   ├── auth.html                # Login/Register page
│   └── payment.html             # Payment page
├── data/                        # SQLite database (auto-created)
├── setup.php                    # Setup script
└── Razorpay.php                 # Razorpay SDK loader
```

## Prerequisites

- PHP 7.3 or higher
- SQLite3 extension (usually included with PHP)
- PDO extension (usually included with PHP)
- Composer (for dependency management)

## Installation & Setup

### Step 1: Install Dependencies
```bash
cd razorpay-php-master
composer install
```

### Step 2: Create Data Directory
```bash
mkdir data
chmod 755 data
```

### Step 3: Run Setup Script
```bash
php setup.php
```

This will:
- Create the data directory
- Initialize SQLite database with tables
- Verify all required files
- Display configuration status

### Step 4: Start PHP Server
```bash
php -S localhost:8000 -t public/
```

### Step 5: Access the Application
Open your browser and navigate to:
```
http://localhost:8000
```

## Usage

### 1. Register a New User
- Click "Register" on the login page
- Enter your name, email, phone (optional), and password
- Click "Register" button
- You'll be automatically logged in and redirected to payment page

### 2. Login
- Enter your email and password
- Click "Login" button
- You'll be redirected to the payment page

### 3. Make a Payment
- Enter the amount (in INR)
- Add optional description
- Click "Pay Now" button
- Razorpay checkout will open
- Complete the payment using test card details

### 4. Test Payment Details
Use these test card details in Razorpay checkout:

**Success Card:**
- Card Number: 4111111111111111
- Expiry: Any future date (e.g., 12/25)
- CVV: Any 3 digits (e.g., 123)

**Failed Card:**
- Card Number: 4000000000000002
- Expiry: Any future date
- CVV: Any 3 digits

### 5. View Payment History
- All your payments are displayed on the right side
- Shows amount, order ID, status, and date
- Status can be: pending, completed, or failed

## Razorpay Test Credentials

The following test credentials are configured:

```
Key ID: rzp_test_1DP5ibUubEsz3e
Key Secret: SkL1Vi8FVrWWWW5sIiE1i66j
Currency: INR
```

**Note:** These are test credentials. For production, replace with your actual Razorpay credentials from the dashboard.

## Database Schema

### Users Table
```sql
CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT UNIQUE NOT NULL,
    password TEXT NOT NULL,
    phone TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)
```

### Payments Table
```sql
CREATE TABLE payments (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    user_id INTEGER NOT NULL,
    razorpay_order_id TEXT UNIQUE,
    razorpay_payment_id TEXT,
    razorpay_signature TEXT,
    amount INTEGER NOT NULL,
    currency TEXT DEFAULT 'INR',
    status TEXT DEFAULT 'pending',
    description TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
)
```

## API Endpoints

### Authentication Endpoints

**Register User**
```
POST /api/auth.php?action=register
Content-Type: application/json

{
    "name": "John Doe",
    "email": "john@example.com",
    "password": "password123",
    "phone": "9876543210"
}
```

**Login User**
```
POST /api/auth.php?action=login
Content-Type: application/json

{
    "email": "john@example.com",
    "password": "password123"
}
```

**Check Auth Status**
```
GET /api/auth.php?action=check
```

**Logout**
```
GET /api/auth.php?action=logout
```

### Payment Endpoints

**Create Order**
```
POST /api/payment.php?action=create_order
Content-Type: application/json

{
    "amount": 100,
    "description": "Payment for services"
}
```

**Verify Payment**
```
POST /api/payment.php?action=verify_payment
Content-Type: application/json

{
    "order_id": "order_xxxxx",
    "payment_id": "pay_xxxxx",
    "signature": "signature_xxxxx"
}
```

**Get User Payments**
```
GET /api/payment.php?action=get_user_payments
```

**Get Payment Details**
```
GET /api/payment.php?action=get_payment&order_id=order_xxxxx
```

## Security Features

1. **Password Hashing**: Passwords are hashed using bcrypt (PASSWORD_BCRYPT)
2. **Session Management**: User sessions are managed securely
3. **Signature Verification**: All payments are verified using Razorpay signature
4. **Input Validation**: All inputs are validated before processing
5. **Error Handling**: Comprehensive error handling and logging

## Troubleshooting

### Database Connection Error
- Ensure the `data` directory exists and is writable
- Check PHP has SQLite3 extension enabled
- Verify PDO is installed

### Razorpay API Error
- Verify API credentials in `config/razorpay.php`
- Check internet connection
- Ensure you're using test credentials for development

### Payment Verification Failed
- Verify the signature is correct
- Check order ID and payment ID match
- Ensure API secret is correct

### Session Issues
- Clear browser cookies
- Ensure PHP session directory is writable
- Check session.save_path in php.ini

## Production Deployment

Before deploying to production:

1. **Update Razorpay Credentials**
   - Replace test credentials with production credentials
   - Update `config/razorpay.php`

2. **Enable HTTPS**
   - All payment pages must use HTTPS
   - Update callback URLs to use HTTPS

3. **Database Security**
   - Move database file outside web root
   - Set proper file permissions (600)
   - Regular backups

4. **Environment Variables**
   - Use environment variables for sensitive data
   - Never commit credentials to version control

5. **Error Logging**
   - Enable error logging
   - Monitor for suspicious activities

## Support & Documentation

- Razorpay Documentation: https://docs.razorpay.com
- Razorpay PHP SDK: https://github.com/razorpay/razorpay-php
- PHP Documentation: https://www.php.net/docs.php

## License

MIT License - See LICENSE file for details

## Notes

- This is a development setup. For production, implement additional security measures.
- Test thoroughly before going live.
- Keep Razorpay SDK and dependencies updated.
- Monitor payment transactions regularly.


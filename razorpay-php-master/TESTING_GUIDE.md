# Testing Guide - Razorpay Payment Gateway

## Pre-Testing Checklist

Before running tests, ensure:
- [ ] PHP 7.3+ is installed
- [ ] SQLite3 extension is enabled
- [ ] PDO extension is enabled
- [ ] Composer dependencies are installed (`composer install`)
- [ ] Data directory exists (`mkdir data`)
- [ ] All files are in place

## Step 1: System Verification

### Option A: Web-Based Test
1. Start PHP server: `php -S localhost:8000 -t public/`
2. Open browser: `http://localhost:8000/test.php`
3. Verify all tests show green checkmarks
4. If any test fails, fix the issue before proceeding

### Option B: CLI Verification
1. Run: `php verify.php`
2. Check output for any errors
3. Fix any issues reported

## Step 2: User Registration Test

### Test Case 1: Valid Registration
**Steps:**
1. Open `http://localhost:8000`
2. Click "Register"
3. Fill in form:
   - Name: "John Doe"
   - Email: "john@example.com"
   - Phone: "9876543210"
   - Password: "password123"
4. Click "Register"

**Expected Result:**
- ✓ Success message appears
- ✓ Redirected to payment page
- ✓ User name displayed in header
- ✓ User data stored in database

**Database Verification:**
```sql
SELECT * FROM users WHERE email = 'john@example.com';
```

### Test Case 2: Invalid Email
**Steps:**
1. Try to register with email: "invalid-email"
2. Click "Register"

**Expected Result:**
- ✗ Error message: "Invalid email format"
- ✗ Registration fails
- ✗ User not created

### Test Case 3: Duplicate Email
**Steps:**
1. Register with "john@example.com"
2. Try to register again with same email

**Expected Result:**
- ✗ Error message: "Email already registered"
- ✗ Registration fails

### Test Case 4: Short Password
**Steps:**
1. Try to register with password: "123"
2. Click "Register"

**Expected Result:**
- ✗ Error message: "Password must be at least 6 characters"
- ✗ Registration fails

## Step 3: User Login Test

### Test Case 1: Valid Login
**Steps:**
1. Click "Login"
2. Enter email: "john@example.com"
3. Enter password: "password123"
4. Click "Login"

**Expected Result:**
- ✓ Success message appears
- ✓ Redirected to payment page
- ✓ User name displayed
- ✓ Session created

### Test Case 2: Invalid Email
**Steps:**
1. Enter email: "wrong@example.com"
2. Enter password: "password123"
3. Click "Login"

**Expected Result:**
- ✗ Error message: "Invalid email or password"
- ✗ Login fails

### Test Case 3: Wrong Password
**Steps:**
1. Enter email: "john@example.com"
2. Enter password: "wrongpassword"
3. Click "Login"

**Expected Result:**
- ✗ Error message: "Invalid email or password"
- ✗ Login fails

## Step 4: Payment Creation Test

### Test Case 1: Valid Payment Order
**Steps:**
1. Login with valid credentials
2. Enter amount: "100"
3. Enter description: "Test payment"
4. Click "Pay Now"

**Expected Result:**
- ✓ Razorpay checkout opens
- ✓ Order ID displayed
- ✓ Amount shows as ₹100
- ✓ Order created in database

**Database Verification:**
```sql
SELECT * FROM payments WHERE user_id = 1 ORDER BY created_at DESC LIMIT 1;
```

### Test Case 2: Invalid Amount (Zero)
**Steps:**
1. Enter amount: "0"
2. Click "Pay Now"

**Expected Result:**
- ✗ Error message: "Invalid amount"
- ✗ Checkout doesn't open

### Test Case 3: Invalid Amount (Negative)
**Steps:**
1. Enter amount: "-100"
2. Click "Pay Now"

**Expected Result:**
- ✗ Error message: "Invalid amount"
- ✗ Checkout doesn't open

### Test Case 4: Large Amount
**Steps:**
1. Enter amount: "999999"
2. Click "Pay Now"

**Expected Result:**
- ✓ Razorpay checkout opens
- ✓ Amount shows correctly
- ✓ Order created

## Step 5: Payment Verification Test

### Test Case 1: Successful Payment
**Steps:**
1. Click "Pay Now"
2. Razorpay checkout opens
3. Use test card: 4111111111111111
4. Enter any future expiry date
5. Enter any 3-digit CVV
6. Complete payment

**Expected Result:**
- ✓ Payment successful message
- ✓ Payment status: "completed"
- ✓ Payment ID stored
- ✓ Signature verified
- ✓ Payment appears in history

**Database Verification:**
```sql
SELECT * FROM payments WHERE status = 'completed' ORDER BY created_at DESC LIMIT 1;
```

### Test Case 2: Failed Payment
**Steps:**
1. Click "Pay Now"
2. Use test card: 4000000000000002
3. Complete payment flow

**Expected Result:**
- ✗ Payment failed message
- ✗ Payment status: "failed"
- ✗ Error details displayed

### Test Case 3: Payment Cancellation
**Steps:**
1. Click "Pay Now"
2. Close Razorpay checkout without completing

**Expected Result:**
- ✗ Payment cancelled
- ✗ Order remains in "pending" status

## Step 6: Payment History Test

### Test Case 1: View Payment History
**Steps:**
1. Complete multiple payments
2. Check payment history panel

**Expected Result:**
- ✓ All payments displayed
- ✓ Correct amounts shown
- ✓ Correct statuses shown
- ✓ Correct dates shown
- ✓ Payments sorted by date (newest first)

### Test Case 2: Payment Details
**Steps:**
1. View payment history
2. Check each payment entry

**Expected Result:**
- ✓ Amount displayed correctly
- ✓ Order ID visible
- ✓ Status badge shows correct color
- ✓ Date/time formatted correctly

## Step 7: Session Management Test

### Test Case 1: Logout
**Steps:**
1. Login successfully
2. Click "Logout" button

**Expected Result:**
- ✓ Session destroyed
- ✓ Redirected to login page
- ✓ Cannot access payment page without login

### Test Case 2: Session Persistence
**Steps:**
1. Login successfully
2. Refresh page
3. Check if still logged in

**Expected Result:**
- ✓ Session persists
- ✓ User still logged in
- ✓ User data still available

### Test Case 3: Direct Access Without Login
**Steps:**
1. Logout
2. Try to access: `http://localhost:8000/payment.html`

**Expected Result:**
- ✗ Redirected to login page
- ✗ Cannot access payment page

## Step 8: Database Integrity Test

### Test Case 1: User Data Storage
**Steps:**
1. Register multiple users
2. Check database

**Expected Result:**
- ✓ All users stored correctly
- ✓ Passwords are hashed (not plain text)
- ✓ Email is unique
- ✓ Timestamps recorded

### Test Case 2: Payment Data Storage
**Steps:**
1. Create multiple payments
2. Check database

**Expected Result:**
- ✓ All payments stored
- ✓ User ID linked correctly
- ✓ Order ID unique
- ✓ Status updated correctly
- ✓ Timestamps recorded

### Test Case 3: Foreign Key Relationship
**Steps:**
1. Check payments table
2. Verify user_id references users table

**Expected Result:**
- ✓ All payment user_ids exist in users table
- ✓ No orphaned payments
- ✓ Relationship maintained

## Step 9: Error Handling Test

### Test Case 1: Network Error
**Steps:**
1. Disconnect internet
2. Try to create payment

**Expected Result:**
- ✗ Error message displayed
- ✗ Graceful error handling
- ✗ No crash

### Test Case 2: Invalid API Credentials
**Steps:**
1. Modify Razorpay credentials in config
2. Try to create payment

**Expected Result:**
- ✗ Error message displayed
- ✗ Proper error handling

### Test Case 3: Database Error
**Steps:**
1. Delete database file
2. Try to login

**Expected Result:**
- ✓ Database recreated
- ✓ System recovers gracefully

## Step 10: Security Test

### Test Case 1: SQL Injection
**Steps:**
1. Try to login with email: `' OR '1'='1`
2. Try to register with name: `<script>alert('xss')</script>`

**Expected Result:**
- ✗ Injection attempts fail
- ✗ Input properly sanitized
- ✗ No security breach

### Test Case 2: Password Security
**Steps:**
1. Check database for stored passwords
2. Verify passwords are hashed

**Expected Result:**
- ✓ Passwords are bcrypt hashed
- ✓ Not stored in plain text
- ✓ Cannot be reversed

### Test Case 3: Session Hijacking
**Steps:**
1. Login successfully
2. Check session cookie
3. Try to use session from another browser

**Expected Result:**
- ✓ Session is secure
- ✓ Cannot hijack session easily
- ✓ Session tied to user

## Test Results Summary

Create a test results document:

```
Test Date: [DATE]
Tester: [NAME]
Environment: PHP [VERSION], SQLite [VERSION]

PASSED TESTS:
- [ ] System Verification
- [ ] User Registration
- [ ] User Login
- [ ] Payment Creation
- [ ] Payment Verification
- [ ] Payment History
- [ ] Session Management
- [ ] Database Integrity
- [ ] Error Handling
- [ ] Security

FAILED TESTS:
[List any failures]

ISSUES FOUND:
[List any issues]

RECOMMENDATIONS:
[List recommendations]

SIGN-OFF:
Tester: _________________ Date: _________
```

## Automated Testing

For automated testing, create unit tests:

```bash
# Run PHPUnit tests
vendor/bin/phpunit tests/
```

## Performance Testing

### Load Testing
1. Create 100+ users
2. Create 1000+ payments
3. Check response times
4. Monitor database performance

### Expected Results
- Page load time < 2 seconds
- API response time < 500ms
- Database queries < 100ms

## Conclusion

After completing all tests:
1. Document all results
2. Fix any issues found
3. Re-test failed cases
4. Get sign-off from stakeholders
5. Deploy to production

## Support

If tests fail:
1. Check error messages
2. Review logs
3. Check database
4. Verify configuration
5. Review SETUP_GUIDE.md


# Razorpay PHP Integration

## Setup Steps

1. **Install dependencies:**
   ```
   composer install
   ```
2. **Configure Razorpay keys:**
   - Copy `razorpay/config.php.example` to `razorpay/config.php`.
   - Add your Razorpay Key ID and Key Secret to `config.php` (do NOT commit secrets).
3. **Setup Database:**
   - Create a MySQL database and user.
   - Import schema:
     ```
     mysql -u your_user -p your_db < db/schema.sql
     ```
   - Update DB credentials in PHP files (`create_order.php`, `verify.php`).
4. **Run the app:**
   - Ensure your web server points to the project root.
   - Use Razorpay test keys for development.
5. **Test payment flow:**
   - Login as a user (ensure users table has test user).
   - Go to `payment.php`, enter amount, click Pay.
   - Complete payment in Razorpay Checkout.
   - On success, you are redirected to `success.html`; on failure, to `failure.html`.
   - Check DB tables for order and payment records.

## Security Notes

- Use prepared statements for all DB operations.
- Do NOT commit `razorpay/config.php` with real keys.
- Log errors to `server.log`, do not expose sensitive info to users.

## Files Added/Updated

- `razorpay/config.php.example` (add your keys)
- `razorpay/config.php` (not committed)
- `db/schema.sql` (DB tables)
- `create_order.php` (order creation)
- `verify.php` (payment verification)
- `payment.php` (frontend integration)

## Testing

- Use Razorpay test keys from dashboard.
- All payment and order actions are logged in DB.

---

For more info, see Razorpay PHP SDK docs: https://github.com/razorpay/razorpay-php

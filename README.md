# Razorpay PHP Integration

## Setup Steps

1. **Install dependencies:**
   ```
   composer install
   ```
2. **Configure Razorpay keys and DB:**
   - Copy `.env.example` to `.env` in project root.
   - Add your Razorpay Key ID, Key Secret, and DB credentials to `.env` (do NOT commit secrets).
   - `razorpay/config.php` will load these automatically.
3. **Setup Database:**
   - Create a MySQL database and user.
   - Import schema:
     ```
     mysql -u your_user -p your_db < db/schema.sql
     ```
   - No need to edit PHP files for DB credentials; all config is loaded from `.env`.
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

- `.env.example` (add your keys and DB config)
- `.env` (not committed)
- `razorpay/config.php` (loads config from .env)
- `db/schema.sql` (DB tables)
- `create_order.php` (order creation)
- `verify.php` (payment verification)
- `payment.php` (frontend integration)

## Testing

- Use Razorpay test keys from dashboard.
- All payment and order actions are logged in DB.

---

For more info, see Razorpay PHP SDK docs: https://github.com/razorpay/razorpay-php

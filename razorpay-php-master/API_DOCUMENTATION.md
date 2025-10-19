# API Documentation

**Version:** 1.0.0  
**Base URL:** `http://localhost:8000/api/`  
**Format:** JSON

---

## 🔐 Authentication Endpoints

### 1. Register User

**Endpoint:** `POST /api/auth.php?action=register`

**Description:** Create a new user account

**Request:**
```json
{
    "name": "John Doe",
    "email": "john@example.com",
    "password": "password123",
    "phone": "9876543210"
}
```

**Response (Success):**
```json
{
    "success": true,
    "message": "Registration successful. Welcome!",
    "user_id": 1
}
```

**Response (Error):**
```json
{
    "success": false,
    "message": "Email already registered"
}
```

**Validation:**
- Name: 2-100 characters, required
- Email: Valid format, unique, required
- Password: Minimum 6 characters, required
- Phone: Optional, max 20 characters

**Status Codes:**
- 200 - Success
- 400 - Invalid input
- 405 - Wrong HTTP method

---

### 2. Login User

**Endpoint:** `POST /api/auth.php?action=login`

**Description:** Authenticate user and create session

**Request:**
```json
{
    "email": "john@example.com",
    "password": "password123"
}
```

**Response (Success):**
```json
{
    "success": true,
    "message": "Login successful. Welcome back!",
    "user_id": 1
}
```

**Response (Error):**
```json
{
    "success": false,
    "message": "Invalid email or password"
}
```

**Status Codes:**
- 200 - Success
- 400 - Invalid input
- 405 - Wrong HTTP method

---

### 3. Logout User

**Endpoint:** `GET /api/auth.php?action=logout`

**Description:** Destroy user session

**Response:**
```json
{
    "success": true,
    "message": "Logged out successfully"
}
```

**Status Codes:**
- 200 - Success

---

### 4. Check Authentication

**Endpoint:** `GET /api/auth.php?action=check`

**Description:** Check if user is logged in

**Response (Logged In):**
```json
{
    "success": true,
    "logged_in": true,
    "user": {
        "id": 1,
        "email": "john@example.com",
        "name": "John Doe"
    }
}
```

**Response (Not Logged In):**
```json
{
    "success": true,
    "logged_in": false
}
```

**Status Codes:**
- 200 - Success

---

## 💳 Payment Endpoints

### 5. Create Payment Order

**Endpoint:** `POST /api/payment.php?action=create_order`

**Description:** Create a Razorpay payment order

**Authentication:** Required (user must be logged in)

**Request:**
```json
{
    "amount": 100,
    "description": "Payment for services"
}
```

**Response (Success):**
```json
{
    "success": true,
    "order_id": "order_1234567890",
    "payment_id": 1,
    "amount": 100,
    "currency": "INR",
    "key_id": "rzp_test_1DP5ibUubEsz3e"
}
```

**Response (Error):**
```json
{
    "success": false,
    "message": "Invalid amount"
}
```

**Validation:**
- Amount: > 0 and < 1,000,000, required
- Description: Optional, max 255 characters

**Status Codes:**
- 200 - Success
- 400 - Invalid input
- 401 - Not authenticated
- 405 - Wrong HTTP method

---

### 6. Verify Payment

**Endpoint:** `POST /api/payment.php?action=verify_payment`

**Description:** Verify Razorpay payment signature

**Authentication:** Required

**Request:**
```json
{
    "order_id": "order_1234567890",
    "payment_id": "pay_1234567890",
    "signature": "9ef4dffbfd84f1318f6739a3ce19f9d85851857ae648f114332d8401e0949a3d"
}
```

**Response (Success):**
```json
{
    "success": true,
    "message": "Payment verified successfully"
}
```

**Response (Error):**
```json
{
    "success": false,
    "message": "Payment verification failed"
}
```

**Status Codes:**
- 200 - Success
- 400 - Invalid input
- 401 - Not authenticated
- 405 - Wrong HTTP method

---

### 7. Get User Payments

**Endpoint:** `GET /api/payment.php?action=get_user_payments`

**Description:** Get all payments for logged-in user

**Authentication:** Required

**Response:**
```json
{
    "success": true,
    "payments": [
        {
            "id": 1,
            "user_id": 1,
            "razorpay_order_id": "order_1234567890",
            "razorpay_payment_id": "pay_1234567890",
            "razorpay_signature": "9ef4dffbfd84f1318f6739a3ce19f9d85851857ae648f114332d8401e0949a3d",
            "amount": 100,
            "currency": "INR",
            "status": "completed",
            "description": "Payment for services",
            "created_at": "2025-10-19 10:30:00",
            "updated_at": "2025-10-19 10:30:05"
        }
    ]
}
```

**Status Codes:**
- 200 - Success
- 401 - Not authenticated

---

### 8. Get Payment Details

**Endpoint:** `GET /api/payment.php?action=get_payment?order_id=ORDER_ID`

**Description:** Get specific payment details

**Authentication:** Required

**Parameters:**
- `order_id` - Razorpay order ID (required)

**Response:**
```json
{
    "success": true,
    "payment": {
        "id": 1,
        "user_id": 1,
        "razorpay_order_id": "order_1234567890",
        "razorpay_payment_id": "pay_1234567890",
        "razorpay_signature": "9ef4dffbfd84f1318f6739a3ce19f9d85851857ae648f114332d8401e0949a3d",
        "amount": 100,
        "currency": "INR",
        "status": "completed",
        "description": "Payment for services",
        "created_at": "2025-10-19 10:30:00",
        "updated_at": "2025-10-19 10:30:05"
    }
}
```

**Status Codes:**
- 200 - Success
- 400 - Invalid order ID
- 401 - Not authenticated

---

## 🔒 Security Features

### Authentication
- Session-based authentication
- User must be logged in for payment operations
- Session data stored server-side

### Input Validation
- All inputs validated on backend
- Email format validation
- Amount range validation
- String length validation

### Data Protection
- Passwords hashed with bcrypt
- Prepared statements prevent SQL injection
- Output encoding prevents XSS
- CSRF protection via same-origin policy

### Error Handling
- Generic error messages
- No sensitive data in responses
- Proper HTTP status codes
- Error logging for debugging

---

## 📊 Response Format

All responses are JSON with this structure:

```json
{
    "success": true/false,
    "message": "Response message",
    "data": {}
}
```

---

## 🔑 Test Credentials

**Razorpay Test Account:**
- Key ID: `rzp_test_1DP5ibUubEsz3e`
- Key Secret: `SkL1Vi8FVrWWWW5sIiE1i66j`

**Test Cards:**
- Success: `4111111111111111`
- Failure: `4000000000000002`
- Expiry: Any future date
- CVV: Any 3 digits

---

## 🧪 Example Usage

### Register and Login

```javascript
// Register
const registerResponse = await fetch('/api/auth.php?action=register', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
        name: 'John Doe',
        email: 'john@example.com',
        password: 'password123'
    })
});

// Login
const loginResponse = await fetch('/api/auth.php?action=login', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
        email: 'john@example.com',
        password: 'password123'
    })
});
```

### Create and Verify Payment

```javascript
// Create order
const orderResponse = await fetch('/api/payment.php?action=create_order', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
        amount: 100,
        description: 'Payment for services'
    })
});

// Verify payment
const verifyResponse = await fetch('/api/payment.php?action=verify_payment', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
        order_id: 'order_123',
        payment_id: 'pay_123',
        signature: 'signature_hash'
    })
});
```

---

## 🚀 Rate Limiting

Currently not implemented. Recommended for production:
- 5 login attempts per minute per IP
- 10 payment attempts per minute per user
- 100 API calls per minute per user

---

## 📝 Changelog

**v1.0.0** (2025-10-19)
- Initial release
- All endpoints implemented
- Security measures added
- Documentation complete

---

**Last Updated:** 2025-10-19  
**Status:** ✅ Production Ready


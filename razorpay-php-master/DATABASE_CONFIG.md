# Database Configuration Guide

**Version:** 1.0.0  
**Database:** SQLite  
**Location:** `data/payments.db`

---

## 📋 Overview

The Razorpay Payment Gateway uses SQLite for local data storage. This guide explains the database configuration, schema, and how to connect to it.

---

## 🔧 Database Configuration

### Connection Details

**File:** `config/database.php`

```php
// Database path
$this->dbPath = __DIR__ . '/../data/payments.db';

// Connection string
'sqlite:' . $this->dbPath

// PDO Configuration
$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
```

### Connection String

```
sqlite:/path/to/data/payments.db
```

### Localhost Connection

For local development:

```
sqlite:./data/payments.db
```

Or absolute path:

```
sqlite:C:\Users\LAPPYHUB\Downloads\razorpay-php-master\data\payments.db
```

---

## 📊 Database Schema

### Users Table

```sql
CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT UNIQUE NOT NULL,
    password TEXT NOT NULL,
    phone TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
```

**Fields:**
- `id` - Unique user identifier
- `name` - User's full name (2-100 characters)
- `email` - User's email (unique, max 255 characters)
- `password` - Bcrypt hashed password
- `phone` - Optional phone number
- `created_at` - Account creation timestamp

**Indexes:**
- `id` - Primary key (auto-indexed)
- `email` - Unique constraint (auto-indexed)

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
);
```

**Fields:**
- `id` - Unique payment identifier
- `user_id` - Reference to user (foreign key)
- `razorpay_order_id` - Razorpay order ID (unique)
- `razorpay_payment_id` - Razorpay payment ID
- `razorpay_signature` - Payment signature for verification
- `amount` - Payment amount in INR
- `currency` - Currency code (default: INR)
- `status` - Payment status (pending/completed/failed)
- `description` - Payment description
- `created_at` - Payment creation timestamp
- `updated_at` - Last update timestamp

**Indexes:**
- `id` - Primary key (auto-indexed)
- `razorpay_order_id` - Unique constraint (auto-indexed)
- `user_id` - Foreign key (auto-indexed)

---

## 🔐 Database Security

### File Permissions

```bash
# Set database file permissions (Linux/Mac)
chmod 600 data/payments.db

# Set directory permissions
chmod 755 data/
```

### Windows Permissions

1. Right-click `data/payments.db`
2. Properties → Security
3. Set permissions to read/write for application user only

### Backup Strategy

```bash
# Backup database
cp data/payments.db data/payments.db.backup

# Restore from backup
cp data/payments.db.backup data/payments.db
```

### Encryption (Production)

For production, consider:
1. SQLite encryption extension
2. Full disk encryption
3. Database-level encryption

---

## 🔌 Connection Methods

### PHP PDO Connection

```php
$db = new PDO('sqlite:data/payments.db');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
```

### Command Line (SQLite3)

```bash
sqlite3 data/payments.db
```

### GUI Tools

1. **SQLite Browser** - https://sqlitebrowser.org/
2. **DBeaver** - https://dbeaver.io/
3. **VS Code Extension** - SQLite

---

## 📝 Database Operations

### Create Tables

Tables are created automatically on first connection:

```php
$db = new Database(); // Tables created automatically
```

### Insert User

```php
$userId = $db->insert('users', [
    'name' => 'John Doe',
    'email' => 'john@example.com',
    'password' => password_hash('password123', PASSWORD_BCRYPT),
    'phone' => '9876543210'
]);
```

### Query User

```php
$user = $db->selectOne('users', 'email = ?', ['john@example.com']);
```

### Update Payment

```php
$db->update('payments', 
    [
        'status' => 'completed',
        'razorpay_payment_id' => 'pay_123456',
        'updated_at' => date('Y-m-d H:i:s')
    ],
    'razorpay_order_id = ?',
    ['order_123456']
);
```

### Get User Payments

```php
$payments = $db->select('payments', 'user_id = ? ORDER BY created_at DESC', [$userId]);
```

---

## 🔍 Database Queries

### View All Users

```sql
SELECT * FROM users;
```

### View User Payments

```sql
SELECT * FROM payments WHERE user_id = 1 ORDER BY created_at DESC;
```

### View Payment Statistics

```sql
SELECT 
    status,
    COUNT(*) as count,
    SUM(amount) as total
FROM payments
GROUP BY status;
```

### View User with Payments

```sql
SELECT 
    u.id,
    u.name,
    u.email,
    COUNT(p.id) as payment_count,
    SUM(p.amount) as total_amount
FROM users u
LEFT JOIN payments p ON u.id = p.user_id
GROUP BY u.id;
```

---

## 🛠️ Maintenance

### Database Optimization

```sql
-- Vacuum database (optimize space)
VACUUM;

-- Analyze for query optimization
ANALYZE;
```

### Check Database Integrity

```sql
-- Check for corruption
PRAGMA integrity_check;
```

### View Database Info

```sql
-- Get database page count
PRAGMA page_count;

-- Get page size
PRAGMA page_size;
```

---

## 📈 Scaling Considerations

### When to Migrate

Consider migrating to MySQL/PostgreSQL when:
- Users > 10,000
- Payments > 100,000
- Concurrent users > 100
- Need for replication
- Need for advanced features

### Migration Steps

1. Export data from SQLite
2. Create schema in MySQL/PostgreSQL
3. Import data
4. Update connection string
5. Test thoroughly

---

## 🚨 Troubleshooting

### Database Connection Failed

**Error:** "Database connection failed"

**Solution:**
1. Check `data/` directory exists
2. Check file permissions
3. Check SQLite3 extension enabled
4. Check database path is correct

### Table Not Found

**Error:** "Table 'users' not found"

**Solution:**
1. Database not initialized
2. Run `php setup.php`
3. Check database file exists

### Locked Database

**Error:** "Database is locked"

**Solution:**
1. Close other connections
2. Restart PHP server
3. Check file permissions
4. Delete `.db-journal` file

### Corrupted Database

**Error:** "Database disk image is malformed"

**Solution:**
1. Restore from backup
2. Run `PRAGMA integrity_check;`
3. Recreate database

---

## 📚 Database API

### Database Class Methods

```php
// Get connection
$conn = $db->getConnection();

// Execute query
$stmt = $db->query($sql, $params);

// Insert record
$id = $db->insert($table, $data);

// Update records
$db->update($table, $data, $where, $params);

// Select records
$rows = $db->select($table, $where, $params);

// Select single record
$row = $db->selectOne($table, $where, $params);
```

---

## 🔐 Data Protection

### Password Storage

Passwords are stored as bcrypt hashes:

```php
// Hashing
$hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

// Verification
password_verify($password, $hash);
```

### No Sensitive Data

The database does NOT store:
- Credit card numbers
- CVV codes
- Expiry dates
- API keys
- Secrets

---

## 📊 Sample Data

### Sample User

```sql
INSERT INTO users (name, email, password, phone)
VALUES ('John Doe', 'john@example.com', '$2y$12$...', '9876543210');
```

### Sample Payment

```sql
INSERT INTO payments (user_id, razorpay_order_id, amount, currency, status, description)
VALUES (1, 'order_123456', 10000, 'INR', 'completed', 'Payment for services');
```

---

## 🎯 Best Practices

1. **Regular Backups** - Backup database daily
2. **Monitor Size** - Check database size regularly
3. **Optimize Queries** - Use indexes effectively
4. **Secure Access** - Restrict file permissions
5. **Version Control** - Don't commit database file
6. **Test Backups** - Verify backups work
7. **Document Changes** - Track schema changes
8. **Monitor Performance** - Check query performance

---

## 📞 Support

For database issues:
1. Check this guide
2. Review error messages
3. Check file permissions
4. Verify connection string
5. Test with SQLite CLI

---

**Last Updated:** 2025-10-19  
**Status:** ✅ Production Ready


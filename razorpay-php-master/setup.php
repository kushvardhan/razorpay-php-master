<?php
/**
 * Setup Script
 * Initialize database and create necessary directories
 */

echo "=== Razorpay Payment Gateway Setup ===\n\n";

// Create data directory
$dataDir = __DIR__ . '/data';
if (!is_dir($dataDir)) {
    if (mkdir($dataDir, 0755, true)) {
        echo "✓ Created data directory\n";
    } else {
        echo "✗ Failed to create data directory\n";
        exit(1);
    }
} else {
    echo "✓ Data directory already exists\n";
}

// Initialize database
try {
    require_once __DIR__ . '/config/database.php';
    $db = new Database();
    echo "✓ Database initialized successfully\n";
} catch (Exception $e) {
    echo "✗ Database initialization failed: " . $e->getMessage() . "\n";
    exit(1);
}

// Check Razorpay config
$razorpayConfig = require __DIR__ . '/config/razorpay.php';
echo "\n=== Razorpay Configuration ===\n";
echo "Key ID: " . substr($razorpayConfig['key_id'], 0, 10) . "...\n";
echo "Currency: " . $razorpayConfig['currency'] . "\n";

// Check if Razorpay SDK is available
if (file_exists(__DIR__ . '/Razorpay.php')) {
    echo "✓ Razorpay SDK found\n";
} else {
    echo "✗ Razorpay SDK not found\n";
    exit(1);
}

// Check required directories
$requiredDirs = [
    'app' => __DIR__ . '/app',
    'api' => __DIR__ . '/api',
    'public' => __DIR__ . '/public',
    'config' => __DIR__ . '/config'
];

echo "\n=== Directory Structure ===\n";
foreach ($requiredDirs as $name => $path) {
    if (is_dir($path)) {
        echo "✓ $name directory exists\n";
    } else {
        echo "✗ $name directory missing\n";
    }
}

// Check required files
$requiredFiles = [
    'app/Auth.php' => __DIR__ . '/app/Auth.php',
    'app/PaymentHandler.php' => __DIR__ . '/app/PaymentHandler.php',
    'api/auth.php' => __DIR__ . '/api/auth.php',
    'api/payment.php' => __DIR__ . '/api/payment.php',
    'public/auth.html' => __DIR__ . '/public/auth.html',
    'public/payment.html' => __DIR__ . '/public/payment.html',
    'config/database.php' => __DIR__ . '/config/database.php',
    'config/razorpay.php' => __DIR__ . '/config/razorpay.php'
];

echo "\n=== Required Files ===\n";
foreach ($requiredFiles as $name => $path) {
    if (file_exists($path)) {
        echo "✓ $name exists\n";
    } else {
        echo "✗ $name missing\n";
    }
}

echo "\n=== Setup Complete ===\n";
echo "✓ All systems initialized successfully!\n\n";
echo "Next steps:\n";
echo "1. Start a PHP server: php -S localhost:8000 -t public/\n";
echo "2. Open http://localhost:8000 in your browser\n";
echo "3. Register or login with your credentials\n";
echo "4. Make a test payment\n\n";
echo "Test Razorpay Credentials:\n";
echo "Key ID: " . $razorpayConfig['key_id'] . "\n";
echo "Key Secret: " . $razorpayConfig['key_secret'] . "\n";
?>


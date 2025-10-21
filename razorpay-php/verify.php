<?php
/**
 * Verification Script
 * Checks if all components are properly set up
 */

echo "=== Razorpay Payment Gateway Verification ===\n\n";

$errors = [];
$success = [];
$warnings = [];

// This file is not needed for payment flow. Please use verify.php in project root.
$files = [
    'public/test.php' => __DIR__ . '/public/test.php',
    'Razorpay.php' => __DIR__ . '/Razorpay.php',
];

foreach ($files as $name => $path) {
    if (file_exists($path)) {
        $success[] = "✓ File '$name' exists";
    } else {
        $errors[] = "✗ File '$name' is missing";
    }
}

// Check Data Directory
$dataDir = __DIR__ . '/data';
if (is_dir($dataDir)) {
    $success[] = "✓ Data directory exists";
} else {
    $warnings[] = "⚠ Data directory does not exist (will be created on first use)";
}

// Try to load Razorpay SDK
try {
    require_once __DIR__ . '/Razorpay.php';
    if (class_exists('Razorpay\Api\Api')) {
        $success[] = "✓ Razorpay SDK loaded successfully";
    } else {
        $errors[] = "✗ Razorpay SDK class not found";
    }
} catch (Exception $e) {
    $errors[] = "✗ Failed to load Razorpay SDK: " . $e->getMessage();
}

// Try to load Database class
try {
    require_once __DIR__ . '/config/database.php';
    if (class_exists('Database')) {
        $success[] = "✓ Database class loaded successfully";
    } else {
        $errors[] = "✗ Database class not found";
    }
} catch (Exception $e) {
    $errors[] = "✗ Failed to load Database class: " . $e->getMessage();
}

// Try to load Auth class
try {
    require_once __DIR__ . '/app/Auth.php';
    if (class_exists('Auth')) {
        $success[] = "✓ Auth class loaded successfully";
    } else {
        $errors[] = "✗ Auth class not found";
    }
} catch (Exception $e) {
    $errors[] = "✗ Failed to load Auth class: " . $e->getMessage();
}

// Try to load PaymentHandler class
try {
    require_once __DIR__ . '/app/PaymentHandler.php';
    if (class_exists('PaymentHandler')) {
        $success[] = "✓ PaymentHandler class loaded successfully";
    } else {
        $errors[] = "✗ PaymentHandler class not found";
    }
} catch (Exception $e) {
    $errors[] = "✗ Failed to load PaymentHandler class: " . $e->getMessage();
}

// Check Razorpay Config
try {
    $config = require __DIR__ . '/config/razorpay.php';
    if (isset($config['key_id']) && isset($config['key_secret'])) {
        $success[] = "✓ Razorpay configuration found";
    } else {
        $errors[] = "✗ Razorpay configuration incomplete";
    }
} catch (Exception $e) {
    $errors[] = "✗ Failed to load Razorpay config: " . $e->getMessage();
}

// Print Results
echo "SUCCESS:\n";
foreach ($success as $msg) {
    echo "  $msg\n";
}

if (!empty($warnings)) {
    echo "\nWARNINGS:\n";
    foreach ($warnings as $msg) {
        echo "  $msg\n";
    }
}

if (!empty($errors)) {
    echo "\nERRORS:\n";
    foreach ($errors as $msg) {
        echo "  $msg\n";
    }
}

echo "\n";
if (empty($errors)) {
    echo "✓ All checks passed! System is ready.\n";
    echo "\nNext steps:\n";
    echo "1. Start PHP server: php -S localhost:8000 -t public/\n";
    echo "2. Open http://localhost:8000 in your browser\n";
    echo "3. Register or login\n";
    echo "4. Make a test payment\n";
    exit(0);
} else {
    echo "✗ Some checks failed. Please fix the errors above.\n";
    exit(1);
}
?>


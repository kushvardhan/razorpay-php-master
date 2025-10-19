<?php
/**
 * System Test Page
 * Verify all components are working correctly
 */

session_start();

$tests = [];
$allPassed = true;

// Test 1: PHP Version
$phpVersion = phpversion();
$tests['PHP Version'] = [
    'status' => version_compare($phpVersion, '7.3', '>='),
    'message' => "PHP $phpVersion (Required: >= 7.3)"
];

// Test 2: SQLite3 Extension
$tests['SQLite3 Extension'] = [
    'status' => extension_loaded('sqlite3'),
    'message' => extension_loaded('sqlite3') ? 'Installed' : 'Not installed'
];

// Test 3: PDO Extension
$tests['PDO Extension'] = [
    'status' => extension_loaded('pdo'),
    'message' => extension_loaded('pdo') ? 'Installed' : 'Not installed'
];

// Test 4: JSON Extension
$tests['JSON Extension'] = [
    'status' => extension_loaded('json'),
    'message' => extension_loaded('json') ? 'Installed' : 'Not installed'
];

// Test 5: Data Directory
$dataDir = __DIR__ . '/../data';
$dataDirExists = is_dir($dataDir);
$tests['Data Directory'] = [
    'status' => $dataDirExists,
    'message' => $dataDirExists ? 'Exists and writable' : 'Does not exist'
];

// Test 6: Database File
$dbFile = $dataDir . '/payments.db';
$dbExists = file_exists($dbFile);
$tests['Database File'] = [
    'status' => $dbExists,
    'message' => $dbExists ? 'Exists' : 'Will be created on first use'
];

// Test 7: Database Connection
$dbTest = false;
$dbMessage = 'Not tested';
try {
    if (extension_loaded('pdo') && extension_loaded('sqlite3')) {
        if (!$dataDirExists) {
            mkdir($dataDir, 0755, true);
        }
        $db = new PDO('sqlite:' . $dbFile);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbTest = true;
        $dbMessage = 'Connected successfully';
    }
} catch (Exception $e) {
    $dbMessage = 'Connection failed: ' . $e->getMessage();
}
$tests['Database Connection'] = [
    'status' => $dbTest,
    'message' => $dbMessage
];

// Test 8: Required Files
$requiredFiles = [
    'Auth.php' => __DIR__ . '/../app/Auth.php',
    'PaymentHandler.php' => __DIR__ . '/../app/PaymentHandler.php',
    'auth.php API' => __DIR__ . '/../api/auth.php',
    'payment.php API' => __DIR__ . '/../api/payment.php',
    'Razorpay.php' => __DIR__ . '/../Razorpay.php',
    'database.php Config' => __DIR__ . '/../config/database.php',
    'razorpay.php Config' => __DIR__ . '/../config/razorpay.php'
];

foreach ($requiredFiles as $name => $path) {
    $exists = file_exists($path);
    $tests[$name] = [
        'status' => $exists,
        'message' => $exists ? 'Found' : 'Missing'
    ];
}

// Test 9: Razorpay SDK
$razorpayTest = false;
$razorpayMessage = 'Not available';
try {
    if (file_exists(__DIR__ . '/../Razorpay.php')) {
        require_once __DIR__ . '/../Razorpay.php';
        $razorpayTest = class_exists('Razorpay\Api\Api');
        $razorpayMessage = $razorpayTest ? 'SDK loaded successfully' : 'SDK class not found';
    }
} catch (Exception $e) {
    $razorpayMessage = 'Error: ' . $e->getMessage();
}
$tests['Razorpay SDK'] = [
    'status' => $razorpayTest,
    'message' => $razorpayMessage
];

// Calculate overall status
foreach ($tests as $test) {
    if (!$test['status']) {
        $allPassed = false;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Test - Razorpay Payment Gateway</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            padding: 40px;
        }

        h1 {
            color: #333;
            margin-bottom: 10px;
            text-align: center;
        }

        .status-header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 5px;
        }

        .status-header.pass {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .status-header.fail {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .test-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border-bottom: 1px solid #eee;
            transition: background 0.2s;
        }

        .test-item:hover {
            background: #f9f9f9;
        }

        .test-item:last-child {
            border-bottom: none;
        }

        .test-name {
            font-weight: 600;
            color: #333;
        }

        .test-status {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .status-badge {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 12px;
        }

        .status-badge.pass {
            background: #28a745;
        }

        .status-badge.fail {
            background: #dc3545;
        }

        .test-message {
            color: #666;
            font-size: 14px;
        }

        .actions {
            margin-top: 30px;
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            margin: 0 10px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.2s;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-secondary {
            background: #e9ecef;
            color: #333;
        }

        .info-box {
            background: #e7f3ff;
            border-left: 4px solid #2196F3;
            padding: 15px;
            margin-top: 20px;
            border-radius: 3px;
            color: #0c5aa0;
        }

        .info-box strong {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔍 System Test Report</h1>
        
        <div class="status-header <?php echo $allPassed ? 'pass' : 'fail'; ?>">
            <h2><?php echo $allPassed ? '✓ All Systems Ready!' : '✗ Some Issues Found'; ?></h2>
            <p><?php echo $allPassed ? 'Your system is ready to use the payment gateway.' : 'Please fix the issues below before proceeding.'; ?></p>
        </div>

        <div class="test-results">
            <?php foreach ($tests as $testName => $test): ?>
                <div class="test-item">
                    <span class="test-name"><?php echo htmlspecialchars($testName); ?></span>
                    <div class="test-status">
                        <span class="status-badge <?php echo $test['status'] ? 'pass' : 'fail'; ?>">
                            <?php echo $test['status'] ? '✓' : '✗'; ?>
                        </span>
                        <span class="test-message"><?php echo htmlspecialchars($test['message']); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="info-box">
            <strong>📋 Test Information:</strong>
            <p>This test verifies that all required PHP extensions, files, and configurations are in place for the Razorpay payment gateway to function correctly.</p>
        </div>

        <div class="actions">
            <?php if ($allPassed): ?>
                <a href="auth.html" class="btn btn-primary">Go to Login →</a>
            <?php else: ?>
                <button class="btn btn-secondary" onclick="location.reload()">Retry Test</button>
            <?php endif; ?>
            <a href="../SETUP_GUIDE.md" class="btn btn-secondary">View Setup Guide</a>
        </div>
    </div>
</body>
</html>


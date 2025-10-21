
<?php
// Load environment variables from .env if available
if (file_exists(__DIR__ . '/../.env')) {
	$env = parse_ini_file(__DIR__ . '/../.env');
	foreach ($env as $k => $v) {
		putenv("{$k}={$v}");
	}
}

// Razorpay API keys
define('RAZOR_KEY_ID', getenv('RAZOR_KEY_ID') ?: '');
define('RAZOR_KEY_SECRET', getenv('RAZOR_KEY_SECRET') ?: '');

// Database config
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_NAME', getenv('DB_NAME') ?: 'your_db');
define('DB_USER', getenv('DB_USER') ?: 'your_user');
define('DB_PASS', getenv('DB_PASS') ?: 'your_pass');

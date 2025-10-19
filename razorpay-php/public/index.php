<?php
/**
 * Index Page - Redirect to auth
 */

session_start();

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
    header('Location: payment.html');
    exit;
} else {
    header('Location: auth.html');
    exit;
}
?>


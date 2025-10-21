<?php
session_start();
header('Content-Type: application/json');
$message = $_SESSION['success_message'] ?? '';
echo json_encode(['message' => $message]);

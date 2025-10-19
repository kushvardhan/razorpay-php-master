<?php
/**
 * Authentication API Endpoints
 */

session_start();
header('Content-Type: application/json');

require_once __DIR__ . '/../app/Auth.php';

$auth = new Auth();
$action = $_GET['action'] ?? '';
$response = ['success' => false, 'message' => 'Invalid action'];

try {
    switch ($action) {
        case 'register':
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                throw new Exception('Invalid request method');
            }

            $data = json_decode(file_get_contents('php://input'), true);
            
            if (!$data) {
                $data = $_POST;
            }

            $result = $auth->register(
                $data['name'] ?? '',
                $data['email'] ?? '',
                $data['password'] ?? '',
                $data['phone'] ?? ''
            );

            $response = $result;
            break;

        case 'login':
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                throw new Exception('Invalid request method');
            }

            $data = json_decode(file_get_contents('php://input'), true);
            
            if (!$data) {
                $data = $_POST;
            }

            $result = $auth->login(
                $data['email'] ?? '',
                $data['password'] ?? ''
            );

            $response = $result;
            break;

        case 'logout':
            $result = $auth->logout();
            $response = $result;
            break;

        case 'check':
            if ($auth->isLoggedIn()) {
                $user = $auth->getCurrentUser();
                $response = [
                    'success' => true,
                    'logged_in' => true,
                    'user' => $user
                ];
            } else {
                $response = [
                    'success' => true,
                    'logged_in' => false
                ];
            }
            break;

        default:
            throw new Exception('Unknown action: ' . $action);
    }
} catch (Exception $e) {
    $response = [
        'success' => false,
        'message' => $e->getMessage()
    ];
}

echo json_encode($response);
?>


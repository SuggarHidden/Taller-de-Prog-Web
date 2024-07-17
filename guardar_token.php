<?php
session_start();
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['token'])) {
        $token = $_POST['token'];

        $decoded_token = decodeJwtToken($token);

        $_SESSION['user_id'] = $decoded_token['sub'];
        $_SESSION['username'] = $decoded_token['name'];

        echo json_encode(['success' => true, 'message' => 'Token procesado correctamente']);
        exit;
    } else {
        echo json_encode(['success' => false, 'message' => 'Token no recibido']);
        exit;
    }
} else {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit;
}
function decodeJwtToken($token)
{
    return json_decode(base64_decode(str_replace('_', '/', str_replace('-', '+', explode('.', $token)[1]))), true);
}
?>
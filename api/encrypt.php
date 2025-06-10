<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);
$password = $data['password'];

$key = 'mein_sicherer_geheimer_schluessel_123!'; // In Produktion sicher speichern
$iv_length = openssl_cipher_iv_length('aes-256-cbc');
$iv = openssl_random_pseudo_bytes($iv_length);

// Passwort verschlüsseln
$encrypted_password = openssl_encrypt($password, 'aes-256-cbc', $key, 0, $iv);

// JSON-Ausgabe verschlüsseltes Passwort und IV
echo json_encode([
    'encrypted_password' => base64_encode($encrypted_password),
    'iv' => base64_encode($iv)
]);
?>

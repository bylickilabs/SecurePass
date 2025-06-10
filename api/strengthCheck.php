<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

$chars = 'abcdefghijklmnopqrstuvwxyz';
if ($data['uppercase']) $chars .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
if ($data['numbers']) $chars .= '0123456789';
if ($data['symbols']) $chars .= '!@#$%^&*()_-+=[]{}|;:,.<>?';

$password = '';
$max = strlen($chars) - 1;

for ($i = 0; $i < $data['length']; $i++) {
    $password .= $chars[random_int(0, $max)];
}

// Passwort-Stärkeprüfung
$strength = 0;
$strength += ($data['length'] >= 12) ? 1 : 0;
$strength += $data['uppercase'] ? 1 : 0;
$strength += $data['numbers'] ? 1 : 0;
$strength += $data['symbols'] ? 1 : 0;

switch ($strength) {
    case 4:
        $strengthText = 'Sehr stark';
        $strengthColor = '#4CAF50';
        break;
    case 3:
        $strengthText = 'Stark';
        $strengthColor = '#8BC34A';
        break;
    case 2:
        $strengthText = 'Mittel';
        $strengthColor = '#FFC107';
        break;
    default:
        $strengthText = 'Schwach';
        $strengthColor = '#F44336';
        break;
}

echo json_encode([
    'password' => $password,
    'strengthText' => $strengthText,
    'strengthColor' => $strengthColor
]);
?>

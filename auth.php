<?php
// Sanitização simples
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

if ($auth_radius->auth($username, $password)) {
    $redirect_url = '/lgpd_terms.html';
    header('Location: ' . $redirect_url);
    exit;
} else {
    header('Location: /index.html?error=1');
    exit;
}
?>

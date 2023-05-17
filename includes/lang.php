<?php
session_start();
$_SESSION['language'] = $_GET['l'] ?? 'ca';

$idioma = $_SESSION['language'];

// Establecer la cookie
setcookie('idioma_cookie', $idioma, time() + 3600, '/');

header("Location: /bloc.php");
exit;
?>
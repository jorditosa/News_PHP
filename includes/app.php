<?php

define('TEMPLATES_URL', __DIR__ . '/templates/');
define('FUNCTIONS_URL', 'functions.php');

// Idioma predeterminado
session_start();
$_SESSION['idioma'] = 'ca';

?>
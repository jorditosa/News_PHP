<?php
// Borrar cookie
setcookie('username', '', time() - 3600, '/');

// Redirigir a la página de inicio
header('Location: /bloc.php');
exit;
?>

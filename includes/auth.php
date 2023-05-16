<?php

// Validaciones iniciales
$error;

$jsonData = file_get_contents('../users.json');
$data = json_decode($jsonData);

$user = $data->Username;
$passwd = $data->Password;


if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Comprobación datos correctos
    if($username == $user && $password == $passwd) {
        // Iniciar sesión para nuevos datos
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        // Redirigir a la página de inicio
        header('Location: ../bloc.php?user='.$username.'');
    } else {
        $error = "invalid";
        header('Location: login.php?error='.$error.'');
    }
} else {
    $error = "empty";
    header('Location: login.php?error='.$error.'');
}

?>
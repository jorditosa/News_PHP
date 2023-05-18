<?php

// Creacion del usuario y contraseña hasheada
$user = "jordisan";
$passwd = "Pec3";
$passwdHash = password_hash($passwd, PASSWORD_BCRYPT);

$data = array(
   "Username" => $user,
   "Password" => $passwdHash
);

$jsonData = json_encode($data, JSON_PRETTY_PRINT);

// Recoger el input del usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $password = $_POST['password'];

    echo "La contraseña ingresada es: " . $password;
}

// Verificacion contraseñas
$passwdValidations;
if (password_verify($passwd, $passwdHash)) {
    $passwdValidations = true;
} else {
    $passwdValidations = false;
}


file_put_contents("../users.json", $jsonData);


// Validaciones iniciales
$error;

$jsonData = file_get_contents('../users.json');
$data = json_decode($jsonData);

$user = $data->Username;
$passwd = $data->Password;



if(!empty($_POST['username']) && !empty($_POST['password'])) {

    // Comprobación datos correctos
    if($username == $user && $password == $passwd && $passwdValidations) {
        // Iniciar sesión para nuevos datos
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        // Crear cookie
        setcookie('username', $username, time() + 3600, '/');

        // Redirigir a la página de inicio
        header('Location: ./templates/perfil.php?user='.$username.'');
    } else {
        $error = "invalid";
        header('Location: login.php?error='.$error.'');
    }
} else {
    $error = "empty";
    header('Location: login.php?error='.$error.'');
}

?>
<?php
// Recuperar Cookies de idioma e usuario
session_start();
$idioma = $_COOKIE['idioma_cookie'] ?? 'ca';
$user = $_COOKIE['username'] ?? false;

require('../includes/templates/head.php');
require('../includes/templates/header.php');

?>

<body>
    <div class="container pt-5">
        <div class="float-end border rounded">
            <i class="bi bi-file-earmark-person fs-1 px-3"></i>
            <i class="bi bi-credit-card fs-1 px-3"></i>
            <i class="bi bi-trash fs-1 px-3 text-danger"></i>
        </div>
        <h1>Benvingut/da <?php echo $user ?></h1>
    </div>

</body>
</html>
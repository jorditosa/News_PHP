<?php
// Importar funcionalidades
require '../app.php';
include TEMPLATE_URL . 'head.php';

// Recuperar Cookies de idioma e usuario
session_start();
$idioma = $_COOKIE['idioma_cookie'] ?? 'ca';
$user = $_COOKIE['username'] ?? false;

include TEMPLATE_URL . 'header.php';

?>

<body>
    <div class="container py-5">
        <div class="float-end border rounded">
            <i class="bi bi-file-earmark-person fs-1 px-3"></i>
            <i class="bi bi-credit-card fs-1 px-3"></i>
            <i class="bi bi-trash fs-1 px-3 text-danger"></i>
        </div>
        <h1>Benvingut/da <?php echo $user ?></h1>
        <hr>
    </div>

    <?php
    
    include TEMPLATE_URL . 'footer.php';
    include TEMPLATE_URL . 'scripts.php';

    ?>

</body>
</html>
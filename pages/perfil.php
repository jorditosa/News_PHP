<?php
require('../includes/templates/head.php');
require('../includes/templates/header.php');


// Revisión de usuario conectado
if(isset($_GET['user'])) {
    $user = $_GET['user'];
  } 
  $_SESSION['user'] = $user;
  



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
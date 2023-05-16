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
        <h1>Benvingut/da <?php echo $user ?></h1>
    </div>

</body>
</html>
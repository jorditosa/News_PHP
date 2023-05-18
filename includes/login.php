<?php
// Importar funcionalidades
include './app.php';
include TEMPLATE_URL . 'templates/head.php';

// Validaciones y errores
if(isset($_GET['error'])) {
  $error = $_GET['error'];
}

?>

<body>
  
<?php
  include TEMPLATE_URL . 'templates/header.php';
?>

<form action="auth.php" method="post" id="login-form" class="container py-5 col-3">
  <h3>Iniciar Sessió</h3>

 <?php 

  if($error == 'empty') {
    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <div>
              Totes les dades son obligatories.
            </div>
          </div>';
  }
  if($error == 'invalid') {
    echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <div>
              L\'usuari o contrasenya son incorrectes.
            </div>
          </div>';
  }
 ?>

  <hr>
  <!-- User input -->
  <div class="form-outline mb-4">
    <input type="user" id="username" class="form-control" name="username"/>
    <label class="form-label" for="username">Username</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="password" class="form-control" name="password" />
    <label class="form-label" for="password">Password</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-dark btn-block mb-4">Login</button>

</form>

<?php
    include TEMPLATE_URL . 'templates/footer.php';
    include TEMPLATE_URL . 'templates/scripts.php';
?>
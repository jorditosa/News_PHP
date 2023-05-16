<?php
// Importar funcionalidades
require '../includes/functions.php';

includeTemplate('head');

// Validaciones y errores
if(isset($_GET['error'])) {
  $error = $_GET['error'];
}

?>



<body>

<?php
includeTemplate('header');
?>

<form action="auth.php" method="post" id="login-form" class="container py-5 col-3">
  <h3>Iniciar Sesión</h3>

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

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input bg-secondary" type="checkbox" value="" id="form2Example31" />
        <label class="form-check-label p-0" for="form2Example31"> Acepto la politica de privacidad </label>
      </div>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-dark btn-block mb-4">Login</button>

</form>

<?php
includeTemplate('footer');
includeTemplate('scripts');
?>
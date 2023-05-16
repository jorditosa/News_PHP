<?php
// Importar funcionalidades
require '../includes/functions.php';

includeTemplate('head');
?>

<body>

<?php
includeTemplate('header');
?>

<form id="login-form" class="container py-5 col-2">
  <h3>Iniciar Sesión</h3>
  <hr>
  <!-- User input -->
  <div class="form-outline mb-4">
    <input type="user" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1">Username</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
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
  <button type="button" class="btn btn-dark btn-block mb-4">Login</button>

</form>

<?php
includeTemplate('footer');
includeTemplate('scripts');
?>
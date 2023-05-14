<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <h1 class="navbar-brand m-0 p-2 border-end">NEWS APP</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/bloc.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/activitat_1.php">Act 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">API</a>
        </li>
      </ul>
      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
        <form method="POST">
            <select name="idioma" id="idioma" class="form-select" onchange="this.form.submit()">
                <option value="ca" <?php if ($idioma === 'ca') echo 'selected'; ?>>Cat</option>
                <option value="en" <?php if ($idioma === 'en') echo 'selected'; ?>>Eng</option>
            </select>
        </form>
      </ul>
    </div>
  </div>
</nav>

<?php


?>

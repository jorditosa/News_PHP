<?php
include './includes/app.php';

// Enrutamiento correcto según la página donde se llame al header
$currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

if ($currentURL ===  BASE_URL . 'bloc.php' || $currentURL ===  BASE_URL . 'activitat_1.php' ) {
    $jsondata = file_get_contents('./api/noticies/common.json');
} elseif ($currentURL ===  BASE_URL . 'includes/login.php') {
    $jsondata = file_get_contents('../api/noticies/common.json');
} else {
  $jsondata = file_get_contents('../../api/noticies/common.json');
}
$data = json_decode($jsondata);

// Recuperar Cookies de idioma e usuario
$idioma = $_COOKIE['idioma_cookie'] ?? 'ca';
$user = $_COOKIE['username'] ?? false;

?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <h1 class="navbar-brand m-0 p-2 border-end">NEWS APP</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo BASE_URL ?>bloc.php">
            <?php             
            echo $data->navbar->home->$idioma; 
            ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL ?>activitat_1.php">Act 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo BASE_URL ?>api/noticies/ca/api.php">API</a>
        </li>
      </ul>
      <ul class="navbar-nav align-items-center">
        <?php if (!$user) : ?>
        <li class="nav-item pe-3">
          <a class="nav-link" href="<?php echo BASE_URL ?>includes/login.php">Login</a>
        </li>
        <?php else : ?>
        <li class="nav-item pe-3 d-flex align-items-center">
          <a class="text-light fs-3" href="<?php echo BASE_URL ?>includes/templates/perfil.php">
            <i class="bi bi-person px-1 fs-2"></i>
          </a>
          <span class="text-light px-2 border-end">
            <?php echo $data->navbar->salutation->{$idioma} . ' ' . $user; ?>
          </span>
          <a class="nav-link" href="<?php echo BASE_URL ?>includes/logout.php">Logout</a>
        </li>
        <?php endif; ?>
        <div class="dropdown">
          <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-translate"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li>
              <a class="dropdown-item" href="<?php echo BASE_URL ?>includes/lang.php?l=ca" rel="noopener noreferrer">Cat</a>
            </li>
            <li>
              <a class="dropdown-item" href="./includes/lang.php?l=en" rel="noopener noreferrer">Eng</a>
            </li>
          </ul>
        </div>
      </ul>
    </div>
  </div>
</nav>
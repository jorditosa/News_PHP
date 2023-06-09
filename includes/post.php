<?php

// Importar funcionalidades
include './app.php';
include TEMPLATE_URL . 'templates/head.php';

?>

<body>

<?php
$id = $_GET['id'];

// Importar datos Json con la Id especificada en la URL
$jsonData = file_get_contents("../api/noticies/post_" . $id . ".json");
$data = json_decode($jsonData);

// Recuperar Cookies de idioma e usuario
$idioma = $_COOKIE['idioma_cookie'] ?? 'ca';
$user = $_COOKIE['username'] ?? false;


?>

<div class="container my-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <i class="bi bi-caret-left"></i>
        <li class="breadcrumb-item">
            <a class="text-dark" href="<?php echo BASE_URL ?>bloc.php">Home</a>
        </li>
      </ol>
    </nav>
    <div class="card col-12">
        <div class="card-body">
            <h2 class="card-title"><?php echo $data->title->$idioma; ?></h2>
            <div class="card-text">
                <?php echo $data->description->$idioma; ?>
            </div>
        </div>
        <img class="pt-2" src="<?php echo BASE_URL . $data->image; ?>" alt="imatge noticia">
    </div>
</div>

<?php
  include TEMPLATE_URL . 'templates/footer.php';
  include TEMPLATE_URL . 'templates/scripts.php';
?>

</body>
</html>
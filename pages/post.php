<?php

$id = $_GET['id'];

// Importar funcionalidades
require '../includes/functions.php';

// Importar datos Json con la Id especificada en la URL
$jsonData = file_get_contents("../api/noticies/post_$id.json");
$data = json_decode($jsonData);

includeTemplate('head');

?>

<body>

<?php
includeTemplate('header');
?>

<div class="container my-5">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <i class="bi bi-caret-left"></i>
        <li class="breadcrumb-item">
            <a class="text-dark" href="/bloc.php">Home</a>
        </li>
      </ol>
    </nav>
    <div class="card col-12">
        <div class="card-body">
            <h2 class="card-title"><?php echo $data->title->ca; ?></h2>
            <div class="card-text">
                <?php echo $data->description->ca; ?>
            </div>
        </div>
        <img class="pt-2" src="<?php echo $data->image; ?>" alt="imatge noticia">
    </div>
</div>

<?php
includeTemplate('footer');
includeTemplate('scripts');
?>

</body>
</html>
<?php
// Importar funcionalidades
require './includes/functions.php';

// Importar datos Json
$jsonData = file_get_contents('./api/noticies/post_1.json');
$data = json_decode($jsonData);

includeTemplate('head');
?>

<body>

<?php
includeTemplate('header');
?>

<main class="container">
    <h1 class="py-4">Noticies d'actualitat mediambiental</h1>

    <div class="row mb-2">

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">
            <?php
            echo $data->title->ca;
            ?>
          </h3>
          <div class="mb-1 text-body-secondary">Nov 12</div>
          <p class="card-text mb-auto">
          <?php
            echo $data->description->ca;
            ?>
          </p>
          <a href="#" class="stretched-link">Llegir més</a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">
            <?php
            echo $data->title->ca;
            ?>
          </h3>
          <div class="mb-1 text-body-secondary">Nov 12</div>
          <p class="card-text mb-auto">
          <?php
            echo $data->description->ca;
            ?>
          </p>
          <a href="#" class="stretched-link">Llegir més</a>
        </div>
      </div>
    </div>

  </div>
</main>



<?php
includeTemplate('footer');
?>
</body>
</html>
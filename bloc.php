<?php
// Importar funcionalidades
require './includes/functions.php';

includeTemplate('head');
?>

<body>

<?php
includeTemplate('header');
?>

<main class="container">
    <h1 class="py-4">Noticies d'actualitat mediambiental</h1>

    <div class="row mb-2">

    <!-- News 1 -->
    <div class="col-12">
      <?php
      // Importar datos Json
      $jsonData = file_get_contents('./api/noticies/post_1.json');
      $data = json_decode($jsonData);
      ?>
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
            <?php
            echo $data->title->ca;
            ?>
          <div class="mb-1 text-body-secondary">
          <?php
            $dt = $data->date;
            $dateFormatted = date("d/m/Y", $dt); 
            echo $dateFormatted; 
            ?>
          </div>
          <div class="row">
            <div class="card-text mb-auto col-8">
            <?php
            $description = $data->description->ca;

            // Si la longitud del contenido es mayor a 120 palabras, corta el contenido y añade puntos suspensivos
            if (str_word_count($description) > 120) {
              $words = str_word_count($description, 2);
              $pos = array_keys($words);
              $description = substr($description, 0, $pos[120]) . '...';
            }

            echo $description;
            echo $data->read_more->ca;
            ?>
            </div>
            <img class="news-img pt-2 col-4" src="<?php echo $data->image; ?>" alt="imatge noticia">
          </div>
        </div>
      </div>
    </div>

     <!-- News 2 -->
     <div class="col-12">
      <?php
      // Importar datos Json
      $jsonData = file_get_contents('./api/noticies/post_2.json');
      $data = json_decode($jsonData);
      ?>
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
            <?php
            echo $data->title->ca;
            ?>
          <div class="mb-1 text-body-secondary">
          <?php
            $dt = $data->date;
            $dateFormatted = date("d/m/Y", $dt); 
            echo $dateFormatted; 
            ?>
          </div>
          <div class="row">
            <div class="card-text mb-auto col-8">
            <?php
            $description = $data->description->ca;

            // Si la longitud del contenido es mayor a 120 palabras, corta el contenido y añade puntos suspensivos
            if (str_word_count($description) > 120) {
              $words = str_word_count($description, 2);
              $pos = array_keys($words);
              $description = substr($description, 0, $pos[120]) . '...';
            }

            echo $description;
            echo $data->read_more->ca;
            ?>
            </div>
            <img class="news-img pt-2 col-4" src="<?php echo $data->image; ?>" alt="imatge noticia">
          </div>
        </div>
      </div>
    </div>

     <!-- News 3 -->
     <div class="col-12">
      <?php
      // Importar datos Json
      $jsonData = file_get_contents('./api/noticies/post_3.json');
      $data = json_decode($jsonData);
      ?>
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
            <?php
            echo $data->title->ca;
            ?>
          <div class="mb-1 text-body-secondary">
          <?php
            $dt = $data->date;
            $dateFormatted = date("d/m/Y", $dt); 
            echo $dateFormatted; 
            ?>
          </div>
          <div class="row">
            <div class="card-text mb-auto col-8">
            <?php
            $description = $data->description->ca;

            // Si la longitud del contenido es mayor a 120 palabras, corta el contenido y añade puntos suspensivos
            if (str_word_count($description) > 120) {
              $words = str_word_count($description, 2);
              $pos = array_keys($words);
              $description = substr($description, 0, $pos[120]) . '...';
            }

            echo $description;
            echo $data->read_more->ca;
            ?>
            </div>
            <img class="news-img pt-2 col-4" src="<?php echo $data->image; ?>" alt="imatge noticia">
          </div>
        </div>
      </div>
    </div>

     <!-- News 4 -->
     <div class="col-12">
      <?php
      // Importar datos Json
      $jsonData = file_get_contents('./api/noticies/post_4.json');
      $data = json_decode($jsonData);
      ?>
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
            <?php
            echo $data->title->ca;
            ?>
          <div class="mb-1 text-body-secondary">
          <?php
            $dt = $data->date;
            $dateFormatted = date("d/m/Y", $dt); 
            echo $dateFormatted; 
            ?>
          </div>
          <div class="row">
            <div class="card-text mb-auto col-8">
            <?php
            $description = $data->description->ca;

            // Si la longitud del contenido es mayor a 120 palabras, corta el contenido y añade puntos suspensivos
            if (str_word_count($description) > 120) {
              $words = str_word_count($description, 2);
              $pos = array_keys($words);
              $description = substr($description, 0, $pos[120]) . '...';
            }

            echo $description;
            echo $data->read_more->ca;
            ?>
            </div>
            <img class="news-img pt-2 col-4" src="<?php echo $data->image; ?>" alt="imatge noticia">
          </div>
        </div>
      </div>
    </div>

     <!-- News 5 -->
     <div class="col-12">
      <?php
      // Importar datos Json
      $jsonData = file_get_contents('./api/noticies/post_5.json');
      $data = json_decode($jsonData);
      ?>
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
            <?php
            echo $data->title->ca;
            ?>
          <div class="mb-1 text-body-secondary">
          <?php
            $dt = $data->date;
            $dateFormatted = date("d/m/Y", $dt); 
            echo $dateFormatted; 
            ?>
          </div>
          <div class="row">
            <div class="card-text mb-auto col-8">
            <?php
            $description = $data->description->ca;

            // Si la longitud del contenido es mayor a 120 palabras, corta el contenido y añade puntos suspensivos
            if (str_word_count($description) > 120) {
              $words = str_word_count($description, 2);
              $pos = array_keys($words);
              $description = substr($description, 0, $pos[120]) . '...';
            }

            echo $description;
            echo $data->read_more->ca;
            ?>
            </div>
            <img class="news-img pt-2 col-4" src="<?php echo $data->image; ?>" alt="imatge noticia">
          </div>
        </div>
      </div>
    </div>

  </div>
</main>



<?php
includeTemplate('footer');
?>

<?php
includeTemplate('scripts');
?>
</body>
</html>
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

    <div class="filter mb-4 p-4 border rounded bg-dark text-light">
      <div class="row">
        <div class="filter-date col">
          <h5>Ordenar per data:</h5>
          <div class="input">
            <label for="dateNew">Més noves</label>
            <input type="radio" name="filter-date" id="dateNew" value="" checked>
          </div>
          <div class="input">
            <label for="dateOld">Més antigues</label>
            <input type="radio" name="filter-date" id="dateOld" value="">
          </div>
        </div>
  
        <div class="filter-title col">
          <h5>Ordenar per títol:</h5>
          <div class="input">
            <label for="dateNew">A - Z</label>
            <input type="radio" name="filter-title" id="dateNew" value="" checked>
          </div>
          <div class="input">
            <label for="dateOld">Z - A</label>
            <input type="radio" name="filter-title" id="dateOld" value="">
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-2">

    <?php
      // Importar datos Json
      $news=[];
      for($i = 1; $i <= 5; $i++) {
        $jsonData = file_get_contents('./api/noticies/post_'.$i.'.json');
        $data = json_decode($jsonData);
        $news[$i] = $data;
      }
  
    ?>
    
    <?php for ($i = 1; $i <= 5; $i++) : ?>
      <?php $data = $news[$i]; ?>
      <div class="col-12">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <?php echo $data->title->ca; ?>
            <div class="mb-1 text-body-secondary">
              <?php
              $dt = $data->date;
              $dateFormatted = date("d/m/Y", $dt);
              echo $dateFormatted;
              ?>
            </div>
            <div class="row">
              <div class="card-text mb-auto col-9">
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
              <img class="news-img pt-2 col-3" src="<?php echo $data->image; ?>" alt="imatge noticia">
            </div>
          </div>
        </div>
      </div>
    <?php endfor; ?>

  </div>
</main>



<?php
includeTemplate('footer');
includeTemplate('scripts');
?>

</body>
</html>
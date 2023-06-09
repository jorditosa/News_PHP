<?php
// Importar funcionalidades
include './includes/app.php';

include TEMPLATE_URL . 'includes/templates/head.php';

?>

<body>

<?php

// Recuperar Cookies de idioma e usuario
session_start();
$idioma = $_COOKIE['idioma_cookie'] ?? 'ca';
$user = $_COOKIE['username'] ?? false;
include TEMPLATE_URL . 'includes/templates/header.php';
?>

<main class="container">
  <h1 class="py-4">
    <?php echo $data->homeTitle->$idioma; ?>
  </h1>
  
  <form action="bloc.php" method="post" class="bg-dark text-light rounded-top p-4 d-flex align-items-center">
    <div class="filter-date col d-flex gap-4">
      <div class="input">
        <label for="dateNew">Més recents</label>
        <input type="radio" name="order-by" id="dateNew" value="dateNew">
      </div>
      <div class="input">
          <label for="dateOld">Més antigues</label>
          <input type="radio" name="order-by" id="dateOld" value="dateOld">
        </div>
      </div>
      
      <div class="filter-title col d-flex gap-4">
        <div class="input">
          <label for="titleAZ">A - Z</label>
          <input type="radio" name="order-by" id="titleAZ" value="titleAZ">
        </div>
        <div class="input">
          <label for="titleZA">Z - A</label>
          <input type="radio" name="order-by" id="titleZA" value="titleZA">
        </div>
      </div>
      
      <hr>
      
      <button type="submit" class="btn btn-light">Ordenar</button>
    </form>
    
    <div class="row my-2">
      <?php
      // Obtener el valor seleccionado del formulario
      $orderBy = $_POST['order-by'];
      
      // Importar datos Json
      $news=[];
      for($i = 1, $j = 0; $j < 5; $i++, $j++) {
        $jsonData = file_get_contents('./api/noticies/post_'.$i.'.json');
        $data = json_decode($jsonData);
        $news[$j] = $data;
      }    

      // Ordenar según la opción seleccionada
      if ($orderBy === 'dateNew') {
        usort($news, function($a, $b) {
          return $b->date - $a->date; // Orden de más nuevas a más antiguas
        });
      } elseif ($orderBy === 'dateOld') {
        usort($news, function($a, $b) {
          return $a->date - $b->date; // Orden de más antiguas a más nuevas
        });
      } elseif ($orderBy === 'titleAZ') {
          usort($news, function($a, $b) {
              return strcmp($a->title->ca, $b->title->ca); // Orden ascendente, de A a Z
          });
      } elseif ($orderBy === 'titleZA') {
          usort($news, function($a, $b) {
              return strcmp($b->title->ca, $a->title->ca); // Orden descendente, de Z a A
          });
      }
    ?>

    <?php for ($i = 0; $i < 5; $i++) : ?>
      <?php $data = $news[$i]; ?>
      <div class="col-12">
        <div class="row g-0 border rounded-bottom overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <?php echo $data->title->$idioma; ?>
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
                $description = $data->description->$idioma;

                // Si la longitud del contenido es mayor a 120 palabras, corta el contenido y añade puntos suspensivos
                if (str_word_count($description) > 120) {
                  $words = str_word_count($description, 2);
                  $pos = array_keys($words);
                  $description = substr($description, 0, $pos[120]) . '...';
                }

                echo $description;
                echo $data->read_more->$idioma;
                ?>
              </div>
              <img class="news-img pt-2 col-3" src="<?php echo BASE_URL . $data->image; ?>" alt="imatge noticia">
            </div>
          </div>
        </div>
      </div>
    <?php endfor; ?>

  </div>
</main>

<?php
    include TEMPLATE_URL . 'includes/templates/footer.php';
    include TEMPLATE_URL . 'includes/templates/scripts.php';
?>

</body>
</html>
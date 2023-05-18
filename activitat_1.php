<?php
require './includes/app.php';

include TEMPLATE_URL . 'includes/templates/head.php';

?>

<?php

// Recuperar Cookies de idioma e usuario
$idioma = $_COOKIE['idioma_cookie'] ?? 'ca';
$user = $_COOKIE['username'];

include TEMPLATE_URL . 'includes/templates/header.php';

$jsonData = file_get_contents('./api/noticies/post_1.json');
$data = json_decode($jsonData);

?>

<body>
    <div class="container pt-5">
        <?php
        echo $data->title->ca;
        echo "<br/>";
        echo $data->title->en;
        
        echo "<hr/>";
        
        echo $data->description->ca;
        echo "<br/>";
        echo $data->description->en;
        ?>
    </div>
    <?php
    include TEMPLATE_URL . 'includes/templates/footer.php';
    include TEMPLATE_URL . 'includes/templates/scripts.php';
    ?>
</body>
</html>

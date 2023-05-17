<?php
require './includes/functions.php';

includeTemplate('head');

?>

<?php

// Recuperar Cookies de idioma e usuario
session_start();
$idioma = $_COOKIE['idioma_cookie'] ?? 'ca';
$user = $_COOKIE['username'];

includeTemplate('header');

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
</body>
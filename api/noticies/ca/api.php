<?php

// Establecer las cabeceras para indicar que la respuesta es en formato JSON
header('Content-Type: application/json');

$news=array();
for($i = 1, $j = 0; $j < 5; $i++, $j++) {
    $jsonData = file_get_contents('../post_'.$i.'.json');
    $news[$j] = json_decode($jsonData);
}

// Convertir el arreglo en formato JSON
$json = json_encode($news);

echo $json;
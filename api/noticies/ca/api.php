<?php
// Idioma predeterminado
$idioma = 'ca';

// Establecer las cabeceras para indicar que la respuesta es en formato JSON
header('Content-Type: application/json');

$news=array();
for($i = 1, $j = 0; $j < 5; $i++, $j++) {
    $jsonData = file_get_contents('../post_'.$i.'.json');
    $data[$j] = json_decode($jsonData);

    // Montar el array con los valores del idioma seleccionado
    $news[$j] = array(
        'title' => $data[$j]->title->$idioma,
        'content' => $data[$j]->description->$idioma,
        'cta' => $data[$j]->read_more->$idioma,
    );    
}

// Convertir el arreglo en formato JSON
$json = json_encode($news);

echo $json;
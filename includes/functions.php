<?php

require 'app.php';

function includeTemplate( $name ) {
    include TEMPLATES_URL . $name . ".php";
}

// Funciones para los filtros
function compararPorFecha($a, $b) {
    $fechaA = strtotime($a->getAttribute('data-date'));
    $fechaB = strtotime($b->getAttribute('data-date'));
    return $fechaB - $fechaA;
}

function compararPorTitulo($a, $b) {
    $tituloA = $a->getAttribute('data-title');
    $tituloB = $b->getAttribute('data-title');
    return strcmp($tituloA, $tituloB);
}

?>
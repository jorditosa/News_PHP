<?php
require './includes/functions.php';
includeTemplate('head');
includeTemplate('header');

$jsonData = file_get_contents('./api/noticies/post_1.json');
$data = json_decode($jsonData);

echo $data->title->ca;
echo "<br/>";
echo $data->title->en;

echo "<hr/>";

echo $data->description->ca;
echo "<br/>";
echo $data->description->en;

?>
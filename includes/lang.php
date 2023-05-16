<?php
session_start();
$_SESSION['language'] = $_GET['l'] ?? 'ca';
header( "Location: /bloc.php")
?>
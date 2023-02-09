<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numMemb = $_POST['numMemb'];
$numArt = $_POST['numArt'];

sql_insert('LIKEART', 'numMemb, numArt',"'$numMemb', '$numArt'");

header('Location: ../../views/backend/likes/list.php');
?>
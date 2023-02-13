<?php

require_once __DIR__ . '/../../config.php';';

$numMemb = $_POST['numMemb'];
$numArt = $_POST['numArt'];

sql_insert('LIKEART', 'numMemb, numArt',"'$numMemb', '$numArt'");

header('Location: ../../views/backend/likes/list.php');
?>
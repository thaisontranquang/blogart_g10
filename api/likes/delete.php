<?php
require_once __DIR__ . '/../../config.php';;

$numMemb = $_POST['numMemb'];
$numArt = $_POST['numArt'];

sql_delete('LIKEART', "numMemb = $numMemb and numArt = $numArt");

header('Location: ../../views/backend/likes/list.php');

?>
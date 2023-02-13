<?php

require_once $__DIR__ . '/../../config.php';

$numMemb = $_POST['numMemb'];
$numArt = $_POST['numArt'];
$likeA = $_POST['likeA'];


sql_update('LIKEART',"numArt = '$numArt', likeA = '$likeA'","numMemb = $numMemb");
header('Location: ../../views/backend/likes/list.php');

?>
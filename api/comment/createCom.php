<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$libCom = sql_escape($_POST['libCom']);
$numMemb = $_POST['numMemb'];
$numArt = $_POST['numArt'];

sql_insert('COMMENT', 'libCom, numArt, numMemb',"'$libCom', '$numArt', $numMemb");

header('Location: ../../views/frontend/article.php?numArt=' . $numArt);
?>
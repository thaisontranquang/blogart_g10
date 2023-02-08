<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$ibCom = sql_escape($_POST['libCom']);
$numArt = $_POST['numArt'];

sql_insert('COMMENT', 'libCom, numArt, numMemb',"'$ibCom', '$numArt', 1");

header('Location: ../../views/backend/comment/list.php');
?>
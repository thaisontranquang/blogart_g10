<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$ibCom = sql_escape($_POST['libCom']);
$numArt = $_POST['numArt'];

sql_insert('COMMENT', 'libCom, numArt',"'$ibCom', '$numArt'");

header('Location: ../../views/backend/comment/list.php');
?>
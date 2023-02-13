<?php

require_once __DIR__ . '/../../config.php';;

$libCom = sql_escape($_POST['libCom']);
$numArt = $_POST['numArt'];

sql_insert('COMMENT', 'libCom, numArt, numMemb',"'$libCom', '$numArt', 1");

header('Location: ../../views/backend/comment/list.php');
?>
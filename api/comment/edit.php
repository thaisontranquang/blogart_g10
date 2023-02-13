<?php

require_once __DIR__ . '/../../config.php';;

$numCom = $_POST['numCom'];
$libCom = sql_escape($_POST['libCom']);
$attModOk = $_POST['attModOk'];
$notifComKOAff = sql_escape($_POST['notifComKOAff']);
$numArt = $_POST['numArt'];
$numMemb = $_POST['numMemb'];
$dtModCom = $_POST['dtModCom'];

sql_update('COMMENT', "libCom = '$libCom', attModOk = '$attModOk', notifComKOAff = '$notifComKOAff', numArt = '$numArt', numMemb ='$numMemb', dtModCom = '$dtModCom'", "numCom = $numCom");
header('Location: ../../views/backend/comment/list.php');

?>
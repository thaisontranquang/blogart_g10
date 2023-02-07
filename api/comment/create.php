<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$dtCreCom = $_POST['dtCreCom'];
$ibCom = $_POST['libCom'];
$attModOk = $_POST['attModOk'];
$dtModCom = $_POST['dtModCom'];
$notifCommKOAff = $_POST['notifCommKOAff'];
$numArt = $_POST['numArt'];
$numMemb = $_POST['numMemb'];

sql_insert('COMMENT', 'dtCreCom, libCom, attModOk, dtModCom, notifCommKOAff, numArt, numMemb ',"'$dtCreCom', '$ibCom','$attModOk', '$dtModCom','$notifCommKOAff', $numArt, $numMemb");

header('Location: ../../views/backend/comment/list.php');
?>
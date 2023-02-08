<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$dtCreCom = $_POST['dtCreCom'];
$ibCom = sql_escape($_POST['libCom']);
$attModOk = $_POST['attModOk'];
$notifCommKOAff = sql_escape($_POST['notifCommKOAff']);
$numArt = $_POST['numArt'];
$numMemb = $_POST['numMemb'];

sql_insert('COMMENT', 'dtCreCom, libCom, attModOk, notifCommKOAff, numArt, numMemb ',"'$dtCreCom', '$ibCom','$attModOk','$notifCommKOAff', $numArt, $numMemb");

header('Location: ../../views/backend/comment/list.php');
?>
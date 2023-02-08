<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$ibCom = sql_escape($_POST['libCom']);
$attModOk = $_POST['attModOk'];
$notifComKOAff = sql_escape($_POST['notifComKOAff']);
$numArt = $_POST['numArt'];
$numMemb = $_POST['numMemb'];

sql_update('COMMENT', ' libCom, attModOk, notifComKOAff, numArt, numMemb ',"'$ibCom','$attModOk','$notifComKOAff', $numArt, $numMemb");

header('Location: ../../views/backend/comment/list.php');

?>
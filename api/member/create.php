<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$prenomMemb = sql_escape($_POST['prenomMemb']);
$nomMemb = sql_escape($_POST['nomMemb']);
$pseudoMemb = sql_escape($_POST['pseudoMemb']);
$passMemb = sql_escape($_POST['passMemb']);
$eMailMemb = sql_escape($_POST['eMailMemb']);
$numStat = sql_escape($_POST['numStat']);

sql_insert('MEMBRE', 'prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, numStat',"'$prenomMemb', '$nomMemb','$pseudoMemb', '$passMemb','$eMailMemb', 3");

header('Location: ../../views/backend/member/list.php');
?>
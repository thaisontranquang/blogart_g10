<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$prenomMemb = $_POST['prenomMemb'];
$nomMemb = $_POST['nomMemb'];
$pseudoMemb = $_POST['pseudoMemb'];
$passMemb = $_POST['passMemb'];
$eMailMemb = $_POST['eMailMemb'];
$numStat = $_POST['numStat'];

sql_insert('MEMBRE', 'prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, numStat',"'$prenomMemb', '$nomMemb','$pseudoMemb', '$passMemb','$eMailMemb', 3");

header('Location: ../../views/backend/member/list.php');
?>
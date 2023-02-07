<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$prenomMemb = $POST['prenomMemb'];
$nomMemb = $POST['nomMemb'];
$pseudoMemb = $POST['pseudoMemb'];
$passMemb = $POST['passMemb'];
$eMailMemb = $POST['eMailMemb'];
$dtCreaMemb = $POST['dtCreaMemb'];
$numStat = $POST['numStat'];

sql_update('MEMBRE', "prenomMemb = '$prenomMemb'", "nomMemb = $nomMemb", "pseudoMemb = '$pseudoMemb'","eMailMemb = '$eMailMemb", "numStat = $numStat");


header('Location: ../../views/backend/member/list.php');

?>
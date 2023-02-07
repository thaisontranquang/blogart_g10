<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$prenomMemb = $_POST['prenomMemb'];
$nomMemb = $_POST['nomMemb'];
$pseudoMemb = $_POST['pseudoMemb'];
$passMemb = $_POST['passMemb'];
$eMailMemb = $_POST['eMailMemb'];


sql_update('STATUT', "prenomMemb = '$prenomMemb'", "nomMemb = $nomMemb", "pseudoMemb = '$pseudoMemb'","eMailMemb = '$eMailMemb");


header('Location: ../../views/backend/member/list.php');
?>
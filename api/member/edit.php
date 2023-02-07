<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numMemb = $_POST['numMemb'];
$prenomMemb = $_POST['prenomMemb'];
$nomMemb = $_POST['nomMemb'];
$pseudoMemb = $_POST['pseudoMemb'];
$passMemb = $_POST['passMemb'];
$eMailMemb = $_POST['eMailMemb'];


sql_update('MEMBRE',"prenomMemb = '$prenomMemb', nomMemb = '$nomMemb', pseudoMemb = '$pseudoMemb',eMailMemb = '$eMailMemb', passMemb ='$passMemb'","numMemb = '$numMemb'");


header('Location: ../../views/backend/member/list.php');

?>
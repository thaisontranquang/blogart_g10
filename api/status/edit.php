<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numStat = $_POST['numStat'];
$libStat = $_POST['libStat'];

sql_update('STATUT', "libStat = '$libStat'", "numstat = $numStat");


header('Location: ../../views/backend/status/list.php');
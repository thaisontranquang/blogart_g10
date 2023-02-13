<?php
require_once __DIR__ . '/../../config.php';

$numStat = sql_escape($_POST['numStat']);
$libStat = sql_escape($_POST['libStat']);

sql_update('STATUT', "libStat = '$libStat'", "numstat = $numStat");


header('Location: ../../views/backend/status/list.php');

?>
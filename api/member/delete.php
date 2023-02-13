<?php
require_once __DIR__ . '/../../config.php';

$numMemb = $_POST['numMemb'];

sql_delete('COMMENT', "numMemb = $numMemb");
sql_delete('LIKEART', "numMemb = $numMemb");
sql_delete('MEMBRE', "numMemb = $numMemb");

header('Location: ../../views/backend/member/list.php');

?>
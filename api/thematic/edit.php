<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numThem = $_POST['numThem'];
$libThem = $_POST['libThem'];

sql_update('THEMATIQUE', "libThem = '$libThem'", "numThem = $numThem");


header('Location: ../../views/backend/thematic/list.php');

?>
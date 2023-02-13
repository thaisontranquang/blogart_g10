<?php
require_once __DIR__ . '/../../config.php';;

$numThem = sql_escape($_POST['numThem']);
$libThem = sql_escape($_POST['libThem']);

sql_update('THEMATIQUE', "libThem = '$libThem'", "numThem = $numThem");


header('Location: ../../views/backend/thematic/list.php');

?>
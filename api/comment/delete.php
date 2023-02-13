<?php
require_once __DIR__ . '/../../config.php';

$numCom = $_POST['numCom'];

sql_delete('COMMENT', "numCom = $numCom",);

header('Location: ../../views/backend/comment/list.php');

?>
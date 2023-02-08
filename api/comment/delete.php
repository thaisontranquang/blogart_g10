<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numCom = $_POST['numCom'];

sql_delete('COMMENT', "numCom = $numCom",);

header('Location: ../../views/backend/comment/list.php');

?>
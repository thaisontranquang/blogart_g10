<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$numArt = $_POST['numArt'];
sql_delete('ARTICLE', "numArt = $numArt");
header('Location: ../../views/backend/article/list.php');
<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$numArt = sql_escape($_POST['numArt']);
sql_delete('MOTCLEARTICLE', "numArt = $numArt");
sql_delete('LIKEART', "numArt = $numArt");
sql_delete('COMMENT', "numArt = $numArt");
sql_delete('ARTICLE', "numArt = $numArt");
header('Location: ../../views/backend/article/list.php');
<?php

require_once __DIR__ . '/../../config.php';;
$numArt = sql_escape($_POST['numArt']);
sql_delete('ARTICLE', "numArt = $numArt");
header('Location: ../../views/backend/article/list.php');
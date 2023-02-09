<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$numMotCle = sql_escape($_POST['numMotCle']);
$libMotCle = sql_escape($_POST['libMotCle']);
sql_update('MOTCLE', "libMotCle = '$libMotCle'", "numMotCle = $numMotCle");
header('Location: ../../views/backend/keyword/list.php');
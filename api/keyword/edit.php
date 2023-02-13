<?php

require_once __DIR__ . '/../../config.php';
$numMotCle = sql_escape($_POST['numMotCle']);
$libMotCle = sql_escape($_POST['libMotCle']);
sql_update('MOTCLE', "libMotCle = '$libMotCle'", "numMotCle = $numMotCle");
header('Location: ../../views/backend/keyword/list.php');
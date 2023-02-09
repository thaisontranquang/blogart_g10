<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$numMotCle = sql_escape($_POST['numMotCle']);
sql_delete('MOTCLE', "numMotCle = $numMotCle");
header('Location: ../../views/backend/keyword/list.php');
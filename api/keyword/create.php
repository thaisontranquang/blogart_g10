<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$libMotCle = sql_escape($_POST['libMotCle']);
sql_insert('MOTCLE', 'libMotCle',"'$libMotCle'");
header('Location: ../../views/backend/keyword/create.php');
?>
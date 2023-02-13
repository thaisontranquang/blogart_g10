<?php

require_once __DIR__ . '/../../config.php';

$libStat = sql_escape($_POST['libStat']);

sql_insert('STATUT', 'libStat',"'$libStat'");

header('Location: ../../views/backend/status/list.php');
?>
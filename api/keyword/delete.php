<?php

require_once __DIR__ . '/../../config.php';;
$numMotCle = sql_escape($_POST['numMotCle']);
sql_delete('MOTCLE', "numMotCle = $numMotCle");
header('Location: ../../views/backend/keyword/list.php');
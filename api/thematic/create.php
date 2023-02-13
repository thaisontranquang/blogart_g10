<?php

require_once __DIR__ . '/../../config.php';

$libThem = sql_escape($_POST['libThem']);

sql_insert('THEMATIQUE', 'libThem', "'$libThem'");

header('Location: ../../views/backend/thematic/list.php');
?>
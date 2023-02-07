<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$libTitrArt = $_POST['libTitrArt'];
sql_insert('ARTICLE', 'libTitrArt', "'$libTitrArt'");
header('Location: ../../views/backend/article/list.php');
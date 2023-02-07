<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$numArt = $_POST['numArt'];
$libTitrArt = $_POST['libTitrArt'];
sql_update('ARTICLE', "libTitrArt = '$libTitrArt'", "numArt = $numArt");
header('Location: ../../views/backend/article/list.php');
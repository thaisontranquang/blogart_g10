<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$numArt = sql_escape($_POST['numArt']);
$libTitrArt = sql_escape($_POST["libTitrArt"]);
$libChapoArt = sql_escape($_POST["libChapoArt"]);
$libAccrochArt = sql_escape($_POST["libAccrochArt"]);
$parag1Art = sql_escape($_POST["parag1Art"]);
$libSsTitr1Art = sql_escape($_POST["libSsTitr1Art"]);
$parag2Art = sql_escape($_POST["parag2Art"]);
$libSsTitr2Art = sql_escape($_POST["libSsTitr2Art"]);
$parag3Art = sql_escape($_POST["parag3Art"]);
$libConclArt = sql_escape($_POST["libConclArt"]);
$numThem = sql_escape($_POST["numThem"]);


sql_update('ARTICLE', "libTitrArt = '$libTitrArt', libChapoArt = '$libChapoArt', libAccrochArt = '$libAccrochArt', parag1Art = '$parag1Art', libSsTitr1Art = '$libSsTitr1Art', parag2Art = '$parag2Art', libSsTitr2Art = '$libSsTitr2Art', parag3Art = '$parag3Art', libConclArt = '$libConclArt', urlPhotArt = '$urlPhotArt', numThem = '$numThem'", "numArt = $numArt");
header('Location: ../../views/backend/article/list.php');

?>
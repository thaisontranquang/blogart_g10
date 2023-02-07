<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$numArt = $_POST['numArt'];
$libTitrArt = $_POST["libTitrArt"];
$libChapoArt = $_POST["libChapoArt"];
$parag1Art = $_POST["parag1Art"];
$libSsTitr1Art = $_POST["libSsTitr1Art"];
$parag2Art = $_POST["parag2Art"];
$libSsTitr2Art = $_POST["libSsTitr2Art"];
$parag3Art = $_POST["parag3Art"];
$libConclArt = $_POST["libConclArt"];
$urlPhotArt = $_POST["urlPhotArt"];
sql_update('ARTICLE', "libTitrArt = '$libTitrArt', libChapoArt = '$libChapoArt', parag1Art = '$parag1Art', libSsTitr1Art = '$libSsTitr1Art', parag2Art = '$parag2Art', libSsTitr2Art = '$libSsTitr2Art', parag3Art = '$parag3Art', libConclArt = '$libConclArt', urlPhotArt = '$urlPhotArt', numThem = '1'", "numArt = $numArt");
header('Location: ../../views/backend/article/list.php');

?>
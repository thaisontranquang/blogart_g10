<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$libTitrArt = $_POST["libTitrArt"];
$libChapoArt = $_POST["libChapoArt"];
$parag1Art = $_POST["parag1Art"];
$libSsTitr1Art = $_POST["libSsTitr1Art"];
$parag2Art = $_POST["parag2Art"];
$libSsTitr2Art = $_POST["libSsTitr2Art"];
$parag3Art = $_POST["parag3Art"];
$libConclArt = $_POST["libConclArt"];
$urlPhotArt = $_POST["urlPhotArt"];
sql_insert('ARTICLE', 'libTitrArt, libChapoArt, parag1Art, libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt, numThem', "'$libTitrArt','$libChapoArt','$parag1Art','$libSsTitr1Art','$parag2Art','$libSsTitr2Art','$parag3Art','$libConclArt','$urlPhotArt','1'");
header('Location: ../../views/backend/article/list.php');
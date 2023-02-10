<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$libTitrArt = sql_escape($_POST["libTitrArt"]);
$libChapoArt = sql_escape($_POST["libChapoArt"]);
$parag1Art = sql_escape($_POST["parag1Art"]);
$libSsTitr1Art = sql_escape($_POST["libSsTitr1Art"]);
$parag2Art = sql_escape($_POST["parag2Art"]);
$libSsTitr2Art = sql_escape($_POST["libSsTitr2Art"]);
$parag3Art = sql_escape($_POST["parag3Art"]);
$libConclArt = sql_escape($_POST["libConclArt"]);
$numThem = sql_escape($_POST["numThem"]);



sql_insert('ARTICLE', 'libTitrArt, libChapoArt, parag1Art, libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, numThem', "'$libTitrArt','$libChapoArt','$parag1Art','$libSsTitr1Art','$parag2Art','$libSsTitr2Art','$parag3Art','$libConclArt','$numThem'");

$numArt = sql_select('ARTICLE', 'numArt', "libTitrArt = '$libTitrArt'")[0]['numArt'];
if (isset($_POST['submit'])) {
  $checked = 0;
  $keywords = $_POST['keyword'];
  foreach ($keywords as $keyword) {
    if (isset($keyword)) {
        $checked++;
        sql_insert('MOTCLEARTICLE', 'numMotCle, numArt', "'$keyword','$numArt'");
    }
  }
  echo "Number of checked keywords: " . $checked;
  echo "Number of checked keywords: " . $keyword;
}

header('Location: ../../views/backend/article/list.php');


exit();


    $selected = $_POST['numMotCle'];
    var_dump($selected);
    foreach ($selected as $value) {
    }



    if(isset($_FILES)) {
        $path = upload_image($_FILES);
        }
        $urlPhotArt = sql_escape($path);







header('Location: ../../views/backend/article/list.php');




$numArt = sql_select('ARTICLE', 'numArt', "libTitrArt = '$libTitrArt'")[0]['numArt'];
$numMotCles = $_POST['numMotCle'];
var_dump($numMotCles);

foreach ($numMotCles as $numMotCle) {
   sql_insert('MOTCLEARTICLE', 'numMotCle, numArt', "$numMotCle,$numArt");
}
exit;

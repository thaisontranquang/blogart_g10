<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$eMailMemb = $_POST['eMailMemb'];
$passMemb = $_POST['passMemb'];

$verification = sql_select('MEMBRE', "passMemb", "eMailMemb = '$eMailMemb'")[0]['passMemb'];

if ($verification == $passMemb) {
    header('Location: ../../views/frontend/login_register.php');
} else {
    header('Location: ../../views/frontend/all_articles.php');
}

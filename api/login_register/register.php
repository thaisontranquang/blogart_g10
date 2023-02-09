<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$eMailMemb = $_POST['eMailMemb'];
$passMemb = $_POST['passMemb'];

$verification = sql_select('MEMBRE', "passMemb", "eMailMemb = '$eMailMemb'")[0]['passMemb'];

if ($verification == $passMemb) {
    $numStat = sql_select('MEMBRE', "numStat", "eMailMemb = '$eMailMemb'")[0]['numStat'];
    if ($numStat == 1 || $numStat == 2) {
        if ($numStat == 1) {
            // l'utilisateur est admin
        }
        if ($numStat == 2) {
            // l'utilisateur est modo
        }
    } else {
        // l'utilisateur n'est ni modo ni admin
    }
} else {
    // l'utilisateur n'a pas été reconnu
}

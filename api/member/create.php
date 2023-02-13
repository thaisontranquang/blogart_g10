<?php

require_once __DIR__ . '/../../config.php';;

$prenomMemb = sql_escape($_POST['prenomMemb']);
$nomMemb = sql_escape($_POST['nomMemb']);
$pseudoMemb = sql_escape($_POST['pseudoMemb']);
$passMemb = sql_escape($_POST['passMemb']);
$hashedPassword = password_hash($passMemb, PASSWORD_BCRYPT);
$eMailMemb = sql_escape($_POST['eMailMemb']);
$numStat = sql_escape($_POST['numStat']);

$checkMails = sql_select('MEMBRE', "eMailMemb");

foreach($checkMails as $checkMail){
    if($checkMail['eMailMemb'] == $eMailMemb){
        header('Location: ../../views/backend/member/error.php');
        exit();
} else{
    sql_insert('MEMBRE', 'prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, numStat',"'$prenomMemb', '$nomMemb','$pseudoMemb', '$hashedPassword','$eMailMemb', 3");
    header('Location: ../../views/backend/member/list.php');
    exit();
    ?>
    <?php
} 
}
?>
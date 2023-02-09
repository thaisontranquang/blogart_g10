<?php require_once '../../header.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$nameMemb = sql_escape($_POST['nameMemb']);
$surnameMemb = sql_escape($_POST['surnameMemb']);
$pseudoMemb = sql_escape($_POST['pseudoMemb']);
$eMailMemb = sql_escape($_POST['eMailMemb']);
$passMemb = sql_escape($_POST['passMemb']);
$hashedPassword = password_hash($passMemb, PASSWORD_BCRYPT);

$checkMails = sql_select('MEMBRE', "eMailMemb");

foreach($checkMails as $checkMail){
    if($checkMail['eMailMemb'] == $eMailMemb){
        header('Location: ../../views/frontend/register-error.php');
exit();
} else{
    sql_insert('MEMBRE', 'prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, numStat', "'$surnameMemb', '$nameMemb','$pseudoMemb', '$hashedPassword','$eMailMemb', 3");
    header('Location: ../../views/frontend/register-success.php');
    exit();
    ?>
    <?php
} 
}



/* if ($verification == $passMemb) {
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
} */

?>


<?php require_once '../../footer.php'; ?>
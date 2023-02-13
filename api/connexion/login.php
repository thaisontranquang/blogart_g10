<?php
require_once '../../header.php';

require_once __DIR__ . '/../../config.php';

$eMailMemb = sql_escape($_POST['eMailMemb']);
$passMemb =  $_POST['passMemb'];
$correctPassMemb = sql_select('MEMBRE', 'passMemb', "eMailMemb = '$eMailMemb'")[0]['passMemb'];

if (password_verify($passMemb, $correctPassMemb)) { 
    $member = sql_select('MEMBRE', '*', "eMailMemb = '$eMailMemb'")[0];
    $_SESSION["numMemb"] = $member['numMemb'];
    $_SESSION['pseudoMemb'] = $member['pseudoMemb'];
    $_SESSION['numStat'] = $member['numStat'];
    ?>

    <?php
    header('Location: ../../index.php');
} else {
    ?>

<p>connexion échouée</p>

    <?php
}

require_once '../../footer.php';

?>


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

<section class="register">
<p>Connexion échouée <br>
<a href="../../login.php" class="btn">Réessayer ?<img src="/src/images/chevron_right_FILL0_wght400_GRAD0_opsz48.svg" alt="Réessayer de se connecter ?"></a>
</p>
</section>
    <?php
}

require_once '../../footer.php';

?>


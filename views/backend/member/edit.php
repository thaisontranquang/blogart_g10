<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */
$numMemb = $_GET['numMemb'];
$prenomMemb = $GET['prenomMemb'];
$nomMemb = $GET['nomMemb'];
$pseudoMemb = $GET['pseudoMemb'];
$passMemb = $GET['passMemb'];
$eMailMemb = $GET['eMailMemb'];
$dtCreaMemb = $GET['dtCreaMemb'];
$numStat = $GET['numStat'];

sql_select('MEMBRE', "numMemb = $numMemb", "prenomMemb = '$prenomMemb'", "nomMemb = $nomMemb", "pseudoMemb = '$pseudoMemb'","eMailMemb = '$eMailMemb", "numStat = $numStat");


$prenomMemb = sql_select("MEMBRE", "prenomMemb", "numMemb = $numMemb")[0]['prenomMemb'];
$nomMemb = sql_select("MEMBRE", "nomMemb", "numMemb = $numMemb")[0]['nomMemb'];
/* $pseudoMemb 
$passMemb 
$eMailMemb 
$dtCreaMemb 
$numStat  */

?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Member</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/member/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="prenoMembStat">prenomMemb</label>
                    <input id="numMemb" class="form-control" style="display: none" type="text" name="numMemb" value="<?php echo($numMemb) ?>" readonly="readonly">
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb" value="<?php echo($prenomMemb) ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm edit ?</button>
                </div>
            </form>
        </div>
    </div>
</div>
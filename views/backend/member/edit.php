<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numMemb = $_GET['numMemb'];
$pseudoMemb = sql_select("MEMBRE","pseudoMemb", "numMemb = $numMemb")[0]['pseudoMemb'];

?>

<!--Bootstrap form to delete a member-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Member</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete a member-->
            <form action="<?php echo ROOT_URL . '/api/member/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="pseudoMemb">Membre</label>
                    <input id="numMemb" class="form-control" style="display:none" type="text" name="numMemb" value="<?php echo($numMemb) ?>" readoly="readonly">
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb" value="<?php echo($prenomMemb) ?>">
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb" value="<?php echo($nomMemb) ?>">
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" value="<?php echo($pseudoMemb) ?>">
                    <input id="eMailMemb" class="form-control" type="text" name="eMailMemb" value="<?php echo($eMailMemb) ?>">
                    <input id="passMemb" class="form-control" type="text" name="passMemb" value="<?php echo($passMemb) ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm editing ?</button>
                </div>
            </form>
        </div>
    </div>
</div>
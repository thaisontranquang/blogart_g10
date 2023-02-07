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
$prenomMemb = sql_select("MEMBRE","prenomMemb", "numMemb = $numMemb")[0]['prenomMemb'];
$nomMemb = sql_select("MEMBRE","nomMemb", "numMemb = $numMemb")[0]['nomMemb'];
$eMailMemb = sql_select("MEMBRE","eMailMemb", "numMemb = $numMemb")[0]['eMailMemb'];
$passMemb = sql_select("MEMBRE","passMemb", "numMemb = $numMemb")[0]['passMemb'];

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
                    
                    <label for="prenomMemb">Prénom</label>
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb" value="<?php echo($prenomMemb) ?>">
                    
                    <label for="nomMemb">Nom</label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb" value="<?php echo($nomMemb) ?>">
                    
                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" value="<?php echo($pseudoMemb) ?>">
                   
                    <label for="eMailMemb">Email</label>
                    <input id="eMailMemb" class="form-control" type="text" name="eMailMemb" value="<?php echo($eMailMemb) ?>">
                    
                    <label for="passMemb">Password</label>
                  
                    <input id="passMemb" class="form-control" type="text" name="passMemb" value="<?php echo($passMemb) ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm editing ?</button>
                </div>
            </form>
        </div>
    </div>
</div>
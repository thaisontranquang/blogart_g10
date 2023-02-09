<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} 

$numMemb = $_GET['numMemb'];
$numArt = sql_select("LIKEART","numArt", "numMemb = $numMemb")[0]['numArt'];
$numMemb = sql_select("LIKEART", "numMemb", "numMemb = $numMemb")[0]['numMemb'];

?>

<!--Bootstrap form to delete a member-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer ce like</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete a member-->
            <form action="<?php echo ROOT_URL . '/api/likes/delete.php' ?>" method="post">
                <div class="form-group">
                <div class="form-group">
                    <label for="numMemb">N° membre</label>
                    <input id="numMemb" class="form-control" value ="<?php echo ($numMemb)?>" type="text" name="numMemb" readonly>
                </div> 
                <div class="form-group">
                    <label for="numArt">N° de l'article</label>
                    <input id="numArt" class="form-control" value="<?php echo ($numArt)?>" type="text" name="numArt" readonly>
                </div> 
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer la suppression ?</button>
                </div>
            </form>
        </div>
    </div>
</div>
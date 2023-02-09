<?php
include '../../../header.php';

//Security check
//Level 1 mean administator in DB
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
} 

$numCom = $_GET['numCom'];
$libCom = sql_select("COMMENT","libCom", "numCom = $numCom")[0]['libCom'];
$numArt = sql_select("COMMENT","numArt", "numCom = $numCom")[0]['numArt'];
$numMemb = sql_select("COMMENT","numMemb", "numCom = $numCom")[0]['numMemb'];

?>

<!--Bootstrap form to delete a member-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer ce commentaire</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete a member-->
            <form action="<?php echo ROOT_URL . '/api/comment/delete.php' ?>" method="post">
                <div class="form-group">
                    <input id="numCom" class="form-control" style="display:none" type="text" name="numCom" value="<?php echo($numCom) ?>" readonly="readonly">
                    <label for="libCom">Commentaire</label>
                    <input id="libCom" class="form-control" type="text" name="libCom" value="<?php echo($libCom) ?>" readonly="readonly">
                    <label for="numArt">N° d'article</label>
                    <input id="numArt" class="form-control" type="text" name="numArt" value="<?php echo($numArt) ?>" readonly="readonly">
                    <input id="numMemb" class="form-control" type="text" name="numMemb" value="<?php echo($numMemb) ?>" hidden>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer la suppression ?</button>
                </div>
            </form>
        </div>
    </div>
</div>
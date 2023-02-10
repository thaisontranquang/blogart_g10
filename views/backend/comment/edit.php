<?php
include '../../../header.php';

//Security check
//Level 1 mean administator in DB
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
}

$numCom = sql_escape($_GET['numCom']);

$libCom = sql_select("COMMENT", "libCom", "numCom = $numCom")[0]['libCom'];
$numArt = sql_select("COMMENT", "numArt", "numCom = $numCom")[0]['numArt'];
$numMemb = sql_select("COMMENT", "numMemb", "numCom = $numCom")[0]['numMemb'];
$attModOK = sql_select("COMMENT", "attModOK", "numCom = $numCom")[0]['attModOK'];
$notifComKOAff = sql_select("COMMENT", "notifComKOAff", "numCom = $numCom")[0]['notifComKOAff'];
$dtModCom = sql_select("COMMENT", "dtModCom", "numCom = $numCom")[0]['dtModCom'];


?>

<!--Bootstrap form to edit a commentary-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Editer un commentaire</h1>
        </div>
        <div class="col-md-12">
            <!--Form to edit a commentary -->
            <form action="<?php echo ROOT_URL . '/api/comment/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="libCom">Editez un commentaire</label>
                    <input id="libCom" class="form-control" type="text" placeholder="Ecrivez votre commentaire" name="libCom" value="<?php echo $libCom ?>" required>
                    <input id="numCom" class="form-control" style="display: none" type="text" value="<?php echo $numCom ?>" name="numCom" readonly="readonly">
                    <input id="dtModCom" class="form-control" style="display: none" type="text" value="<?php echo date('y-m-d h:i:s') ?>" name="dtModCom">
                    <label for="attModOk">Validation du commentaire:</label>
                    <br>
                    <select name="attModOk" id="attModOk">
                        <option value="">--Choisir option--</option>
                        <option value="1">Validation</option>
                        <option value="0">Refus</option>
                    </select><br>
                    <label for="notifComKOAff">Commentaire modérateur</label>
                    <input id="notifComKOAff" class="form-control" type="text" name="notifComKOAff" placeholder="Entrez votre commentaire">
                    <label for="numArt">Numéro de l'article</label>
                    <input id="numArt" class="form-control" type="number" name="numArt" value="<?php echo $numArt ?>" required>
                    <label for="numMemb">Numéro du membre ayant écrit le commentaire</label>
                    <input id="numMemb" class="form-control" type="number" name="numMemb" value="<?php echo $numMemb ?>" readonly="readonly"><br>
                    <button type="submit" class="btn btn-primary">Modifier le commentaire</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';
?>
<?php
include '../../../header.php';

//Security check
//Level 1 mean administator in DB
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
} 

$numCom = sql_escape($_GET['numCom']);

$libCom = sql_select("COMMENT","libCom", "numCom = $numCom")[0]['libCom'];
$numArt = sql_select("COMMENT","numArt", "numCom = $numCom")[0]['numArt'];
$numMemb = sql_select("COMMENT","numMemb", "numCom = $numCom")[0]['numMemb'];
$attModOK =sql_select("COMMENT","attModOK", "numCom = $numCom")[0]['attModOK'];
$notifComKOAff = sql_select("COMMENT","notifComKOAff", "numCom = $numCom")[0]['notifComKOAff'];
$dtModCom = sql_select("COMMENT","dtModCom", "numCom = $numCom")[0]['dtModCom'];


?>

<!--Bootstrap form to edit a commentary-->
    <div class="row">
        <div class="col-md-12">
            <h1>Editer un commentaire</h1>
        </div>
        <div class="col-md-12">
            <!--Form to edit a commentary -->
            <form action="<?php echo ROOT_URL . '/api/comment/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="libCom">Editez un commentaire</label>
                    <input id="libCom" class="form-control" type="text" placeholder="Ecrivez votre commentaire" name="libCom" required>
                    <input id="numCom" class="form-control" style ="display : none" type="text" value = "<?php echo $numCom ?>" name="numCom">
                    <input id="dtModCom" class="form-control" style ="display : none" type="text" value = "<?php echo $dtModCom ?>" name="dtModCom">

                </div> 

                <div class="form-group">
                    <fieldset>
                        <legend>Validation modérateur</legend>
                            <div>
                                <input type="radio" id="Validation" name="attModOk" required>
                                <label for="Validation">Validation</label>
                            </div>
                            <div>
                                <input type="radio" id="Refus" name="attModOk" required>
                                <label for="Refus">Refus</label>
                            </div>
                    </fieldset>

                </div>
                <div class="form-group">
                    <label for="notifComKOAff">Commentaire modérateur</label>
                    <input id="notifComKOAff" class="form-control" type="text" name="notifComKOAff" placeholder="Entrez votre commentaire">
                </div>
                <div class="form-group">
                    <label for="numArt">Numéro de l'article</label>
                    <input id="numArt" class="form-control" type="number" name="numArt" placeholder="Entrez le numéro d'article" required>
                </div>
                </div>
                <div class="form-group">
                    <label for="numMemb">Numéro du membre ayant écrit le commentaire</label>
                    <input id="numMemb" class="form-control" type="number" name="numMemb" placeholder="Entrez le numéro de membre"  required>
                </div>

                <div class="container">
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Modifier le commentaire</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include '../../../footer.php';
?> // contains the footer
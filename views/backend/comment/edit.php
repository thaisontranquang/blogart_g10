<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

/* $numMemb = $_GET['numMemb'];

$pseudoMemb = sql_select("MEMBRE","pseudoMemb", "numMemb = $numMemb")[0]['pseudoMemb'];
$prenomMemb = sql_select("MEMBRE","prenomMemb", "numMemb = $numMemb")[0]['prenomMemb'];
$nomMemb = sql_select("MEMBRE","nomMemb", "numMemb = $numMemb")[0]['nomMemb'];
$eMailMemb = sql_select("MEMBRE","eMailMemb", "numMemb = $numMemb")[0]['eMailMemb'];
$passMemb = sql_select("MEMBRE","passMemb", "numMemb = $numMemb")[0]['passMemb'];
$numStat = sql_select("MEMBRE","numStat", "numMemb = $numMemb")[0]['numStat']; */

?>

<!--Bootstrap form to edit a commentary-->
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un nouveau commentaire</h1>
        </div>
        <div class="col-md-12">
            <!--Form to edit a commentary -->
            <form action="<?php echo ROOT_URL . '/api/comment/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libCom">Ecrivez votre commentaire</label>
                    <input id="libCom" class="form-control" type="text" placeholder="Ecrivez votre commentaire" name="libCom" required>
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
                    <input id="notifComKOAff" class="form-control" type="text" name="notifComKOAff" placeholder="Entrez votre commentaire" required>
                </div>
                <div class="form-group">
                    <label for="numArt">Numéro de l'article</label>
                    <input id="numArt" class="form-control" type="text" name="numArt" placeholder="Entrez le numéro d'article" required>
                </div>
                <div class="form-group">
                    <label for="numMemb">Numéro du membre ayant écrit le commentaire</label>
                    <input id="numMemb" class="form-control" type="text" name="numMemb" placeholder="Entrez le numéro de membre"  required>
                </div>

                <div class="container">
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Modifier le commentaire</button>
                </div>
            </form>
        </div>
    </div>
</div>
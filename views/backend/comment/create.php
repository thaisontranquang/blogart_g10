<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numMemb = $_GET['numMemb'];
?>



<!--Bootstrap form to create a new member-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un nouveau commentaire</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new member-->
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
                    <label for="notifCommKOAff">Commentaire modérateur</label>
                    <input id="notifCommKOAff" class="form-control" type="text" name="notifCommKOAff" placeholder="Entrez votre commentaire" required>
                </div>
                <div class="form-group">
                    <label for="numArt">Numéro de l'article</label>
                    <input id="numArt" class="form-control" type="password" name="numArt">
                </div>
                <div class="form-group">
                    <label for="numMemb">Numéro du membre ayant écrit le commentaire</label>
                    <input id="numMemb" class="form-control" type="text" name="numMemb" value="<?php echo($numMemb) ?>" readonly>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer commentaire</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} 

$numArt = $_GET['numArt'];
$article = sql_select("ARTICLE", "*", "numArt = $numArt")[0];

?>

<!--Bootstrap form to create a new article-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer l'article</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new article-->
            <form action="<?php echo ROOT_URL . '/api/article/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libTitrArt">Nom de l'article qui sera supprimé</label>
                    <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>" readonly="readonly">
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt" value="<?php echo($article['libTitrArt']) ?>" readonly="readonly">
                    <textarea id="libChapoArt" class="form-control" type="text" name="libChapoArt" readonly="readonly">
                    <?php echo($article['libChapoArt']) ?>
                    </textarea>
                    <textarea id="libAccrochArt" class="form-control" type="text" name="libAccrochArt" readonly="readonly">
                    <?php echo($article['libAccrochArt']) ?>
                    </textarea>
                    <textarea id="parag1Art" class="form-control" type="text" name="parag1Art" readonly="readonly">
                    <?php echo($article['parag1Art']) ?>
                    </textarea>
                    <textarea id="libSsTitr1Art" class="form-control" type="text" name="libSsTitr1Art" readonly="readonly">
                    <?php echo($article['libSsTitr1Art']) ?>
                    </textarea>
                    <textarea id="parag2Art" class="form-control" type="text" name="parag2Art" readonly="readonly">
                    <?php echo($article['parag2Art']) ?>
                    </textarea>
                    <textarea id="libSsTitr2Art" class="form-control" type="text" name="libSsTitr2Art" readonly="readonly">
                    <?php echo($article['libSsTitr2Art']) ?>
                    </textarea>
                    <textarea id="parag3Art" class="form-control" type="text" name="parag3Art" readonly="readonly">
                    <?php echo($article['parag3Art']) ?>
                    </textarea>
                    <textarea id="libConclArt" class="form-control" type="text" name="libConclArt" readonly="readonly">
                    <?php echo($article['libConclArt']) ?>
                    </textarea>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer la suppression ?</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php
include '../../../footer.php';
?> 
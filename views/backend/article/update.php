<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} 

$numArt = $_GET['numArt'];
$libTitrArt = sql_select("ARTICLE", "libTitrArt", "numArt = $numArt")[0]['libTitrArt'];
$libChapoArt = sql_select("ARTICLE", "libChapoArt", "numArt = $numArt")[0]['libChapoArt'];
$libAccrochArt = sql_select("ARTICLE", "libAccrochArt", "numArt = $numArt")[0]['libAccrochArt'];
$parag1Art = sql_select("ARTICLE", "parag1Art", "numArt = $numArt")[0]['parag1Art'];
$libSsTitr1Art = sql_select("ARTICLE", "libSsTitr1Art", "numArt = $numArt")[0]['libSsTitr1Art'];
$parag2Art = sql_select("ARTICLE", "parag2Art", "numArt = $numArt")[0]['parag2Art'];
$libSsTitr2Art = sql_select("ARTICLE", "libSsTitr2Art", "numArt = $numArt")[0]['libSsTitr2Art'];
$parag3Art = sql_select("ARTICLE", "parag3Art", "numArt = $numArt")[0]['parag3Art'];
$libConclArt = sql_select("ARTICLE", "libConclArt", "numArt = $numArt")[0]['libConclArt'];
$urlPhotArt = sql_select("ARTICLE", "urlPhotArt", "numArt = $numArt")[0]['urlPhotArt'];

$keywords = sql_select("MOTCLE", "*");

//Load all thematics
$thematics = sql_select("THEMATIQUE", "*");
?>

<!--Bootstrap form to create a new article-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modifier l'article</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new article-->
            <form action="<?php echo ROOT_URL . '/api/article/edit.php' ?>" method="post">
                <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>" readonly="readonly">
                
                <div class="form-group">                    
                    <label for="libTitrArt">Titre</label>
                    <input id="libTitrArt" class="form-control" type="text" placeholder="Entrez votre titre" name="libTitrArt" value="<?php echo(htmlspecialchars($libTitrArt)) ?>">
                </div>
                <div class="form-group">
                    <label for="libChapoArt">Chapo</label>
                    <input id="libChapoArt" class="form-control" type="text" placeholder="Entrez votre chapo" required name="libChapoArt" value="<?php echo(htmlspecialchars($libChapoArt)) ?>">
                </div>            
                <div class="form-group">
                    <label for="libAccrochArt">Accroche</label>
                    <input id="libAccrochArt" class="form-control" type="text" placeholder="Entrez votre accroche" required name="libAccrochArt" value="<?php echo(htmlspecialchars($libAccrochArt)) ?>">
                </div>  
                <div class="form-group">
                    <label for="parag1Art">Premier paragraphe</label>
                    <input id="parag1Art" class="form-control" type="text" placeholder="Entrez votre paragraphe" required name="parag1Art" value="<?php echo(htmlspecialchars($parag1Art)) ?>">
                </div>
                <div class="form-group">
                    <label for="libSsTitr1Art">Sous titre du deuxième paragraphe</label>
                    <input id="libSsTitr1Art" class="form-control" type="text" placeholder="Entrez votre sous-titre" required name="libSsTitr1Art" value="<?php echo(htmlspecialchars($libSsTitr1Art)) ?>">
                </div>
                <div class="form-group">
                    <label for="parag2Art">Deuxième paragraphe</label>
                    <input id="parag2Art" class="form-control" type="text" placeholder="Entrez votre paragraphe" required name="parag2Art" value="<?php echo(htmlspecialchars($parag2Art)) ?>">
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Sous titre du troisième paragraphe</label>
                    <input id="libSsTitr2Art" class="form-control" type="text" placeholder="Entrez votre sous-titre" required name="libSsTitr2Art" value="<?php echo(htmlspecialchars($libSsTitr2Art)) ?>">
                </div>
                <div class="form-group">
                    <label for="parag3Art">Troisième paragraphe</label>
                    <input id="parag3Art" class="form-control" type="text" placeholder="Entrez votre paragraphe" required name="parag3Art" value="<?php echo(htmlspecialchars($parag3Art)) ?>">
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion</label>
                    <input id="libConclArt" class="form-control" type="text" placeholder="Entrez votre conclusion" required name="libConclArt" value="<?php echo(htmlspecialchars($libConclArt)) ?>">
                </div>

                <label for="numThem">Sélectionner une thématique</label>
                <select name="numThem" required>
                    <option value="" disabled selected>- CHOIX DE LA THEMATIQUE -</option>
                    <?php foreach ($thematics as $thematic) { ?>
                        <option value="<?php echo $thematic['numThem']; ?>"><?php echo $thematic['libThem']; ?></option>
                    <?php } ?>
                </select>
<br>
                <?php 
                foreach ($keywords as $keyword) { ?>
                    <input type="checkbox" name="keyword[]" value="<?php echo $keyword['numMotCle']; ?>">
                    <?php echo $keyword['libMotCle']; ?><br>
                <?php } ?>

                <div class="form-group">
                    <label for="file">Choisir une image pour votre article</label>
                    <input type="file" name="file" id="file" class="form-control" required>
                </div>

                <div class="form-group mt-2">
                    <button type="submit" name="submit" value="submit" class="btn btn-danger">Confirmer l'édition ?</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


<?php
include '../../../footer.php';
?>

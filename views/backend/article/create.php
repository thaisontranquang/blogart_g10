<?php

include '../../../header.php';
//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} 

//Load all thematics
$thematics = sql_select("THEMATIQUE", "*");
$keywords = sql_select("MOTCLE", "*");
?>

<!--Bootstrap form to create a new article-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un nouvel article</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new article-->
            <form action="<?php echo ROOT_URL . '/api/article/create.php' ?>" method="post" enctype='multipart/form-data'>

                <div class="form-group">
                    <label for="libTitrArt">Titre</label>
                    <textarea id="libTitrArt" class="form-control" type="text" placeholder="Entrez votre titre" required name="libTitrArt"></textarea>
                </div>
                <div class="form-group">
                    <label for="libChapoArt">Chapo</label>
                    <textarea id="libChapoArt" class="form-control" type="text" placeholder="Entrez votre chapo" required name="libChapoArt"></textarea>
                </div>                
                <div class="form-group">
                    <label for="parag1Art">Premier paragraphe</label>
                    <textarea id="parag1Art" class="form-control" type="text" placeholder="Entrez votre paragraphe" required name="parag1Art"></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr1Art">Sous titre du deuxième paragraphe</label>
                    <textarea id="libSsTitr1Art" class="form-control" type="text" placeholder="Entrez votre sous-titre" required name="libSsTitr1Art"></textarea>
                </div>
                <div class="form-group">
                    <label for="parag2Art">Deuxième paragraphe</label>
                    <textarea id="parag2Art" class="form-control" type="text" placeholder="Entrez votre paragraphe" required name="parag2Art"></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Sous titre du troisième paragraphe</label>
                    <textarea id="libSsTitr2Art" class="form-control" type="text" placeholder="Entrez votre sous-titre" required name="libSsTitr2Art"></textarea>
                </div>
                <div class="form-group">
                    <label for="parag3Art">Troisième paragraphe</label>
                    <textarea id="parag3Art" class="form-control" type="text" placeholder="Entrez votre paragraphe" required name="parag3Art"></textarea>
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion</label>
                    <textarea id="libConclArt" class="form-control" type="text" placeholder="Entrez votre conclusion" required name="libConclArt"></textarea>
                </div>

                <label for="numThem">Sélectionner une thématique</label><br>
                <select name="numThem" required>
                    <option value="" disabled selected>- CHOIX DE LA THEMATIQUE -</option>
                    <?php foreach ($thematics as $thematic) { ?>
                        <option value="<?php echo $thematic['numThem']; ?>"><?php echo $thematic['libThem']; ?></option>
                    <?php } ?>
                </select><br>

                <label for="numMotCle">Sélectionner des mots clés</label><br>
                <select name="numMotCle" multiple>
                    <?php
                    foreach($keywords as $keyword){
                      echo "<option value='".$keyword['numMotCle']."'>".$keyword['libMotCle']."</option>";
                    }
                    ?>
                </select><br>
                
                <div class="form-group">
                    <label for="file">Choisir une image pour votre article</label>
                    <input type="file" accept="image/png, image/jpeg" name="file" id="file" class="form-control" required>
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>
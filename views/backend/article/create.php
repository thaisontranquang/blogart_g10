<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all thematics
$thematics = sql_select("THEMATIQUE", "*");
?>

<!--Bootstrap form to create a new article-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create new article</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new article-->
            <form action="<?php echo ROOT_URL . '/api/article/create.php' ?>" method="post">

                <div class="form-group">
                    <label for="libTitrArt">Titre</label>
                    <input id="libTitrArt" class="form-control" type="text" placeholder="Entrez votre titre" required name="libTitrArt">
                </div>
                <div class="form-group">
                    <label for="libChapoArt">Chapo</label>
                    <input id="libChapoArt" class="form-control" type="text" placeholder="Entrez votre chapo" required name="libChapoArt">
                </div>                
                <div class="form-group">
                    <label for="parag1Art">Premier paragraphe</label>
                    <input id="parag1Art" class="form-control" type="text" placeholder="Entrez votre paragraphe" required name="parag1Art">
                </div>
                <div class="form-group">
                    <label for="libSsTitr1Art">Sous titre du deuxième paragraphe</label>
                    <input id="libSsTitr1Art" class="form-control" type="text" placeholder="Entrez votre sous-titre" required name="libSsTitr1Art">
                </div>
                <div class="form-group">
                    <label for="parag2Art">Deuxième paragraphe</label>
                    <input id="parag2Art" class="form-control" type="text" placeholder="Entrez votre paragraphe" required name="parag2Art">
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Sous titre du troisième paragraphe</label>
                    <input id="libSsTitr2Art" class="form-control" type="text" placeholder="Entrez votre sous-titre" required name="libSsTitr2Art">
                </div>
                <div class="form-group">
                    <label for="parag3Art">Troisième paragraphe</label>
                    <input id="parag3Art" class="form-control" type="text" placeholder="Entrez votre paragraphe" required name="parag3Art">
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion</label>
                    <input id="libConclArt" class="form-control" type="text" placeholder="Entrez votre conclusion" required name="libConclArt">
                </div>

                <select name="word" required>
                    <?php foreach ($thematics as $thematic) { ?>
                        <option value="<?php echo $thematic['numThem']; ?>" name="<?php echo $thematic['numThem']; ?>"><?php echo $thematic['libThem']; ?></option>
                    <?php } ?>
                </select>

                <!-- <div class="form-group">
                    <label for="urlPhotArt">Choisir une image pour votre article</label>
                    <input id="urlPhotArt" class="form-control" type="file" accept="image/png, image/jpeg" required name="urlPhotArt">
                </div> -->

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
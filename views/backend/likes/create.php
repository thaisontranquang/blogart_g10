<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} 

$articles = sql_select("ARTICLE", "*");

?>


<!--Bootstrap form to create a new commentary   -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Liker</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new commentary -->
            <form action="<?php echo ROOT_URL . '/api/likes/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="numMemb">N° membre</label>
                    <input id="numMemb" class="form-control" type="number" name="numMemb" required>
                </div> 
                <div class="form-group">
                <label for="numArt">Sélectionner un article</label>
                <select name="numArt" required>
                    <option value="" disabled selected>- CHOIX DE L'ARTICLE -</option>
                    <?php foreach ($articles as $article) { ?>
                        <option value="<?php echo $article['numArt']; ?>"><?php echo $article['numArt']; ?></option>
                    <?php } ?>
                </select>
                </div> 
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Liker</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include '../../../footer.php';
?> // contains the footer
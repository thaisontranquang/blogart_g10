<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} 



?>


<!--Bootstrap form to create a new commentary   -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un nouveau commentaire</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new commentary -->
            <form action="<?php echo ROOT_URL . '/api/comment/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libCom">Ecrivez votre commentaire</label>
                    <input id="libCom" class="form-control" type="text" placeholder="Ecrivez votre commentaire" name="libCom" required>
                </div> 
                <div class="form-group">
                    <label for="numArt">N° de l'article</label>
                    <input id="numArt" class="form-control" type="number" min="0" max="3" placeholder="Saisissez le numéro de l'article" name="numArt" required>
                </div> 
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer commentaire</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
<?php
include '../../../footer.php';
?>
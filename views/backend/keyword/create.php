<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */
?>

<!--Bootstrap form to create a new keyword-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un nouveau mot clé</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new keyword-->
            <form action="<?php echo ROOT_URL . '/api/keyword/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMotCle">Mot clé</label>
                    <input id="libMotCle" class="form-control" type="text" name="libMotCle">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer</button>
                </div>
            </form>
            <a href="list.php"><button type="submit" class="btn btn-primary">Revenir à la liste</button></a>
        </div>
    </div>
</div>
</div>

<?php
include '../../../footer.php';
?>
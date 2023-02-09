<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numMotCle = $_GET['numMotCle'];
$libMotCle = sql_select("MOTCLE", "libMotCle", "numMotCle = $numMotCle")[0]['libMotCle'];

?>

<!--Bootstrap form to create a new keyword-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Editer un mot clé</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new keyword-->
            <form action="<?php echo ROOT_URL . '/api/keyword/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="libMotCle">Mot clé</label>
                    <input id="numMotCle" class="form-control" style="display: none" type="text" name="numMotCle" value="<?php echo($numMotCle) ?>" readonly="readonly">
                    <input id="libMotCle" class="form-control" type="text" name="libMotCle" value="<?php echo($libMotCle) ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer l'édition ?</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
include '../../../footer.php';
?> 
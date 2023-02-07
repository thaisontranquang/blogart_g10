<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numArt = $_GET['numArt'];
$libTitrArt = sql_select("ARTICLE", "libTitrArt", "numArt = $numArt")[0]['libTitrArt'];

?>

<!--Bootstrap form to create a new article-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Delete article</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new article-->
            <form action="<?php echo ROOT_URL . '/api/article/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="libTitrArt">libTitrArt</label>
                    <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>" readonly="readonly">
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt" value="<?php echo($libTitrArt) ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm deletion ?</button>
                </div>
            </form>
        </div>
    </div>
</div>
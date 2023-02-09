<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} 

$numThem = $_GET['numThem'];
$libThem = sql_select("THEMATIQUE", "libThem", "numThem = $numThem")[0]['libThem'];

?>

<!--Bootstrap form to create a new thematic-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Editer la thématique</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new thematic-->
            <form action="<?php echo ROOT_URL . '/api/thematic/edit.php' ?>" method="post">
                <div class="form-group">
                    <label for="libThem">Thématique</label>
                    <input id="numThem" class="form-control" style="display: none" type="text" name="numThem" value="<?php echo($numThem) ?>" readonly="readonly">
                    <input id="libThem" class="form-control" type="text" name="libThem" value="<?php echo($libThem) ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer l'édition ?</button>
                </div>
            </form>
        </div>
    </div>
</div>
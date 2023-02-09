<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} 
?>

<!--Bootstrap form to create a new thematic-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer une nouvelle thématique</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new thematic-->
            <form action="<?php echo ROOT_URL . '/api/thematic/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libThem">Thématique</label>
                    <input id="libThem" class="form-control" type="text" name="libThem">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>
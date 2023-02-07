<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */
?>

<!--Bootstrap form to create a new articles-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create new articles</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new articles-->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libTitrArt">libTitrArt</label>
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
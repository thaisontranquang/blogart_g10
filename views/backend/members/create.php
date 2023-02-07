<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */
?>

<!--Bootstrap form to create a new member-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create new member</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new member-->
            <form action="<?php echo ROOT_URL . '/api/status/member.php' ?>" method="post">
                <div class="form-group">
                    <label for="prenomMemb">prenomMemb</label>
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb">
                </div>
                <div class="form-group">
                    <label for="nomMemb">nomMemb</label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb">
                </div>
                <div class="form-group">
                    <label for="pseudoMemb">pseudoMemb</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb">
                </div>
                <div class="form-group">
                    <label for="passMemb">passMemb</label>
                    <input id="passMemb" class="form-control" type="text" name="passMemb">
                </div>
                <div class="form-group">
                    <label for="eMailMemb">eMailMemb</label>
                    <input id="eMailMemb" class="form-control" type="text" name="eMailMemb">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create member</button>
                </div>
            </form>
        </div>
    </div>
</div>
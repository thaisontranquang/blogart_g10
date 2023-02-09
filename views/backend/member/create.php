<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} 

//Load all statuses
$statuses = sql_select("STATUT", "*");
?>

<!--Bootstrap form to create a new member-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un nouveau membre</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new member-->
            <form action="<?php echo ROOT_URL . '/api/member/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="prenomMemb">Prénom</label>
                    <input id="prenomMemb" class="form-control" type="text" placeholder="Entrez votre prénom" name="prenomMemb" required>
                </div>
                <div class="form-group">
                    <label for="nomMemb">Nom</label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb" placeholder="Entrez votre nom" required>
                </div>
                <div class="form-group">
                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" placeholder="Entrez votre pseudo" required>
                </div>
                <div class="form-group">
                    <label for="passMemb">Mot de passe</label>
                    <input id="passMemb" class="form-control" type="password" name="passMemb" placeholder="Entrez votre mot de passe" required>
                </div>
                <div class="form-group">
                    <label for="eMailMemb">Email</label>
                    <input id="eMailMemb" class="form-control" type="email" name="eMailMemb" placeholder="Entrez votre email" required>
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer un membre</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include '../../../footer.php';
?> // contains the footer
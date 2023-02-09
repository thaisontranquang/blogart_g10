<?php
include '../../header.php';
?>

<form action="<?php echo ROOT_URL . '/api/login_register/register.php' ?>" method="post">
    <div class="form-group">
        <label for="eMailMemb">Email</label>
        <input id="eMailMemb" class="form-control" type="text" name="eMailMemb" placeholder="Entrez votre email" required>
    </div>
    <div class="form-group">
        <label for="passMemb">Mot de passe</label>
        <input id="passMemb" class="form-control" type="password" name="passMemb" placeholder="Entrez votre mot de passe" required>
    </div>

    <div class="form-group mt-2">
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </div>
</form>

<?php
include '../../../header.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

// $eMailMemb = $_GET['eMailMemb'];
// $passMemb = $_GET['passMemb'];
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 ">

            <form action="<?php echo ROOT_URL . '/api/register/register.php' ?>" method="post">
                <label for="nomMemb">Nom * </label>
                <input class="form-control" type="text" id="nameMemb" name='nameMemb' required>
                <label for="prenomMemb">Prénom * </label>
                <input class="form-control" type="text" id="surnameMemb" name='surnameMemb' required>
                <label for="prenomMemb">Pseudo * </label>
                <input class="form-control" type="text" id="pseudoMemb" name='pseudoMemb' required>
                <label for="eMailMemb">Adresse mail * </label>
                <input class="form-control" type="text" id="eMailMemb" name='eMailMemb' required>
                <label for="passMemb">Mot de passe * </label>
                <input class="form-control" type="password" id="passMemb" name='passMemb' required>
                <button type="submit">Créer un compte</button>
            </form>
        </div>
    </div>

        <div class="row">
            <div class="col-md-6 ">
                <form action="<?php echo ROOT_URL . '/api/connexion/login.php' ?>" method="post">
                    <div class="form-group">
                        <label class="text-champ">Adresse mail</label>
                        <input id="eMailMemb" class="form-control" type="text" name="eMailMemb" required>
                        <label class="text-champ">Mot de passe</label>
                        <input id="passMemb" class="form-control" type="password" name="passMemb" required>
                        <button type="submit">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
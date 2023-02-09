<?php
include 'header.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

// $eMailMemb = $_GET['eMailMemb'];
// $passMemb = $_GET['passMemb'];
?>

<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <form action="<?php echo ROOT_URL . '/api/register/register.php' ?>" method="post">
                    <h2>Inscription</h2>
                    <label for="nomMemb">Nom * </label>
                    <input class="form-control" type="text" id="nameMemb" name='nameMemb' required placeholder="Dupont">
                    <label for="surnameMemb">Prénom * </label>
                    <input class="form-control" type="text" id="surnameMemb" name='surnameMemb' required placeholder="Jean">
                    <label for="pseudoMemb">Pseudo * </label>
                    <input class="form-control" type="text" id="pseudoMemb" name='pseudoMemb' required placeholder="jd36">
                    <label for="eMailMemb">Adresse mail * </label>
                    <input class="form-control" type="text" id="eMailMemb" name='eMailMemb' required placeholder="jd36@gmail.com">
                    <label for="passMemb">Mot de passe * </label>
                    <input class="form-control" type="password" id="passMemb" name='passMemb' required placeholder="Mot de passe">
                    <button type="submit">Créer un compte</button>
                </form>
            </div>

            <div class="col-md-4">
                <form action="<?php echo ROOT_URL . '/api/connexion/login.php' ?>" method="post">
                    <h2>Connexion</h2>
                        <label class="text-champ">Adresse mail *</label>
                        <input id="eMailMemb" class="form-control" type="text" name="eMailMemb" required placeholder="jd36@gmail.com">
                        <label class="text-champ">Mot de passe *</label>
                        <input id="passMemb" class="form-control" type="password" name="passMemb" required placeholder="Mot de passe">
                        <button type="submit">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
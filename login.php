<?php
include 'header.php';

require_once __DIR__ . '/../../config.php';;

// $eMailMemb = $_GET['eMailMemb'];
// $passMemb = $_GET['passMemb'];
?>

<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <form action="<?php echo ROOT_URL . '/api/register/register.php' ?>" method="post">
                    <h2>Inscription</h2>
                    <label for="nomMemb">Nom (champ obligatoire)</label>
                    <input class="form-control" type="text" id="nameMemb" name='nameMemb' required placeholder="Dupont">
                    <label for="surnameMemb">Prénom (champ obligatoire)</label>
                    <input class="form-control" type="text" id="surnameMemb" name='surnameMemb' required placeholder="Jean">
                    <label for="pseudoMemb">Pseudo (champ obligatoire)</label>
                    <input class="form-control" type="text" id="pseudoMemb" name='pseudoMemb' required placeholder="Pseudonyme">
                    <label for="eMailMemb">Adresse mail (champ obligatoire)</label>
                    <input class="form-control" type="text" id="eMailMemb" name='eMailMemb' required placeholder="votremail@gmail.com">
                    <label for="passMemb">Mot de passe (champ obligatoire)</label>
                    <input class="form-control" type="password" id="passMemb" name='passMemb' required placeholder="Mot de passe">
                    <button type="submit">Créer un compte</button>
                </form>
            </div>

            <div class="col-md-4">
                <form action="<?php echo ROOT_URL . '/api/connexion/login.php' ?>" method="post">
                    <h2>Connexion</h2>
                        <label class="text-champ">Adresse mail (champ obligatoire)</label>
                        <input id="eMailMemb" class="form-control" type="text" name="eMailMemb" required placeholder="votremail@gmail.com">
                        <label class="text-champ">Mot de passe (champ obligatoire)</label>
                        <input id="passMemb" class="form-control" type="password" name="passMemb" required placeholder="Mot de passe">
                        <button type="submit">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
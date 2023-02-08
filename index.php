<?php require_once 'header.php';
sql_connect();
?>

<section class="header">
    <div class="bartdeaux-header">
        <h1>B’Art Deaux</h1>
        <p>Lorem ipsum dolor sit amet consectetur. Non dolor nisi id urna turpis neque. Ac enim fringilla nulla amet in lacinia est quam magna. Nulla diam ultrices at sed. Molestie mauris praesent eu accumsan est faucibus nulla massa.</p>
    </div>
</section>

<section class="news-login">
    <div class="container">
        <div class="row">
            <div class="col-md-auto">
                <h2>Derniers articles</h2>
                <div class="card">
                    <img src="/src/images/index.jpeg" class="card-img-top" alt="Image dernière actualité">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6>Card title</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn">Go somewhere <img src="/src/images/chevron_right_FILL0_wght400_GRAD0_opsz48.svg"></a>
                    </div>
                </div>
                <div class="card">
                    <img src="/src/images/Chaton.jpeg" class="card-img-top" alt="Image avant-dernière actualité">
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptate voluptates totam deleniti amet dignissimos? Amet dolorum at similique harum aliquam aperiam excepturi necessitatibus asperiores libero. Cum recusandae magnam voluptate.</h5>
                        <h6>par <span>Nom de l'auteur</span> le xx/xx/xx </h6>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo iusto quae aliquam at deleniti, debitis tempora fuga ratione hic, atque molestiae nemo quaerat cupiditate provident qui quas! Esse, impedit earum?
                        </p>
                        <a href="#" class="btn">Go somewhere <img src="/src/images/chevron_right_FILL0_wght400_GRAD0_opsz48.svg"></a>
                    </div>
                </div>
            </div>
            <div class="col fast-login">
                <h3>Connectez-vous</h3>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="votreadresse@mail.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" required>
                    </div>
                    <button type="submit" class="btn">Connexion</button>
                        <?php
                            if(isset($_GET['erreur'])){
                            $err = $_GET['erreur'];
                            if($err==1 || $err==2)
                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                            }
                        ?>
                </form>

                <h3>Pas encore de compte ?</h3>
                <a href="#"><button type="submit" class="btn">S'inscrire</button></a>
            </div>
        </div>

    </div>
</section>


<?php require_once 'footer.php'; ?>
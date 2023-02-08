<?php require_once 'header.php';
sql_connect();

$articles = sql_select("ARTICLE", "*", "", "numArt DESC", 2);

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
            <div class="col-xl-9 col-md-12">
                <h2>Derniers articles</h2>
                <?php
            foreach ($articles as $article) {
                echo ('
                <div class="card">
                    <img src="/src/images/index.jpeg" class="card-img-top" alt="Image dernière actualité">
                    <div class="card-body">
                        <h5 class="card-title">' . $article['libTitrArt'] . '</h5>
                        <h6>le ' . $article['dtCreArt'] . '</h6>
                        <p class="card-text">' . substr($article['libChapoArt'], 0, 500) . ' ...' . '</p>
                        <a href="#" class="btn">Go somewhere <img src="/src/images/chevron_right_FILL0_wght400_GRAD0_opsz48.svg" alt="Lire l\'article ?"></a>
                    </div>
                </div>
                ');
            };
                ?>
            </div>
            <div class="col-xl-3 col-md-8 col-sm-12 fast-login">
                <div>
                <h3>Connectez-vous</h3>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Adresse mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="votreadresse@mail.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                    </div>
                    <button type="submit" class="btn">Connexion</button>
                </form>

                <h3>Pas encore de compte ?</h3>
                <a href="#"><button type="submit" class="btn">S'inscrire</button></a>
                </div>
            </div>
        </div>

    </div>
</section>


<?php require_once 'footer.php'; ?>
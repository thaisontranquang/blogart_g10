<?php 
require_once 'header.php';

sql_connect();

$articles = sql_select("ARTICLE", "*", "", "numArt DESC", 2);
$latestArticles = sql_select("ARTICLE", "*", "", "numArt DESC", 10);

?>

<section class="header">
    <div class="bartdeaux-header">
        <h1>B’Art Deaux</h1>
        <p>B’Art Deaux, c’est toute l’actualité bordelaise dans les musées. Grâce à B’Art Deaux, vous serez informé·e·s des événements à venir, des nouvelles expositions, mais vous aurez aussi l’occasion de découvrir des rencontres privilégiées avec des acteurs clés des musées bordelais ! 
</p>
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
                        <a href="/views/frontend/article.php?numArt=' . $article['numArt'] . '" class="btn">En voir plus<img src="/src/images/chevron_right_FILL0_wght400_GRAD0_opsz48.svg" alt="Lire l\'article ?"></a>
                    </div>
                </div>
                ');
            };
                ?>
            </div>
            <?php if (!isset($_SESSION['numStat'])) {
                ?> 
            <div class="col-xl-3 col-md-8 col-sm-12 fast-login">
                <div>
                <h3>Connectez-vous</h3>
                <form action="<?php echo ROOT_URL . '/api/connexion/login.php' ?>" method="post">
                <div class="form-group">
                        <label class="text-champ">Adresse mail</label>
                        <input id="eMailMemb" class="form-control" type="text" name="eMailMemb" required>
                        <label class="text-champ">Mot de passe</label>
                        <input id="passMemb" class="form-control" type="password" name="passMemb" required>
                    </div>
                    <button type="submit" class="btn">Connexion</button>
                </form>

                <h3>Pas encore de compte ?</h3>
                <a href="login.php"><button type="submit" class="btn">S'inscrire</button></a>
                </div>
            </div>
            <?php
            } else {
                ?>
            <div class="col-xl-3 col-md-8 col-sm-12 latest-articles">
                <h2>Une petite lecture ?</h2>
            <?php
            foreach ($latestArticles as $lastestArticle) {
                echo ('
                <a href="/views/frontend/article.php?numArt=' . $article['numArt'] . '">' . $lastestArticle['libTitrArt'] . '</a>
                ');
            };
                ?>
            </div>
                <?php
            }
            ?>
        </div>

    </div>
</section>


<?php require_once 'footer.php'; ?>
<?php require_once '../../header.php';
sql_connect();

$articles = sql_select("ARTICLE", "*", "", "numArt DESC");
$themes = sql_select("THEMATIQUE", "*");
$theme_choosen = $_GET['numThem'];
?>

<section class="all_articles">
    <h1>Articles</h1>
    <div>
    <h2>Thématiques</h2>
    <form method="get">
        <fieldset>
        <button type="button" class="btn"> <a href="?numThem=all">Tous</a></button>

            <?php
            foreach ($themes as $theme) {
            ?>
                <button type="button" class="btn"> <a href="?numThem=<?php echo ($theme['numThem']); ?>"><?php echo ($theme['libThem']); ?></a></button>
            <?php
            };
            ?>
        </fieldset>
    </form>
    </div>

    <div class="container">
        <div class="row">
            <?php
            if ($theme_choosen != 'all' ){
                $articles = sql_select('ARTICLE INNER JOIN THEMATIQUE ON ARTICLE.numThem = THEMATIQUE.numThem', '*', "ARTICLE.numThem='$theme_choosen'", "numArt DESC");
            } else{
                $articles = sql_select("ARTICLE", "*", "", "numArt DESC");
            };

            foreach ($articles as $article) {
                echo ('
        <div class="col-xl-3 col-md-6 col-sm-12">
            <div class="card">
                <img src="/src/images/index.jpeg" class="card-img-top" alt="Image dernière actualité">
                <div class="card-body">
                <h5 class="card-title">' . $article['libTitrArt'] . '</h5>
                <h6>le ' . $article['dtCreArt'] . '</h6>
                    <p class="card-text">' . substr($article['libChapoArt'], 0, 300) . ' ...' . '</p>
                    <a href="article.php?numArt=' . $article['numArt'] . '" class="btn">Go somewhere <img src="/src/images/chevron_right_FILL0_wght400_GRAD0_opsz48.svg" alt="Lire l\'article ?"></a>
                </div>
            </div>
        </div>
');
            }
            ?>
        </div>
    </div>
</section>

<?php require_once '../../footer.php';

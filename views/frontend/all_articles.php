<?php require_once '../../header.php';
sql_connect();

$articles = sql_select("ARTICLE", "*");
?>

<section class="all_articles">
    <h1>Articles</h1>
    <div class="container">
        <div class="row">
            <?php
            foreach ($articles as $article) {
                echo ('
        <div class="col-xl-3 col-md-12">
        <div class="card">
        <div class="card-body">
        <h2 class="card-title">' . $article['libTitrArt'] . '</h2>
        <h6>le ' . $article['dtCreArt'] . '</h6>
        <p class="card-text">' . $article['libChapoArt'] . '</p>
        <a href="#" class="btn">Go somewhere <img src="/src/images/chevron_right_FILL0_wght400_GRAD0_opsz48.svg"></a>

        </div></div>
        </div>
');
            }
            ?>
        </div>
    </div>
</section>

<?php require_once '../../footer.php';

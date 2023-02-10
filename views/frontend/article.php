<?php require_once '../../header.php';
sql_connect();

$numArt = $_GET['numArt'];
$articles = sql_select("ARTICLE", "*", "numArt = $numArt");
$libThem = sql_select('ARTICLE INNER JOIN THEMATIQUE ON ARTICLE.numThem = THEMATIQUE.numThem', 'libThem', "ARTICLE.numArt=$numArt")[0]['libThem'];
$comments = sql_select('ARTICLE INNER JOIN COMMENT ON ARTICLE.numArt = COMMENT.numArt', '*', "ARTICLE.numArt=$numArt");
$likes = sql_select('ARTICLE INNER JOIN LIKEART ON ARTICLE.numArt = LIKEART.numArt', 'likeA', "ARTICLE.numArt=$numArt AND likeA = 1");
$keywords = sql_select('MOTCLEARTICLE INNER JOIN MOTCLE ON MOTCLEARTICLE.numMotCle = MOTCLE.numMotCle', 'libMotCle', "MOTCLEARTICLE.numArt=$numArt");
?>

<section class="show-article">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <h3>Mots-clés</h3>
                <p><?php foreach ($keywords as $keyword) {
                        echo ($keyword['libMotCle'] . '<br>');
                    } ?></p>
            </div>
            <div class="col-xl-6 content-article">
                <span> Thématique : <?php
                                    echo ($libThem) ?>
                </span>
                <h6>le <?php
                        echo ($articles[0]['dtCreArt']) ?></h6>
                <h1><?php
                    echo ($articles[0]['libTitrArt']) ?>
                </h1>
                <p class="libChapoArt"><?php
                                        echo ($articles[0]['libChapoArt']);
                                        ?></p>
                <img src="<?php echo($articles[0]['urlPhotArt']);?>" alt="">
                <p><?php
                    echo ($articles[0]['libAccrochArt'] . ' ' . $articles[0]['parag1Art']);
                    ?></p>
                <h2><?php
                    echo ($articles[0]['libSsTitr1Art']);
                    ?></h2>
                <p><?php
                    echo ($articles[0]['parag2Art']);
                    ?></p>
                <h2><?php
                    echo ($articles[0]['libSsTitr2Art']);
                    ?></h2>
                <p><?php
                    echo ($articles[0]['parag3Art']);
                    ?></p>
                <p><?php
                    echo ($articles[0]['libConclArt']);
                    ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 like-section">
                <form action="<?php echo ROOT_URL . '/api/likes/createLike.php' ?>" method="post">
                    <div class="form-group">
                        <input id="numMemb" class="form-control" type="number" value="1" name="numMemb" readonly="readonly" style="display:none;">
                        <input id="numMemb" class="form-control" type="number" value="<?php echo ($_SESSION['numMemb']); ?>" name="numMemb" readonly="readonly" style="display:none;">
                        <input id="numArt" class="form-control" type="number" min="0" max="3" value="<?php echo (intval($numArt)); ?>" name="numArt" readonly="readonly" style="display:none;">
                        <button <?php 
                        $likeCheck = sql_select('ARTICLE INNER JOIN LIKEART ON ARTICLE.numArt = LIKEART.numArt', 'likeA', "ARTICLE.numArt=$numArt")[0];
                        if($likeCheck != 1){
                        echo('type="submit"');
                        }
                        ?> class="btn">
                            <img src="/src/images/thumb_up_FILL0_wght400_GRAD0_opsz48.svg" alt="Image bouton aimer un commentaire">
                            <?php
                            echo (count($likes));
                            ?> J'aime(s)
                        </button>
                    </div>
                </form>

            </div>
            <div class="col-xl-6 comment-section">
                <?php if (isset($_SESSION['numStat'])) {
                ?>
                    <form action="<?php echo ROOT_URL . '/api/comment/createCom.php' ?>" method="post">
                        <div class="form-group">
                            <label for="libCom">Ajouter un commentaire :</label>
                            <textarea id="libCom" class="form-control" type="text" placeholder="Ecrivez votre commentaire" name="libCom" required></textarea>
                            <input id="numMemb" class="form-control" type="number" value="<?php echo ($_SESSION['numMemb']); ?>" name="numMemb" readonly="readonly" style="display:none;">
                            <input id="numArt" class="form-control" type="number" min="0" max="3" value="<?php echo (intval($numArt)); ?>" name="numArt" readonly="readonly" style="display:none;">
                            <button type="submit" class="btn">Envoyer</button>
                        </div>
                    </form>
                <?php } ?>

                <?php foreach ($comments as $comment) {
                    $member = sql_select('MEMBRE', 'pseudoMemb', "numMemb = " . $comment['numMemb'])[0]['pseudoMemb'];
                    echo ('
                    <div class="comment">
                    <span>Par <span class="pseudomemb">' . $member . '</span> le ' . $comment['dtCreCom'] . '</span>
                    <div class="comment-body">' .
                        $comment['libCom']
                        . "</div></div>");
                } ?>
            </div>
        </div>
    </div>
</section>


<?php require_once '../../footer.php'; ?>
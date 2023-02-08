<?php require_once '../../header.php';
sql_connect();

$numArt = $_GET['numArt'];
$articles = sql_select("ARTICLE", "*", "numArt = $numArt");
$libThem = sql_select('ARTICLE INNER JOIN THEMATIQUE ON ARTICLE.numThem = THEMATIQUE.numThem', 'libThem', "ARTICLE.numArt=$numArt")[0]['libThem'];
$keywords = sql_select('ARTICLE INNER JOIN THEMATIQUE ON ARTICLE.numThem = THEMATIQUE.numThem', 'libThem', "ARTICLE.numArt=$numArt");
$comments = sql_select('ARTICLE INNER JOIN COMMENT ON ARTICLE.numArt = COMMENT.numArt', '*', "ARTICLE.numArt=$numArt");
?>

<section class="show-article">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                fdvsdgbqd
            </div>
            <div class="col-xl-6 content-article">
                <span> Catégorie : <?php
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
                <img src="/src/images/Chaton.jpeg" alt="">    
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
            <div class="col-xl-3">
                fdvsdgbqd
            </div>
            <div class="col-xl-6 comment-section">
            <form action="<?php echo ROOT_URL . '/api/comment/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libCom">Ajouter un commentaire :</label>
                    <input id="libCom" class="form-control" type="text" placeholder="Ecrivez votre commentaire" name="libCom" required>
                    <input id="numArt" class="form-control" type="number" min="0" max="3" value="<?php echo(intval($numArt)); ?>" name="numArt" readonly="readonly" style="display:none;">
                    <button type="submit" class="btn">Envoyer</button>
                </div>

                
                <?php foreach ($comments as $comment) {
                    $numCom = $comment['numCom'] ;
                    $member = sql_select('COMMENT INNER JOIN MEMBRE ON COMMENT.numMemb = MEMBRE.numMemb', 'pseudoMemb', "COMMENT.numArt=$numArt")[$numCom]['pseudoMemb'];
                    echo('
                    <div class="comment">
                    <span>Par <span class="pseudomemb">' . $member . '</span></span>
                    <div class="comment-body">' .
                    $comment['libCom']
                    . "</div></div>");
                }?>


                
            </form>
            </div>
        </div>
    </div>
</section>


<?php require_once '../../footer.php'; ?>
<?php require_once '../../header.php';
sql_connect();

$numArt = $_GET['numArt'];
$articles = sql_select("ARTICLE", "*", "numArt = $numArt");
print_r($articles['libTitrArt']);
$themes = sql_select("THEMATIQUE", "*");
$libThem = sql_select('ARTICLE INNER JOIN THEMATIQUE ON ARTICLE.numThem = THEMATIQUE.numThem', 'libThem', "ARTICLE.numArt=$numArt")[0]['libThem'];
$keywords = sql_select('ARTICLE INNER JOIN THEMATIQUE ON ARTICLE.numThem = THEMATIQUE.numThem', 'libThem', "ARTICLE.numArt=$numArt");
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
            <div class="col-xl-6">
            <label for="formGroupExampleInput2" class="form-label">Another label</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
            <button type="submit"></button>
            </div>
        </div>
    </div>
</section>


<?php require_once '../../footer.php'; ?>
<?php
include '../../header.php';

//Security check
//Level 1 mean administator in DB
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
} 

?>

<!--Bootstrap admin dashboard template-->
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Administration Blog'Art 2023</h1>
                <p>Bienvenue sur le panneau administratif</p>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Page</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        if (check_access(1)) {
                            echo('
                        <tr>
                            <td>Statuts</td>
                            <td>
                                <a href="/views/backend/status/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/status/create.php" class="btn btn-success">Créer un nouveau statut</a>
                                </td>
                            <td></td>
                            </td>
                        </tr>
                        ');} ?>
                        <tr>
                            <td>Membres</td>
                            <td>
                                <a href="/views/backend/member/list.php" class="btn btn-primary">Liste</a>
                                <?php 
                        if (check_access(1)) {
                            echo('<a href="/views/backend/member/create.php" class="btn btn-success">Créer un nouveau membre</a>');}?>
                            </td>
                        </tr>
                        <tr>
                            <td>Articles</td>
                            <td>
                                <a href="/views/backend/article/list.php" class="btn btn-primary">Liste</a>
                                <?php 
                        if (check_access(1)) {
                            echo('<a href="/views/backend/article/create.php" class="btn btn-success">Créer</a>');
                        }?>

                            </td>
                            <td></td>
                        </tr>
                        <?php 
                        if (check_access(1)) {
                            echo('
                        <tr>
                            <td>Thématiques</td>
                            <td>
                                <a href="/views/backend/thematic/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/thematic/create.php" class="btn btn-success">Créer</a>
                            </td>
                            <td></td>
                        </tr>
                        ');
                    } 
                    ?>
                        <tr>
                            <td>Commentaires</td>
                            <td>
                                <a href="/views/backend/comment/list.php" class="btn btn-primary">Liste</a>
                                <?php 
                        if (check_access(1)) {
                            echo('
                                <a href="/views/backend/comment/create.php" class="btn btn-success">Créer</a>');}?>
                            </td>
                            <td></td>
                        </tr>
                    
                        <tr>
                            <td>Likes</td>
                            <td>
                                <a href="/views/backend/likes/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/likes/create.php" class="btn btn-success">Créer</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Mots-clés</td>
                            <td>
                                <a href="/views/backend/keyword/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/keyword/create.php" class="btn btn-success">Créer</a>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include '../../footer.php';
?>
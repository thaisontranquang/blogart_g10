<?php
include '../../header.php';

?>

<!--Bootstrap admin dashboard template-->
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>BlogArt Admin Dashboard</h1>
                <p>Welcome to the dashboard</p>
            </div>
            <div class="col-md-12">
                <h3>Find here links to admin pages and what to do next</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Page</th>
                            <th>Actions</th>
                            <th>Commentaires</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Statuts</td>
                            <td>
                                <a href="/views/backend/status/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/status/create.php" class="btn btn-success">Créer un nouveau statut</a>
                            </td>
                            <td>
                                <p>Exemple fournis s'y réferer pour travailler</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Membres</td>
                            <td>
                                <a href="/views/backend/member/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/member/create.php" class="btn btn-success">Créer un nouveau membre</a>
                            </td>
                            <td>Attention, il faut aussi gérer la partie inscription/connection et la sécurité</td>
                        </tr>
                        <tr>
                            <td>Articles</td>
                            <td>
                                <a href="/views/backend/article/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/article/create.php" class="btn btn-success">Créer</a>

                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Thematiques</td>
                            <td>
                                <a href="/views/backend/thematic/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/thematic/create.php" class="btn btn-success">Créer</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Commentaires</td>
                            <td>
                                <a href="/views/backend/comment/list.php" class="btn btn-primary">Liste</a>
                                <a href="/views/backend/comment/create.php" class="btn btn-success">Créer</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Likes</td>
                            <td>
                                <a href="/views/backend/likes/list.php" class="btn btn-primary disabled">Liste</a>
                                <a href="/views/backend/likes/create.php" class="btn btn-success disabled">Créer</a>
                                <a href="/views/backend/likes/edit.php" class="btn btn-warning disabled">Edit</a>
                                <a href="/views/backend/likes/delete.php" class="btn btn-danger disabled">Delete</a>
                            </td>
                            <td>Utilisation de Ajax si trop de temps ;)</td>
                        </tr>
                        <tr>
                            <td>Mots-clés</td>
                            <td>
                                <a href="/views/backend/keywords/list.php" class="btn btn-primary disabled">Liste</a>
                                <a href="/views/backend/keywords/create.php" class="btn btn-success disabled">Créer</a>
                                <a href="/views/backend/keywords/edit.php" class="btn btn-warning disabled">Edit</a>
                                <a href="/views/backend/keywords/delete.php" class="btn btn-danger disabled">Delete</a>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
            </div>
        </div>
    </div>

</div>
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
                            <td>Status</td>
                            <td>
                                <a href="/views/backend/status/list.php" class="btn btn-primary">List</a>
                                <a href="/views/backend/status/create.php" class="btn btn-success">Create new status</a>
                            </td>
                            <td>
                                <p>Exemple fournis s'y referer pour travailler</p>
                            </td>
                        </tr>
                        <tr>
                            <td>Members</td>
                            <td>
                                <a href="/views/backend/member/list.php" class="btn btn-primary">List</a>
                                <a href="/views/backend/member/create.php" class="btn btn-success">Create a new member</a>
                            </td>
                            <td>Attention, il faut aussi gérer la partie inscription/connection et la sécurité</td>
                        </tr>
                        <tr>
                            <td>Articles</td>
                            <td>
                                <a href="/views/backend/article/list.php" class="btn btn-primary">List</a>
                                <a href="/views/backend/article/create.php" class="btn btn-success">Create a new article</a>

                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Thematiques</td>
                            <td>
                                <a href="/views/backend/thematiques/list.php" class="btn btn-primary disabled">List</a>
                                <a href="/views/backend/thematiques/create.php" class="btn btn-success disabled">Create</a>
                                <a href="/views/backend/thematiques/edit.php" class="btn btn-warning disabled">Edit</a>
                                <a href="/views/backend/thematiques/delete.php" class="btn btn-danger disabled">Delete</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Comments</td>
                            <td>
                                <a href="/views/backend/comment/list.php" class="btn btn-primary">List</a>
                                <a href="/views/backend/comment/create.php" class="btn btn-success">Create</a>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Likes</td>
                            <td>
                                <a href="/views/backend/likes/list.php" class="btn btn-primary disabled">List</a>
                                <a href="/views/backend/likes/create.php" class="btn btn-success disabled">Create</a>
                                <a href="/views/backend/likes/edit.php" class="btn btn-warning disabled">Edit</a>
                                <a href="/views/backend/likes/delete.php" class="btn btn-danger disabled">Delete</a>
                            </td>
                            <td>Utilisation de Ajax si trop de temps ;)</td>
                        </tr>
                        <tr>
                            <td>Keywords</td>
                            <td>
                                <a href="/views/backend/keywords/list.php" class="btn btn-primary disabled">List</a>
                                <a href="/views/backend/keywords/create.php" class="btn btn-success disabled">Create</a>
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
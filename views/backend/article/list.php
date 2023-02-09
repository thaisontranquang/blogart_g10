<?php

include '../../../header.php'; // contains the header and call to config.php

//Security check
//Level 1 mean administator in DB
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
} 

//Load all articles
$articles = sql_select("ARTICLE", "*");
?>

<!-- Bootstrap default layout to display all article in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Article</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Identifiant</th>
                        <th>Nom</th>
                        <?php 
                        if (check_access(1)) {
                            echo('<th>Actions</th>');}?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article) { ?>
                        <tr>
                            <td><?php echo $article['numArt']; ?></td>
                            <td><?php echo $article['libTitrArt']; ?></td>
                            <?php 
                        if (check_access(1)) {
                            echo('<td>
                                <a href="update.php?numArt=' . $article['numArt'] . '"class="btn btn-primary">Editer</a>
                                <a href="delete.php?numArt=' . $article['numArt'] . '"class="btn btn-danger">Suppression</a>');}?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php 
                        if (check_access(1)) {
                            echo('<a href="create.php" class="btn btn-success">Créer</a>');}?>
        </div>
    </div>

<?php
include '../../../footer.php'; // contains the footer
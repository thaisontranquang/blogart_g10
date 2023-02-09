<?php

include '../../../header.php'; // contains the header and call to config.php

//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} 

//Load all thematics
$thematics = sql_select("THEMATIQUE", "*");
?>

<!-- Bootstrap default layout to display all thematic in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Thématique</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Identifiant</th>
                        <th>Nom</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($thematics as $thematic) { ?>
                        <tr>
                            <td><?php echo $thematic['numThem']; ?></td>
                            <td><?php echo $thematic['libThem']; ?></td>
                            <td>
                                <a href="update.php?numThem=<?php echo $thematic['numThem']; ?>" class="btn btn-primary">Editer</a>
                                <a href="delete.php?numThem=<?php echo $thematic['numThem']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Créer</a>
        </div>
    </div>

<?php
include '../../../footer.php'; // contains the footer
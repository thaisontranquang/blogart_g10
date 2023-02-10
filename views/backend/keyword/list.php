<?php

include '../../../header.php'; // contains the header and call to config.php

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all keywords
$keywords = sql_select("MOTCLE", "*");
?>

<!-- Bootstrap default layout to display all keyword in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Mot clés</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Identifiant</th>
                        <th>Nom</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($keywords as $keyword) { ?>
                        <tr>
                            <td><?php echo $keyword['numMotCle']; ?></td>
                            <td><?php echo $keyword['libMotCle']; ?></td>
                            <td>
                                <a href="update.php?numMotCle=<?php echo $keyword['numMotCle']; ?>" class="btn btn-primary">Editer</a>
                                <a href="delete.php?numMotCle=<?php echo $keyword['numMotCle']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Créer</a>
        </div>
    </div>
    </div>
<?php
include '../../../footer.php'; ?>
<?php

include '../../../header.php'; // contains the header and call to config.php

//Security check
//Level 1 mean administator in DB
if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} 

//Load all statuses
$statuses = sql_select("STATUT", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Statuts</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Identifiant</th>
                        <th>Nom</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($statuses as $status) { ?>
                        <tr>
                            <td><?php echo $status['numStat']; ?></td>
                            <td><?php echo $status['libStat']; ?></td>
                            <td>
                                <a href="update.php?numStat=<?php echo $status['numStat']; ?>" class="btn btn-primary">Editer</a>
                                <a href="delete.php?numStat=<?php echo $status['numStat']; ?>" class="btn btn-danger">Supprimer</a>
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
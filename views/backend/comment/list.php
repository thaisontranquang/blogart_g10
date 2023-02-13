<?php

include '../../../header.php'; // contains the header and call to config.php

//Security check
//Level 1 mean administator in DB
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
} 

//Load all statuses
$comments = sql_select("COMMENT", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Commentaires</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Numéro du commentaire</th>
                        <th>Date de création du commentaire</th>
                        <th>Contenu du commentaire</th>
                        <th>Validation modérateur</th>
                        <th>Dernière modification du commentaire</th>
                        <th>Commentaire négatif ?</th>
                        <th>N° article</th>
                        <th>N° membre</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($comments as $comment) { ?>
                        <tr>
                            <td><?php echo $comment['numCom']; ?></td>
                            <td><?php echo $comment['dtCreCom']; ?></td>
                            <td><?php echo $comment['libCom']; ?></td>
                            <td><?php echo $comment['attModOK']; ?></td>
                            <td><?php echo $comment['dtModCom']; ?></td>
                            <td><?php echo $comment['notifComKOAff']; ?></td>
                            <td><?php echo $comment['numArt']; ?></td>     
                            <td><?php echo $comment['numMemb']; ?></td>
                            <td>
                                <a href="edit.php?numCom=<?php echo $comment['numCom']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numCom=<?php echo $comment['numCom']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php 
                        if (check_access(1)) {
                            echo('<a href="create.php" class="btn btn-success">Create</a>');}?>
        </div>
    </div>
    </div>
<?php
include '../../../footer.php'; // contains the footer
<?php

include '../../../header.php'; // contains the header and call to config.php

//Security check
//Level 1 mean administator in DB
if (!check_access(2)) {
    header('Location: /'); //Redirect to home
    exit();
} 

//Load all statuses
$members = sql_select("MEMBRE", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Membres</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Identifiant du membre</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Pseudo</th>
                        <?php 
                        if (check_access(1)) {
                            echo('<th>Mot de passe</th>');}?>
                        <th>Email</th>
                        <th>Date de création</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($members as $member) { 
                        ?>
                        <tr>
                            <td><?php echo $member['numMemb']; ?></td>
                            <td><?php echo $member['prenomMemb']; ?></td>
                            <td><?php echo $member['nomMemb']; ?></td>
                            <td><?php echo $member['pseudoMemb']; ?></td>
                            <?php 
                        if (check_access(1)) {?>
                            <td><?php echo (substr($member['passMemb'], 0, 20)); ?></td>
                            <td><?php echo $member['eMailMemb']; ?></td>
                            <td><?php echo $member['dtCreaMemb']; ?></td>     
                            <td><?php echo $member['numStat']; ?></td>
                            <?php 
                        }?>
                            <td>
                            <?php 
                        if (check_access(1)) {?>
                            <a href="edit.php?numMemb=<?php echo $member['numMemb']; ?>" class="btn btn-primary">Editer</a>
                                <a href="delete.php?numMemb=<?php echo $member['numMemb']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                            <?php }?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Créer</a>
        </div>
    </div>
    </div>
<?php
include '../../../footer.php'; // contains the footer
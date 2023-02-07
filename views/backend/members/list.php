<?php

include '../../../header.php'; // contains the header and call to config.php

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all statuses
$members = sql_select("MEMBRE", "*");
?>

<!-- Bootstrap default layout to display all status in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Status</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Pseudo</th>
                        <th>Password</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($members as $members) { ?>
                        <tr>
                            <td><?php echo $status['prenomMemb']; ?></td>
                            <td><?php echo $status['nomMemb']; ?></td>
                            <td><?php echo $status['pseudoMemb']; ?></td>
                            <td><?php echo $status['passMemb']; ?></td>
                            <td><?php echo $status['eMailMemb']; ?></td>
                            <td>
                                <a href="update.php?numStat=<?php echo $status['numStat']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numStat=<?php echo $status['numStat']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>

<?php
include '../../../footer.php'; // contains the footer
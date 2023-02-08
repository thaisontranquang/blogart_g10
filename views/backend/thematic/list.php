<?php

include '../../../header.php'; // contains the header and call to config.php

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all thematics
$thematics = sql_select("THEMATIQUE", "*");
?>

<!-- Bootstrap default layout to display all thematic in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Thematics</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($thematics as $thematic) { ?>
                        <tr>
                            <td><?php echo $thematic['numThem']; ?></td>
                            <td><?php echo $thematic['libThem']; ?></td>
                            <td>
                                <a href="update.php?numThem=<?php echo $thematic['numThem']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numThem=<?php echo $thematic['numThem']; ?>" class="btn btn-danger">Delete</a>
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
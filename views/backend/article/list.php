<?php

include '../../../header.php'; // contains the header and call to config.php

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

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
                        <th>Id</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article) { ?>
                        <tr>
                            <td><?php echo $article['numStat']; ?></td>
                            <td><?php echo $article['libStat']; ?></td>
                            <td>
                                <a href="update.php?numStat=<?php echo $article['numStat']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numStat=<?php echo $article['numStat']; ?>" class="btn btn-danger">Delete</a>
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
<?php require_once '../../header.php';
sql_connect();

$articles = sql_select("ARTICLE", "*");
?>


<?php require_once '../../footer.php';

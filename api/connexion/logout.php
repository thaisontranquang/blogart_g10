<?php

require_once '../../header.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

header('Location: ../../../index.php');

require_once '../../footer.php';
?>
<?php

if (isset($_POST["login-btn"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once "database-server.php";
    require_once "iterate.php";

    if (emptyLogin($email, $password) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    allowUser($conn, $email, $password);
}
else {
    header("location: ../login.php");
    exit();
}
<?php
session_start();
if (isset($_POST['login-btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    require_once "database-server.php";
    require_once "iterate.php";

    if (emptyLogin($email, $password) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    $user = allowUser($conn, $email, $password);

    if ($user) {
        $_SESSION['userid'] = $user['usersId'];
        $_SESSION['useremail'] = $user['usersEmail'];
        header('location: ../homepage.php');
        exit();
    } else {
        header('location: ../login.php?error=accinuser');
        exit();
    }
} else {
    header('location: ../login.php');
    exit();
}
?>

<!--php
if (isset($_POST['login-btn'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once "database-server.php";
    require_once "iterate.php";

    if (emptyLogin($email, $username, $password) !== false) {
        header("Location: ../login.php?error=emptyinput");
        exit();
    }

    $user = allowUser($conn, $email, $username, $password);
    if ($user) {
        session_start();
        $_SESSION['userid'] = $user['usersId'];
        $_SESSION['username'] = $user['usersName'];
        $_SESSION['useremail'] = $user['usersEmail'];
        header("Location: ../homepage.php");
        exit();
    } else {
        header("Location: ../login.php?error=tryagain");
        exit();
    }
} else {
    header("Location: ../login.php");
    exit();
}
?>

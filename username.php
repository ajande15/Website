<?php
session_start();

$username = $_SESSION['username'] ?? '';

if (empty($username)) {
    header("Location: login.php");
    exit();
}
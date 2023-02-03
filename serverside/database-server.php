<?php

$sName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "website";

$conn = mysqli_connect($sName, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Sorry, cannot connect, try again later " . mysqli_connect_error());
}
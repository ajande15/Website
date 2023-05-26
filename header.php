<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <title>Chatt</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d5b1d340c5.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/forms.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/homepage.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" type="image/png" href="Images/favicon.png">
</head>
<body>
<header>
<div class="navigation-bar l-s-navbar">
        <div class="left">
            </div>
        <div class="center">
        </div>
        <div class="right">
            <?php
                if(isset($_SESSION["userid"])) {
                    echo "<a href='account.php' class='account'>Account</a>";
                    echo "<a href='serverside/logout-server.php' class='logout'>Logout</a>";
                }
                else {
                    echo "<a href='login.php' class='login'>Login</a>";
                    echo "<a href='signup.php' class='signup'>Signup</a>";
                }
                ?>
        </div>

        <div class="vertical-navbar" id="vertical-navbar">
        <div class="user">
            <div class="user-content"></div>
        </div>
        <div class="links">
            <div class="active-container">
            <li><a href="">Home</a></li>
            <div class="active circle"></div>
            </div>
            <div class="active-container">
            <li><a href="">Notifications</a></li>
            </div>
            <div class="active-container">
            <li><a href="">Watch Now</a></li>
            </div>
            <div class="active-container">
            <li><a href="">Library</a></li>
            </div>
            <div class="active-container">
            <li><a href="">Settings</a></li>
            </div>
            <div class="active-container">
            <li><a href="">Help</a></li>
            </div>
        </div>
        <div class="direct-links">
        <a href="" class="logout">Logout</a>
        <a href="" class="account">Account</a>
        </div>
        </div>

    </div>
    <style>

    .right .account {
    text-decoration:none;
    font-size:14px;
    font-family:"Poppins",sans-serif;
    padding-top:6px;
    padding-bottom:6px;
    padding-right:25px;
    padding-left:25px;
    background:rgba(73, 12, 216, 0.6);
    color:#fff;
    border-radius:4px;
    margin:10px;
    }

    .right .logout {
    text-decoration:none;
    background:rgb(221, 3, 39);
    color:#fff;
    font-family:"Poppins",sans-serif;
    padding-top:6px;
    padding-bottom:6px;
    padding-left:25px;
    padding-right:25px;
    font-size:14px;
    border-radius:4px;
    margin:10px;
    }
    
    </style>
</header>

    
<!--For login and Signup and pages-->
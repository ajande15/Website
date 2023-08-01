<!--php
session_start();
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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
<div class="navigation-bar">
        <div class="left">
            <i class="fa-solid fa-bars" id="hamburger-menu"></i>
            <div class="logo">
                <a href="homepage.php">
                    <h1>C<span class="hatt">hatt</span></h1>
                </a>
            </div>
        </div>
        <div class="center">
            <input type="search" placeholder="Search">
            <i class="fa-solid fa-microphone"></i>
        </div>
        <div class="right">
            <a href="upload.php"><button class="upload">Upload</button></a>
            <div class="bell-wrapper">
            <div class="dot-for-bell"></div>
            <i class="fa-solid fa-bell" id="bell">
            <div class="notifications" id="notifications"></div>
            </i>
            </div>
            <div class="profile-image" id="profile-image">
            <div class="profile-options" id="profile-options">
            
            </div>
            </div>

        </div>

        <div class="vertical-navbar" id="vertical-navbar">
        <div class="user">
            <div class="user-content"></div>
        </div>
        <div class="links">
            <div class="active-container">
            <li><a href="homepage.php">Home</a></li>
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
            <li><a href="account.php">Account</a></li>
            </div>
            <div class="active-container">
            <li><a href="">Settings</a></li>
            </div>
            <div class="active-container upload-link">
            <li><a href="upload.php">Upload</a></li>
            </div>
        </div>
        <div class="direct-links">
            <?php
            if(isset($_SESSION["userid"])) {
            echo "<a class='logout' href='serverside/logout-server.php'>Logout</a>";
            } else {
                echo "<a href='login.php' class='login'>Login</a>";
                echo "<a href='signup.php' class='signup'>Signup</a>";
            }
           ?>
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

<?php
include_once "footer.php";
?>

<!--Inside of the website-->

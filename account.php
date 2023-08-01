<?php
session_start();
include_once "safe-header.php";

if (isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])) {
    $useremail = $_SESSION['useremail'];
} else {
    $useremail = 'User';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alternative Account Page</title>
</head>
<body>
    
<div class="upload-container">
    <p class="useremail">Welcome, <?php echo htmlspecialchars($useremail); ?></p>
    <div class="account-options">
        <a href="update-profile.php" class="update-profile">Update Profile</a>
        <a href="serverside/logout-server.php" class="logout-btn">Logout</a>
    </div>
    <div>    
    </div>
</div>

<?php
include_once "footer.php";
?>

<!--
Things to add to the profile page:
Profile Picture

Name and Username

Bio/About:

Social Media Links

Location

Personal Interests

Followers/Friends Count

Activity/Posts

Edit Profile/Settings
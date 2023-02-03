<?php

if (isset($_POST["signup-btn"])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmpassword'];

    //Password Strength Validation

         $upperCase = preg_match('@[A-Z]@', $password);
         $number = preg_match('@[0-9]@', $password);
         $specialChar = preg_match('@[^\w]@', $password);
         $lowerCase = preg_match('@[a-z]@', $password);
     
         if (!$upperCase || !$lowerCase || !$number || !$specialChar || strlen($password) < 10) {
             echo 'Weak';
         } else {
             echo 'Strong';
         }
        

    //End Password Validation


    require_once 'database-server.php';
    require_once 'iterate.php';

if (emptySignup($email, $password, $confirmPassword) !== false) {
    header("location: ../signup.php?error=emptyinput");
    exit();
}

if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidemail");
    exit();
}

if (checkPasswords($password, $confirmPassword) !== false) {
    header("location: ../signup.php?error=checkpasswords");
    exit();
}

if (emailExists($conn, $email) !== false) {
    header("location: ../signup.php?error=emailtaken");
    exit();
}

createAccount($conn, $email, $password);

}

else {
    header("location: ../signup.php");
    exit();
}
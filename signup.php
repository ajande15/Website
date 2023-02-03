<?php
require "header.php";
?>

<div class="wrapper">
   <a href="login.php"><i class="fa-solid fa-arrow-left"></i></a>
        <div class="website-container">
           <div class="title">
              <h1>Chatt</h1>
              <h2>Signup</h2>
              <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<span class='empty-input tperror'>Please fill in all fields.</span>";
            } else if ($_GET["error"] == "tryagain") {
                echo "<span class='try-again tperror'>An error has occurred, try again later.</span>";
            } else if ($_GET["error"] == "signupsuccess") {
                echo "<span class='signup-success tperror'>Your signed up, please return to the login page.</span>";
            }
        }
        ?>
           </div>
           <form action="serverside/signup-server.php" method="post"> 
           <div class="email-wrapper">
              <input class="ls-inputs" type="text" name="email" placeholder="Email">
              <?php
        if (isset($_GET["error"])) {
         if ($_GET["error"] == "emailtaken") {
                echo "<span class='emailerrors'>This email is already in use</span>";
        }  else if ($_GET["error"] == "invalidemail") {
                echo "<span class='emailerrors'>Incorrect email format.</span>";
            }
        }
        ?>
           </div>
           <div class="password-wrapper">
              <input class="ls-inputs" type="password" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
              <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "checkpasswords") {
                echo "<span class='checkpwd'>Passwords don't match</span>";
            } 
        }
        ?>
           </div>
           <div class="password-wrapper">
              <input class="ls-inputs" type="password" name="confirmpassword" placeholder="Confirm Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
           </div>
           <div class="forgot-section">
              <a href="">Forgot Password?</a>
           </div>
           <div class="submit-btn">
           <button type="submit" class='submit' name="signup-btn">Signup</button>
           </div>
           <div class="or-section">
            <p>Or Use</p>
            <!--Google Button-->
            <div id="g_id_onload"
         data-client_id="YOUR_GOOGLE_CLIENT_ID"
         data-login_uri="https://your.domain/your_login_endpoint"
         data-auto_prompt="false">
      </div>
      <div class="g_id_signin"
         data-type="standard"
         data-size="large"
         data-theme="outline"
         data-text="_in_with"
         data-shape="rectangular"
         data-logo_alignment="left">
      </div>
      <!--End Google Button-->
            </div>
          </form>
           <div class="footer">
              <a href="">About</a>
              <a href="">Contact</a>
              <a href="">Terms of Services</a>
           </div>
        </div>
     </div>

<?php 
require "footer.php";
?>
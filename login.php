<?php
require "header.php";
?>
   <div class="wrapper">
      <div class="website-container">
         <div class="title">
            <h1>Chatt</h1>
            <h2>Login</h2>
         </div>
         <div class="create-account-section">
            <p>Don't have an account? <a href="signup.php">Signup</a></p>
         </div>
         <form action="serverside/login-server.php" method="post"> 
         <div class="email-wrapper">
            <input type="text" name="email" class='ls-inputs' placeholder="Email">
         </div>
         <div class="password-wrapper">
            <input type="password" name="password" class='ls-inputs' placeholder="Password">
         </div>
         <div class="forgot-section">
            <a href="">Forgot Password?</a>
         </div>
         <div class="submit-btn">
         <button class="submit" type="submit" name="login-btn">Login</button>
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
         data-text="sign_in_with"
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
/*require*/
include_once "footer.php";
?>
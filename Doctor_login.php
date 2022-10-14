<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Doctor Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    </head>

    <body>
        <form class="Doctor_form-login" action="PHP/Doctor_login.inc.php" method = "post">

        <!--Email-->
            <label for="email">Email</label><br><br>
            <input type="text" id = "email" name = "email"><br><br>

        <!--Password-->
            <label for="password">Password</label><br><br>
            <input type="password" id = "password" name="password"><br><br>

          <!--Login-->
            <button type="submit" name="Doctor_login-submit" id ="Doctor_login-submit">Sign In</button>
        
        </form>

        <h3>Don't have an Account? Sign Up now!
            </h3>
        
        <form action="Doctor_signup.php">
            <button type="submit" name="Doctor_login-page-signup-button">Sign Up</button>
        </form>
    </body>
</html>
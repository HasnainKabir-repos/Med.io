<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <title>
            Login
        </title>
    </head>

    <body>
        <form class="form-login" action="PHP/login.inc.php" method = "post">

        <!--Email-->
            <label for="email">Email</label><br><br>
            <input type="text" id = "email" name = "email"><br><br>

        <!--Password-->
            <label for="password">Password</label><br><br>
            <input type="password" id = "password" name="password"><br><br>

        <!--Login-->
            <button type="submit" name="login-submit" id ="login-submit">Sign In</button><br><br>
            
        
        </form>
        <form action="Recover_Password.php">
            <button type="submit" name="forgot_Password">Forgot Password</button>
        </form>
        <h3>Don't have an Account? Sign Up now!
            </h3>
        
        <form action="signup.php">
            <button type="submit" name="login-page-signup-button">Sign Up</button>
        </form>
    </body>
</html>
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
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
            <button type="submit" name="login-submit" id ="login-submit">Sign In</button><br>
        
        </form>
        <h3>Don't have an Account? Sign Up now!
            </h3>
        
        <form action="signup.php">
            <button type="submit" name="login-page-signup-button">Sign Up</button>
        </form>
    </body>
</html>
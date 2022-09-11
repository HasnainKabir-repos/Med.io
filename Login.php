<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
    </head>

    <body>
        <form class="form-login" action="PHP/login.php" method = "post">

        <!--Email-->
            <label for="email">Email</label><br>
            <input type="text" id = "email" name = "email"><br>

        <!--Password-->
            <label for="password">Password</label><br>
            <input type="password" id = "password" name="password"><br>

        <!--Login-->
            <button type="submit" name="login-submit" id ="login-submit">Sign In</button>
        
        <!--Signup-->
            <button type="submit" name="signup-page" id ="signup-page">Sign Up</button>
        </form>
    </body>
</html>
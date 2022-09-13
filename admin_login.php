<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin Login
        </title>
    </head>

    <body>
        <form class="Admin_form-login" action="PHP/Admin_login.inc.php" method = "post">

        <!--Email-->
            <label for="user">UserName</label><br><br>
            <input type="text" id = "user" name = "user"><br><br>

        <!--Password-->
            <label for="password">Password</label><br><br>
            <input type="password" id = "password" name="password"><br><br>

        <!--Login-->
            <button type="submit" name="Admin_login-submit" id ="Admin_login-submit">Sign In</button><br>
        
        </form>
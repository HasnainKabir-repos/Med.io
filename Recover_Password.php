<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <title>
            Recover Password
        </title>
    </head>

    <body>
        <form class="RecoverPassword" action="PHP/forgotPassword.php" method = "post">

        <!--Email-->
            <label for="email">Email</label><br><br>
            <input type="text" id = "email" name = "email"><br><br>


        <!--Recover-->
            <button type="submit" name="Recover_password" id ="Recover_password">Recover</button><br><br>
        
        </form>

    </body>
</html>
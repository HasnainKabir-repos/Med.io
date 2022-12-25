<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="icon" href="./assets/images/med-io-img.png">
        <title>
            Recover Password
        </title>
    </head>

    <body>
        <form class="RecoverPassword" action="./PHP/forgotPassword.php" method = "post">

        <!--Email-->
            <label for="email">Email</label><br><br>
            <input type="text" id = "email" name = "email"><br><br>


        <!--Recover-->
            <button type="submit" name="recover_password" id ="recover_password">Recover</button><br><br>
        
        </form>

    </body>
</html>
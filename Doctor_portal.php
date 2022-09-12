<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <form action="PHP/Doctor_login.inc.php" method="post">
            <button type = "submit" name = "Doctor_logout-submit">Logout</button>
        </form>
    </head>

    <body>
        <?php
            if(isset($_SESSION['DoctorEmail'])){
                echo '<h3>Welcome</h3>';
            }else{
                echo '<h3>LoginFailed</h3>';
            }
        ?>

        
    </body>
</html>
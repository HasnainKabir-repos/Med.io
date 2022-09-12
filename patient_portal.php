<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <title></title>

        <form action="PHP/login.inc.php" method="post">
            <button type = "submit" name = "logout-submt">Logout</button>
        </form>
    </head>

    <body>
        <?php
            if(isset($_SESSION['patientEmail'])){
                echo '<h3>Welcome</h3>';
            }else{
                echo '<h3>LoginFailed</h3>';
            }
        ?>

        
    </body>
</html>
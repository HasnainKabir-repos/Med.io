<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
        <title>
            Admin Portal
        </title>
    </head>

    <body>
    <?php
            if(isset($_SESSION['adminUser'])){
                echo '<h3>Welcome</h3>';
            }else{
                echo '<h3>Login Failed</h3>';
            }
        ?>
    </body>
</html>
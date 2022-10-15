<?php
    session_start();
?>
<!Doctype html>
<html>
    <head>
        <title>Update Password</title>
    </head>
    <body>
    <form class= "Update" action="updatePassword.php" method='POST'>

            <label for="password">Password</label><br><br>
            <input type="password" id = "password" name="password"><br><br>
            <button type='submit' name='updatePassword'>Update</button>
            
    </form>
    </body>
</html>
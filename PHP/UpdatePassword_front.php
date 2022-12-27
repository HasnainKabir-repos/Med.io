<?php
    session_start();
?>
<?php
$url = $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);

// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);
$_SESSION['Email']=$params['key'];


$_SESSION['reset_token'] = $params['reset_token'];
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
            <button type='submit' name='update_Password'>Update</button>
            
    </form>
    </body>
</html>
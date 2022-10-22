<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="./assets/styles/admin_font.css">
        <title>
            Login
        </title>
    </head>

    <body>
        <div class ="container">

            <div class = "form-control">
                <div class= "form-login">
                <form class="form-login" action="PHP/login.inc.php" method = "post">

                <!--Email-->
                    <div class="entry">
                    <label for="email">Email</label><br><br>

                        <div class="fields">
                        <input type="text" id = "email" name = "email"><br><br>
                        </div>
                <!--Password-->
                        <label for="password">Password</label><br><br>

                        <div class="fields">
                        <input type="password" id = "password" name="password"><br><br>
                        </div>
                    </div>
                <!--Login-->
                    <button type="submit" name="login-submit" id ="login-submit">Sign In</button><br><br>
                    

                </form>
                </div>

                <div class="form-redirect">

                
                <form action="Recover_Password.php">
                    <button type="submit" name="forgot_Password">Forgot Password</button>
                </form>
                <h3>Don't have an Account? Sign Up now!
                    </h3>

                <form action="signup.php">
                    <button type="submit" name="login-page-signup-button">Sign Up</button>
                </form>
                </div>
            </div>
        </div>
        
    </body>
</html>

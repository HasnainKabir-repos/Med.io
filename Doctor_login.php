<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Doctor Login</title>
        <meta charset="utf-8">
    <meta name="viewport" content = "width=device-width initial-scale=1" >
    
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    <link rel="icon" href="./assets/images/med-io-img.png">
    <!--CSS FILE--->
    <link rel="stylesheet" href="assets/styles/login_styles.css">
    <link rel="stylesheet" href="./assets/styles/admin_font.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
    </head>

    <body>

        <div class = "container-fluid">
            <div class = "center">
                <div class = "heading">
                    <h3>Login as a doctor</h3>
                </div>

                <div class = "form-content">
                    <form class="Doctor_form-login" action="PHP/Doctor_login.inc.php" method = "post">

                    <div class  = "placeholders">
                        <!--Email-->
                        
                        <input type="text" id = "email" name = "email" placeholder="Email"><br><br>

                    <!--Password-->
                        
                        <input type="password" id = "password" name="password" placeholder="Password"><br><br>
                    </div>

                      <!--Login-->
                    <button type="submit" name="Doctor_login-submit" id ="Doctor_login-submit">Sign In</button>
                    </form>
                    <hr class = "my-4">
                    <div class = "heading2">
                        <h4>Sign Up as Doctor
                        </h4>
                    </div>

                    <div class = "signup-redirect">
                    <form action="Doctor_signup.php">
                        <button type="submit" name="Doctor_login-page-signup-button">Sign Up</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        
    </body>
</html>
<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content = "width-device-width initial-scale=1" >
    
    <style>
    .content { 
        max-width: 500px;
        margin: auto;
     }
    </style>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>


    <title>Admin Login Page</title>
    </head>
    <body style="background-image: url(assets/images/admin_login_background.jpg); background-repeat:no-repeat; background-size: cover;">
        <div style="margin-top : 60px;"></div>

        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    
                    <div class="col-md-6 jumbotron">
                    <form class="Admin_form-login" action="./PHP/Admin_login.inc.php" method = "post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="user" class="form-control" autocomplete="off" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter Password">
                            </div>

                            <div style="margin-top : 30px;"></div>

                            <button type="submit" name="Admin_login-submit" id="Admin_login-submit" class="btn btn-success">Log In</button>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </body>
</html>
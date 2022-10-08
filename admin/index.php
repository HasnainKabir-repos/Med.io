<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
     
    <title>Admin Login Page</title>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">

    
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-info bg-info">
            <h5 class="text-white">Admin Panel</h5>
            <div class="mr-auto"></div>

            <ul class="navbar-nav">

                    <li class="nav-item"><a href="#" class="nav-link text-white">admin</a></li>
                    <li class="nav-item"><a href="/Med.io/admin_login.php" class="nav-link text-white">Log Out</a> </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2" style="margin-left:-30px";>

            <!--Side Navigation-->
                         <?php
                           include("sidenav.php")
                         ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
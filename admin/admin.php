<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Manage Admins</title>
        
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
      
    <body style="background-color:white;">
        <?php
        include("../SQL/dbConnect.php")
        ?>
        <nav class="navbar navbar-expand-lg navbar-info bg-dark">
            <img src="../assets/images/admin_logo.png" height="32px" width="32px" style="padding:5px;" />
            <h5 class="text-white">Admin Panel</h5>
            <div class="mr-auto"></div>

            <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link text-white">Admin</a></li>
                    <li class="nav-item"><a href="/Med.io/admin_login.php" class="nav-link text-white">Logout</a> </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2" style="margin-left:-30px";>

            <!--Side Navigation-->
                         <?php
                           include("./sidenav.php");
                           include("../SQL/dbConnect.php")

                         ?>
                    </div>
                    <div class="col-md-10">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="text-center">All Admin</h5>

                                    <?php
                                     $ad = $_SESSION['admin'];
                                     $query = "SELECT * FROM admin WHERE User !='$ad'";
                                     $res = mysqli_query($conn,$query);
                                     $output =
                                     '<table class="table table-bordered">
                                     <th>Username</th>
                                     <th style="width:10%;">Action</th>
                                     <tr>
                                     ';

                                     if(mysqli_num_rows($res)< 1){
                                        $output ="<tr><td colspan='2' class='text-center'>No New Admin</td></tr>";
                                     }

                                     while($row = mysqli_fetch_array($res)){
                                        $user = $row['User'];
                                        $output .="
                                        <tr>
                                            <td>$user</td>
                                            <td>
                                                <a href='admin?user=$user'><button user='$user' class='btn btn-danger remove'>Remove</button></a>
                                            </td>";
                                     }
                                     $output .="
                                        </tr>
                                     </table>";

                                     echo $output;

                                     if(isset($_GET['user'])){
                                        $user = $_GET['user'];

                                        $query = "DELETE FROM admin WHERE User='$user'";
                                        mysqli_query($conn,$query);
                                        header("Location: ../admin/admin.php");
                                     }
                                    ?>
            

                                </div>
                                <div class="col-md-6">

                                <?php

                                if(isset($_POST['add'])){
                                    $user = $_POST['user'];
                                    $password = $_POST['password'];

                                    $error = array();

                                    if(empty($user)){
                                        $error['u'] = "Enter Admin Username!";
                                    }
                                    else if(empty($password)){
                                        $error['u'] = "Enter Admin Password!";
                                    }

                                    if(count($error)==0){
                                        $q = "INSERT INTO admin(User,Password) VALUES('$user','$password')";
                                        $result = mysqli_query($conn,$q);
                                        header("Location: ../admin/admin.php");
                                    }
                                }

                                if(isset($error['u'])){
                                    $er = $error['u'];

                                    $show = "<h6 class='text-center alert alert-danger'>$er</h6>";
                                }
                                else{
                                    $show = "";
                                }
                                ?>
                                    <h5 class="text-center">Add Admin</h5>
                                    <form method="post" enctype="multipart/form-data">
                                        <div>
                                            <?php echo $show; ?>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="user" class="form-control" placeholder="Enter Admin Username">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Enter Admin Password">
                                        </div>
                                        <input type="submit" name="add" value="Add New Admin" class="btn btn-success">
                                    </form>
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
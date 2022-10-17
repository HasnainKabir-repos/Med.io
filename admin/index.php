<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
     
    <title>Admin Dashboard</title>

    <link rel="stylesheet" type="text/css" href="../assets/styles/admin_font.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


    
    </head>

    <body style="background-color:darkslategray;">
        <?php
        include("../SQL/dbConnect.php");
        ?>
        <nav class="navbar navbar-expand-lg navbar-info bg-dark">
            <img src="../assets/images/admin_logo.png" height="32px" width="32px" style="padding:5px;" />
            <h5 class="text-white">Admin Panel</h5>
            <div class="mr-auto"></div>

            <ul class="navbar-nav">
                <?php 
                  if(isset($_SESSION['adminUser'])){
                    $user = $_SESSION['adminUser'];
                    echo '
                    <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a></li>
                    <li class="nav-item"><a href="/Med.io/admin_login.php" class="nav-link text-white">Logout</a> </li>
                    ';
                  }
                ?>  
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2" style="margin-left:-30px";>

            <!--Side Navigation-->
                         <?php
                           include("./sidenav.php")
                         ?>
                    </div>
                    <div class="col-md-10 ">


            <!--Dashboard and Cardview-->

                    <div class="col-md-12 my-5">
                        <div class="row">

                        <!--Total Admin-->

                            <div class="col-md-3 bg-info mx-2" style="height:130px; border-radius:10px;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        
                                        <?php
                                        $ad = mysqli_query($conn,"SELECT * FROM admin");
                                        $num = mysqli_num_rows($ad);
                                        ?>

                                        <h5 class="my-2 text-white" style="font-size:30px;"><?php echo $num; ?></h5>
                                        <h5 class="text-white">Total</h5>
                                        <h5 class="text-white">Admins</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="../admin/admin.php"><i class="fa fa-solid fa-user-shield fa-3x my-4" style="color:azure;"></i></a>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <!--Total Doctor-->

                            <div class="col-md-3 bg-info mx-2" style="height:130px; border-radius:10px;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                                        <h5 class="text-white">Total</h5>
                                        <h5 class="text-white">Doctors</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="../admin/doctor.php"><i class="fa fa-solid fa-user-doctor fa-3x my-4" style="color:azure;"></i></i></a>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <!--Total Patient-->
                            <div class="col-md-3 bg-info mx-2" style="height:130px; border-radius:10px;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <?php
                                        $p = mysqli_query($conn,"SELECT * FROM patient");
                                        $pp = mysqli_num_rows($p);
                                        ?>
                                        <h5 class="my-2 text-white" style="font-size:30px;"><?php echo $pp; ?></h5>
                                        <h5 class="text-white">Total</h5>
                                        <h5 class="text-white">Patients</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="../admin/patient.php"><i class="fa fa-solid fa-hospital-user fa-3x my-4" style="color:azure;"></i></a>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <!--Total Report-->

                            <div class="col-md-3 bg-danger mx-2 my-3" style="height:130px; border-radius:10px;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                                        <h5 class="text-white">Total</h5>
                                        <h5 class="text-white">Reports</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="../admin/report.php"><i class="fa fa-solid fa-file-contract fa-3x my-4" style="color:azure;"></i></a>

                                    </div>
                                </div>
                            </div>
                            </div>


                            <!--Total Job Request-->

                            <div class="col-md-3 bg-warning mx-2 my-3" style="height:130px; border-radius:10px;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="my-2 text-black" style="font-size:30px;">0</h5>
                                        <h5 class="text-black">Total</h5>
                                        <h5 class="text-black">Requests</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#"><i class="fa fa-solid fa-people-group fa-3x my-4" style="color:azure;"></i></a>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <!--Total Appointment-->

                            <div class="col-md-3 bg-success mx-2 my-3" style="height:130px; border-radius:10px;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                    <?php
                                        $p = mysqli_query($conn,"SELECT * FROM requests");
                                        $pp = mysqli_num_rows($p);
                                        ?>
                                        <h5 class="my-2 text-black" style="font-size:30px;"><?php echo $pp; ?></h5>
                                        <h5 class="text-black">Total</h5>
                                        <h5 class="text-black">Appointments</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="../admin/appointment.php"><i class="fa fa-solid fa-person-circle-plus fa-3x my-4" style="color:azure;"></i></a>
                                    </div>
                                </div>
                            </div>
                            </div>
                      
                            
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>
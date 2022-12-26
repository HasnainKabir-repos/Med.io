<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Manage Pending Doctor Request</title>

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

<body>

    <body style="background-color:white;">
        <?php
        include("../SQL/dbConnect.php")
        ?>
        <nav class="navbar navbar-expand-lg navbar-info bg-info">
            <img src="../assets/images/doctor_logo2.png" height="40px" width="40px" style="padding:2px;" />
            <h5 class="text-white">Pending Doctor Requests</h5>
            <div class="mr-auto"></div>

            <ul class="navbar-nav">
                <?php
                if (isset($_SESSION['adminUser'])) {
                    $user = $_SESSION['adminUser'];
                    echo '
                    <li class="nav-item"><a href="#" class="nav-link text-white">' . $user . '</a></li>
                    <li class="nav-item"><a href="/Med.io/admin_login.php" class="nav-link text-white">Logout</a> </li>
                    ';
                }
                ?>
            </ul>

        </nav>

        <div class="container-fluid">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2" style="margin-left:-30px" ;>

                        <!--Side Navigation-->
                        <?php
                        include("./sidenav.php");
                        include("../SQL/dbConnect.php")

                        ?>
                    </div>
                    <div class="col-md-10">
                        <h4 class="text-center" style="font-family:Poppins;margin-top:25px;">Pending Doctor Requests</h4>
                        <!-- Alert message -->
                        <div id="add-alert" class="alert alert-success" style="display:none;">The Doctor is added</div>
                        <?php
                        $query = "SELECT * FROM doctor WHERE Approved = 0";
                        $res = mysqli_query($conn, $query);
                        $output = "
                                       <table class='table table-hover table-dark table-bordered'>
                                         <tr>
                                          <th style='text-align: center;'>ID</th>
                                          <th style='text-align: center;'>Name</th>
                                          <th style='text-align: center;'>Email</th>
                                          <th style='text-align: center;'>Age</th>
                                          <th style='text-align: center;'>Department</th>
                                          <th style='text-align: center;'>Institute</th>
                                          <th style='text-align: center;'>Gender</th>
                                          <th style='text-align: center;'>Action</th>
                                         </tr>
                                        ";
                        if (mysqli_num_rows($res) < 1) {

                            $output = "<h5 class='text-center' style='font-family:Poppins;'>No New Request</h5>";
                        }
                        while ($row = mysqli_fetch_assoc($res)) {
                            $user = $row['ID'];
                            $output .= "
                                           <tr>
                                             <td style='text-align: center;'>" . $user . "</td>
                                             <td style='text-align: center;'>" . $row['Name'] . "</td>
                                             <td style='text-align: center;'>" . $row['Email'] . "</td>
                                             <td style='text-align: center;'>" . $row['Age'] . "</td>
                                             <td style='text-align: center;'>" . $row['Department'] . "</td>
                                             <td style='text-align: center;'>" . $row['Instituitional_background'] . "</td>
                                             <td style='text-align: center;'>" . $row['Gender'] . "</td>
                                             <td style='margin-left:20px; text-align:center;'>
                                                <a href='pendingdoctor?user=$user'><button user='$user' class='btn btn-success add'>Add Doctor</button></a>
                                             </td>
                                           </tr>
                                         ";
                        }
                        $output .= "</table>";
                        echo $output;
                        if (isset($_GET['user'])) {
                            $user = $_GET['user'];
                            $query = "UPDATE doctor SET Approved = 1 WHERE ID = '$user'";
                            mysqli_query($conn, $query);
                            echo "<script>
                                     var searchParams = new URLSearchParams(location.search);
                                     if (searchParams.has('user')) {
                                        document.getElementById('add-alert').style.display = 'block';
                                        setTimeout(function() {
                                          document.getElementById('add-alert').style.display = 'none';
                                        }, 1000);
                                    }
                                  </script>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
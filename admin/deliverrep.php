<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Delivered Test Reports</title>
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

    <body style="background-color:light-blue;">
        <?php
        include("../SQL/dbConnect.php")
        ?>
        <nav class="navbar navbar-expand-lg navbar-info bg-info">
            <img src="../assets/images/report_logo.png" height="40px" width="40px" style="padding:2px;" />
            <h5 class="text-white">Delivered Test Reports</h5>
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
                        <h4 class="text-center my-3">Delivered Test Reports</h4>
                        <?php
                        $query = "SELECT * FROM servicesrequest
                                  where Status = 1";
                        $res = mysqli_query($conn, $query);
                        $output = "";
                        $output .= "

                        <table class='table table-hover table-dark table-bordered'>
                                         <tr>
                                          <th style='text-align: center;'>Request ID</th>
                                          <th style='text-align: center;'>Patient ID</th>
                                          <th style='text-align: center;'>Service Category</th>
                                          <th style='text-align: center;'>Date of Request</th>
                                         </tr>
                        ";

                        if (mysqli_num_rows($res) < 1) {
                            $output .= "
                            <tr>
                            <td class='text-center' colspan='5'>No Delivered Reports Yet</td>
                            </tr>
                            ";
                        }

                        while ($row = mysqli_fetch_array($res)) {
                            $output .= "
                                <tr>
                                <td style='text-align: center;'>" . $row['RequestID'] . "</td>
                                <td style='text-align: center;'>" . $row['PatientID'] . "</td>
                                <td style='text-align: center;'>" . $row['Service'] . "</td>
                                <td style='text-align: center;'>" . $row['Date'] . "</td>
                                </tr>
                                ";
                        }
                        $output .= "
                            </tr>
                            </table>
                            ";

                        echo $output;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
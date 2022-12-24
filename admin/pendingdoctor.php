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
            <img src="../assets/images/admin_logo.png" height="32px" width="32px" style="padding:5px;" />
            <h5 class="text-white">Pending Doctor Requests</h5>
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
                           include("./sidenav.php");
                           include("../SQL/dbConnect.php")

                         ?>
                    </div>
            
                                <div class="col-md-10">
                                    <h5 class="text-center" style="font-family:Poppins;margin-top:25px;">Pending Doctor Requests</h5>

                                    <?php
                                    $query = "SELECT * FROM doctor WHERE Approved = 0";
                                    $res = mysqli_query($conn, $query);

                                    // Initialize the table output
                                    $output = "
                                       <table class='table table-striped table-dark table-bordered'>
                                         <tr>
                                          <th>ID</th>
                                          <th>Name</th>
                                          <th>Email</th>
                                          <th>Age</th>
                                          <th>Department</th>
                                          <th>Institute</th>
                                          <th>Gender</th>
                                          <th>Action</th>
                                         </tr>
                                        ";

                                    // Check if the query returned any rows
                                    if (mysqli_num_rows($res) < 1) {
                                        // If there are no rows, display a message
                                        $output = "<h5 class='text-center' style='font-family:Poppins;'>No New Request</h5>";
                                    }

                                    // Fetch the rows from the result set as an associative array
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        // Store the ID of the doctor in a variable
                                        $user = $row['ID'];
                                        // Add a row to the table with the data from the database and the Add Doctor button
                                        $output .= "
                                           <tr>
                                             <td>" . $user . "</td>
                                             <td>" . $row['Name'] . "</td>
                                             <td>" . $row['Email'] . "</td>
                                             <td>" . $row['Age'] . "</td>
                                             <td>" . $row['Department'] . "</td>
                                             <td>" . $row['Instituitional_background'] . "</td>
                                             <td>" . $row['Gender'] . "</td>
                                             <td style='margin-left:20px;'>
                                                <a href='pendingdoctor?user=$user'><button user='$user' class='btn btn-success add'>Add Doctor</button></a>
                                             </td>
                                           </tr>
                                         ";
                                    }
                                    // Close the table
                                    $output .= "</table>";

                                    // Print the table
                                    echo $output;
                                    if (isset($_GET['user'])) {
                                        // If the parameter is set, store the value in a variable
                                        $user = $_GET['user'];

                                        // Update the 'Approved' column to 1 for the row with the specified ID
                                        $query = "UPDATE doctor SET Approved = 1 WHERE ID = '$user'";
                                        mysqli_query($conn, $query);
                                    }
                                    ?>

                                </div>
                        </div>
                    </div>
                </div>
    </body>
</html>
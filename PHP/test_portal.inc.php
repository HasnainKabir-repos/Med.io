<!DOCTYPE html>
<html>
<head>
<style>
table {

    border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>


<?php

    session_start();
if(isset($_POST['category'])){

    require '../SQL/dbConnect.php';
    $category = $_POST['category'];

    $sql = "SELECT * FROM services WHERE category=?";
    $statement = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($statement, $sql)){
        header('Location: ../test_portal.php?error=sqlerror');
        exit();
    }

    else{

        mysqli_stmt_bind_param($statement, "s", $category);
        mysqli_stmt_execute($statement);

        $result_check = mysqli_stmt_get_result($statement);
        $data = array();
        echo "<table class='table table-bordered data_view_table dataTable no-footer'>
            <tr><th>
                Name
            </th>
            <th>
                Category
            </th>
            <th>
                Fee
            </th>
            </tr>";
            while($row = mysqli_fetch_array($result_check)) {
                echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Category'] . "</td>";
                echo "<td>" . $row['Fee'] . "</td>";
                echo "</tr>";

                $data['Name'] = $row['Name'];
              }
            json_encode(array($data));
            echo "</table>";
            mysqli_close($conn);
    }

    
}

?>

</body>
</html>
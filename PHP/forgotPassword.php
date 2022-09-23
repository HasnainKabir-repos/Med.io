<?php

if(isset($_POST["Recover_password"])){

    require "../SQL/dbConnect.php";

    $email = $_POST['email'];


    if(empty($email)){
        header("Location: ../Login.php?error=emptyfields&mail=".$email);
        exit();
    }

    else{

        $sql = "SELECT * FROM patient WHERE Email=? ";
        $statement = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($statement, $sql)){
            header("Location: ../Login.php?error=sqlerror");
            exit();
        }

        else{

            mysqli_stmt_bind_param($statement, "s", $email);
            mysqli_stmt_execute($statement);
            }
        }
    }

else{
    header("Location: ../Login.php");
    exit();
}

?>
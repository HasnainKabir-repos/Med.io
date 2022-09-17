<?php

if(isset($_POST["login-submit"])){

    require "../SQL/dbConnect.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
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

            $result_check = mysqli_stmt_get_result($statement);

            if($row = mysqli_fetch_assoc($result_check)){
                
                $password_check = password_verify($password, $row['Password']);

                if($password_check == false){

                    header("Location: ../Login.php?error=wrongpassword");
                    exit();

                }
                else if($password_check == true){

                    session_start();
                    $_SESSION['patientID'] = $row['ID'];
                    $_SESSION['patientEmail'] = $row['Email'];
                    $_SESSION['patientloggedin'] = true;

                    header("Location: ../patient_portal.php?login=success");
                    exit();

                }

            }else{


                header("Location: ../Login.php?error=emailnotfound");
                exit();

            }
        }
    }

}else{
    header("Location: ../Login.php");
    exit();
}

?>
<?php
    session_start();
   
    if (isset($_POST["appointment-submit"])) {
        require '../SQL/dbConnect.php';

        $date = $_POST["appointment-date"];
        $department = $_POST["department"];
        $message = $_POST["message"];


        if(!(isset($_SESSION['patientloggedin']))){
            header("Location: ../Login.php?error=notloggedin");
            exit();
        }

        else if(empty($date) || empty($department)){
            header("Location: ../patient_portal.php?error=emptyfields");
            exit();
        }else{

            $patientID = $_SESSION['patientID'];
            
            $sql = "INSERT INTO requests (PatientID, date, message, department) VALUES (?,?,?,?)";
            $statement = mysqli_stmt_init($conn);
        
            if(!mysqli_stmt_prepare($statement, $sql)){

                $err = mysqli_stmt_error($statement);

                header("Location: ../patient_portal.php?error=sqlerror".$err);
                exit();
            }
            else{

                mysqli_stmt_bind_param($statement, "ssss", $patientID, $date, $message, $department);
                mysqli_stmt_execute($statement);

                header("Location: ../patient_portal.php?appointment=success");
                exit();
            }

        }
    }
?>
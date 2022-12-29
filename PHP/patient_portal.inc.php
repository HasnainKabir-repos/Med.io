<?php
    session_start();
    
   
    if (isset($_POST["appointment-submit"])) {
        require '../SQL/dbConnect.php';

        $date = $_POST["appointment-date"];
        $department = $_POST["department"];
        $message = $_POST["message"];
        $doctor = $_POST["doctorName"];
        $doctorID = "";

        if(!(isset($_SESSION['patientloggedin']))){
            header("Location: ../Login.php?error=notloggedin");
            exit();
        }

        else if(empty($date) || empty($department)){
            header("Location: ../patient_portal.php?error=emptyfields");
            exit();
        }else{

            $sql2 = "SELECT ID FROM doctor WHERE Name=? ";
            $statement = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($statement, $sql2)){

                $err = mysqli_stmt_error($statement);

                header("Location: ../patient_portal.php?error=sqlerror2".$err);
                exit();
            }else{

                mysqli_stmt_bind_param($statement, "s", $doctor);
                mysqli_stmt_execute($statement);

                $result_check = mysqli_stmt_get_result($statement);
                $row = mysqli_fetch_assoc($result_check);
                $doctorID = $row['ID'];

                $patientID = $_SESSION['patientID'];
            
                $sql = "INSERT INTO requests (PatientID, date, message, department, Assigned, DoctorID) VALUES (?,?,?,?, 1, ?)";
                $statement = mysqli_stmt_init($conn);
            
                if(!mysqli_stmt_prepare($statement, $sql)){

                    $err = mysqli_stmt_error($statement);

                    header("Location: ../patient_portal.php?error=sqlerror".$err);
                    exit();
                }
                else{

                    mysqli_stmt_bind_param($statement, "sssss", $patientID, $date, $message, $department, $doctorID);
                    mysqli_stmt_execute($statement);


                    header("Location: ../patient_portal.php?appointment=success");
                    exit();
                }

            }

        }
    }

    if(isset($_POST['department'])){
        require '../SQL/dbConnect.php';

        $department = $_POST['department'];

        $sql = "SELECT ID, Name FROM doctor WHERE Department=?";
        $statement = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($statement, $sql)){
            header('Location: ../patient_portal.php?error=sqlerror');
            exit();
        }
    
        else{
            mysqli_stmt_bind_param($statement, "s", $department);
            mysqli_stmt_execute($statement);
            
            $result_check = mysqli_stmt_get_result($statement);
            
            while($row = mysqli_fetch_array($result_check)) {
                $name = $row['Name'];
                echo"<option value='".$name."'>".$name."</option>";
            }
            mysqli_close($conn);
        }
    }
?>
<?php

if(isset($_POST["Doctor_login-submit"])){

    require "../SQL/dbConnect.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password)){
        header("Location: ../Doctor_login.php?error=emptyfields&mail=".$email);
        exit();
    }

    else{
        /*doctor table should be used instead of tempdoctor*/
        $sql = "SELECT * FROM TempDoctor WHERE Email=? and Approved=1";
        $statement = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($statement, $sql)){
            header("Location: ../Doctor_login.php?error=sqlerror");
            exit();
        }

        else{

            mysqli_stmt_bind_param($statement, "s", $email);
            mysqli_stmt_execute($statement);

            $result_check = mysqli_stmt_get_result($statement);

            if($row = mysqli_fetch_assoc($result_check)){
                
                $password_check = password_verify($password, $row['Password']);

                if($password_check == false){
                    header("Location: ../Doctor_login.php?error=wrongpassword");
                    exit();

                }
                else if($password_check == true){
                    session_start();
                    $_SESSION['DoctorID'] = $row['ID'];
                    $_SESSION['DoctorEmail'] = $row['Email'];

                    header("Location: ../Doctor_portal.php?login=success");
                    exit();

                }

            }else{

                header("Location: ../Doctor_login.php?error=emailnotfound");
                exit();

            }
        }
    }

}else{
    header("Location: ../Doctor_login.php");
    exit();
}

?>
<?php
function function_alert($message) {
      
    // Display the alert box 
    echo "<script type='text/javascript'>alert('$message');window.location.href='http://localhost/Med.io/signup.php';</script>";
}
function function_alert2($message) {
      
    // Display the alert box 
    echo "<script type='text/javascript'>alert('$message');window.location.href='http://localhost/Med.io/login.php';</script>";
}

function calculate_age($dob)
{
    $age=(date('Y') - date('Y',strtotime($dob)));
    return $age;
}

if(isset($_POST["signup-submit"])){
    require '../SQL/dbConnect.php';

    $med_history = $vaccination = "";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conf_password = $_POST['confirm_password'];
    $date_of_birth = $_POST['birth_date'];
    $gender = $_POST['gender'];
    $age = calculate_age($date_of_birth);
    $place_of_birth = $_POST['birth_place'];
    $med_history = $_POST['medical_history'];
    $vaccination = $_POST['vaccination_status'];


    if(empty($name) ||empty($email) ||empty($password) ||empty($conf_password) ||empty($date_of_birth) ||
    empty($gender) ||empty($age) ||empty($place_of_birth)){
        function_alert("Empty fields");
    }

    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        function_alert("Passwords do not match");
    }
    
    elseif($password !== $conf_password){
        header("Location: ../signup.php?error=passwordcheck&name=".$name. "&mail=".$email);
        exit();
    }

    else{
        $sql = "SELECT Email FROM patient WHERE Email=?";
        $statement = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($statement, $sql)){
            header("Location: ../signup.php?error=sqlerror1");
            exit();
        }
        else{
            mysqli_stmt_bind_param($statement, "s", $email);
            mysqli_stmt_execute($statement);
            mysqli_stmt_store_result($statement);
            $result_check = mysqli_stmt_num_rows($statement);

            if($result_check>0){
                function_alert("Email Taken");
            }
            
            else{

                $sql = "INSERT INTO patient (Name, Email, Password, Gender, Birth_date,
                Age, Birth_place, Previous_Medical_History, Vaccination_status) VALUES (?,?,?,?,?,?,?,?,?)";
                $statement = mysqli_stmt_init($conn);
        
                if(!mysqli_stmt_prepare($statement, $sql)){
                    $err = mysqli_stmt_error($statement);
                    header("Location: ../signup.php?error=sqlerror".$err);
                    exit();
                }
                else{

                    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                    mysqli_stmt_bind_param($statement, "sssssssss", $name, $email, $hashed_password,
                                        $gender, $date_of_birth, $age, $place_of_birth, $med_history, $vaccination);
                    mysqli_stmt_execute($statement);
                    function_alert2("Signup Success");
                }
            }
        }
    }

    mysqli_stmt_close($statement);
    mysqli_close($conn);

}
else
{
    header("Location: ../signup.php");
    exit();

}
?>
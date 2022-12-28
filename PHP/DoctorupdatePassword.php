<?php
session_start();
?>
<?php
require "../SQL/dbConnect.php";
if(isset($_POST["Doctor_update_Password"])) 
{
    
    $email=$_SESSION['Email'];
    $reset_token=$_SESSION['reset_token'] ;
    $hashed_password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $sql="UPDATE `doctor` SET `Password`=?,`resetToken`=?,`resetTokenExpiry`=? where `email`=?";

    $statement = mysqli_stmt_init($conn);

    if(empty($email) || empty($reset_token) || empty($hashed_password)){
        header("Location: ./DoctorupdatePassword.php?error=emptyfields&mail=".$email);
        exit();
    }

    else if(!mysqli_stmt_prepare($statement, $sql))
    {
        $err = mysqli_stmt_error($statement);
        header("Location: ./DoctorupdatePassword.php?error=sqlerror".$err);
        exit();
    }else
    {
        $nul = NULL;
        mysqli_stmt_bind_param($statement, "ssss", $hashed_password, $nul, $nul, $email);
        mysqli_stmt_execute($statement);
    
        echo "<script type='text/javascript'>alert('Updated Successfully');window.location.href='http://localhost/Med.io/Doctor_login.php';</script>";
    }
    session_destroy();
    $statement->close();

}
?>
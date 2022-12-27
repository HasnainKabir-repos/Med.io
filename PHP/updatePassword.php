<?php
session_start();
?>
<?php
require "../SQL/dbConnect.php";

/*if(isset($_POST["email"]) && isset($_POST["reset_token"])){
    require "../SQL/dbConnect.php";
    $email = $_POST['email'];
    $reset_token = $_POST['reset_token'];
    date_default_timezone_set('Asia/Dhaka');
    $date=date("Y-m-d");
     $query="SELECT * from `patient` where `resetToken`='$reset_token' and `email`='$email' and `resetTokenExpiry`='$date'";
     $result=mysqli_query($conn,$query);

     if($result)
     {

        if(mysqli_num_rows($result)==1)
        {

            
        }
     }
}*/


if(isset($_POST["update_Password"])) 
{
    
    $email=$_SESSION['Email'];
    $reset_token=$_SESSION['reset_token'] ;
    date_default_timezone_set('Asia/Dhaka');
    $date=date("Y-m-d");
    $hashed_password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $sql="UPDATE `patient` SET `Password`=?,`resetToken`=?,`resetTokenExpiry`=? where `email`=?";

    $statement = mysqli_stmt_init($conn);

    if(empty($email) || empty($reset_token) || empty($hashed_password)){
        header("Location: ./updatePassword.php?error=emptyfields&mail=".$reset_token);
        exit();
    }

    else if(!mysqli_stmt_prepare($statement, $sql))
    {
        $err = mysqli_stmt_error($statement);
        header("Location: ./updatePassword.php?error=sqlerror".$err);
        exit();
    }else
    {
        $nul = NULL;
        mysqli_stmt_bind_param($statement, "ssss", $hashed_password, $nul, $nul, $email);
        mysqli_stmt_execute($statement);
    
        echo "<script type='text/javascript'>alert('Updated Successfully');</script>";
    }
    session_destroy();
    $statement->close();

}
?>
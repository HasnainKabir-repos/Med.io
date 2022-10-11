<?php
require "../SQL/dbConnect.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function sendMail($email,$reset_token)
{
require '../PHP/PHPMailer/Exception.php';
require '../PHP/PHPMailer/PHPMailer.php';
require '../PHP/PHPMailer/SMTP.php';
$mail=new PHPMailer(TRUE);
try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'med.io021670@gmail.com';                     //SMTP username
    $mail->Password   = 'pgluhuhmsxloqxwv';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('med.io021670@gmail.com', 'Mailer');
    $mail->addAddress($email);     //Add a recipient
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Reset Password';
    $mail->Body    = "Click on the Link <b>
    <ahref:'http://localhost/Med.io/updatePassword.php?email=$email&reset_token=$reset_token'>Reset Password</a>";
   

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
if(isset($_POST["Recover_password"])){



    $email = $_POST['email'];


    if(empty($email)){
        header("Location: ../RecoverPassword.php?error=emptyfields&mail=".$email);
        exit();
    }

    else{

        $sql = "SELECT * FROM patient WHERE Email=? ";
        $statement = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($statement, $sql)){
            header("Location: ../RecoverPassword.php?error=sqlerror");
            exit();
        }

        else{

            mysqli_stmt_bind_param($statement, "s", $email);
            mysqli_stmt_execute($statement);
            mysqli_stmt_store_result($statement);
            $result_check = mysqli_stmt_num_rows($statement);
            if($result_check==1)
            {
                $reset_token=bin2hex(random_bytes(16));
                date_default_timezone_set('Asia/Dhaka');
                $date=date("Y-m-d");
                $query="UPDATE `patient` SET `resetToken`='$reset_token',`resetTokenExpiry`='$date' where `email`='$email'";
                if(mysqli_query($conn,$query) && sendMail($email,$reset_token))
                {
                    header("Location: ../RecoverPassword.php?success");
                    exit();   
                }

            }
        }
    }
}

else{
    header("Location: ../RecoverPassword.php");
    exit();
}

?>
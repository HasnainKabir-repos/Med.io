<?php
session_start();
?>
<?php
require "../SQL/dbConnect.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function sendMail($email,$reset_token)
{
require '../PHP/PHPMailer/Exception.php';
require '../PHP/PHPMailer/PHPMailer.php';
require '../PHP/PHPMailer/SMTP.php';
$mail=new PHPMailer(TRUE);
try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-relay.sendinblue.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'med.io021670@gmail.com';                     //SMTP username
    $mail->Password   = 'AOHEKdVsnXhb3xqZ';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('med.io021670@gmail.com', 'Mailer');
    $mail->addAddress($email);     //Add a recipient
    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Reset Password';
    $mail->Body    = "Click on the Link <br>
    <a href='http://localhost/Med.io/PHP/UpdatePassword_front.php?key=".$email."&reset_token=".$reset_token."'>Reset Password</a>";

   

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
if(isset($_POST["recover_password"])){



    $email = $_POST['email'];


    if(empty($email)){
        header("Location: ../Recover_Password.php?error=emptyfields&mail=".$email);
        exit();
    }

                $reset_token=bin2hex(random_bytes(16));
                date_default_timezone_set('Asia/Dhaka');
                $date=date("Y-m-d");
                $query="UPDATE `patient` SET `resetToken`='$reset_token',`resetTokenExpiry`='$date' where `email`='$email'";

                if(mysqli_query($conn,$query) )
                {
                    session_start();
                    $_SESSION['forgottenEmail'] = $email;
                    $_SESSION['token'] = $reset_token;
                    sendMail($email,$reset_token);
                    header("Location: ../Recover_Password.php?success");
                    exit();   
                }

        
        }
    

else{
    echo "Failed";
    exit();
}

?>

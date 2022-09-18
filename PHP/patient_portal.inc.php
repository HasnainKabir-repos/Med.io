<?php
    session_start();
   
    if (isset($_POST["appointment-submit"])) {
        if(!(isset($_SESSION['patientloggedin']))){
            header("Location: ../Login.php?error=notloggedin");
            exit();
        }
    }
?>
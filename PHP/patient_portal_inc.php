<?php
    session_start();

    if (!isset($_POST["appointment-submit"])) {
        $ID = $_SESSION['patientID'];
        $email = $_SESSION['patientEmail'];

        if(empty($email) || empty($ID)){
            header("Location: ../patient_portal.php?error=notloggedin");
            exit();
        }
    }
?>
<?php
    session_destroy();

    $_SESSION['message'] = "Logged Out Successfully";
    header("Location: ../admin_login.php");
    exit();
?>
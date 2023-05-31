<?php
  session_start();
  $_SESSION['message'] = "Logged Out Successfully";
  session_unset();
  session_destroy();

  // Disable caching
  header("Cache-Control: no-cache, no-store, must-revalidate");
  header("Pragma: no-cache");
  header("Expires: 0");

  header("Location: ../admin_login.php");
  exit();

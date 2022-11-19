<?php
require "../SQL/dbConnect.php";
?>

<!DOCTYPE html>
<html lang ="en">
    <head>
    <title>MED.IO</title>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content = "width=device-width initial-scale=1" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>

    <!--CSS FILE--->
    <link rel="stylesheet" href="../assets/styles/Doctor_portal_styles.css">
    <title>Med.io</title>
    </head>
    <body>
        <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope"></i> <a href="mailto:hasnainkabir@iut-dhaka.edu">Mail</a>
            <i class="bi bi-phone"></i>+8801747116015
        </div>
        </div>
    </div>
    <!--Header-->

    <header id="header" class="fixed-top">

        <div class="container d-flex align-items-center">
            
            <a href="Doctor_portal.php" class="logo me-auto"><img src="assets/images/med-io-img.png" alt="" class="img-fluid"></a>
            
        <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href='admin_login.php'>Admin</a></li>
          <li><a class="nav-link scrollto active" href="Doctor_portal.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#intro">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="assets/Doctor_logout.php" class="logout-btn scrollto" id="logout-btn">Logout</a>
        </div>
    </header>

        <!--Cover-->
        <section id="cover" class="d-flex align-items-center">
      <div class="container">
        <h1>Doctor | Dashboard</h1>
        <a href="#intro" class="btn-My-Profile scrollto">My Profile</a><br>
        <a href="#appointment" class="btn-My-Profile ">Appointment List</a>
      </div>
    </section>

    <main id="main">


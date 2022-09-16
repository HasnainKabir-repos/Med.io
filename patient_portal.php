<?php
    session_start();
?>
<!DOCTYPE html>
<html lang ="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content = "width-device-width initial-scale=1" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

    <!--CSS FILE--->
    <link rel="stylesheet" href="assets/styles/styles.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
            
            <a href="patient_portal.php" class="logo me-auto"><img src="assets/images/med-io-img.png" alt="" class="img-fluid"></a>
            
        <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="patient_portal.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#intro">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="Doctor_portal.php">Doctors</a></li>
          <li class="dropdown"><span>Departments</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Show All Departments</a></li>
              <li><a href="#">Medicine and Nephrology</a></li>
              <li><a href="#">Psychiatry</a></li>
              <li><a href="#">Cardiology</a></li>
              <li><a href="#">General Surgeon</a></li>
              <li><a href="#">Neurosurgery</a></li>
              <li><a href="#">E.N.T</a></li>
              <li><a href="#">Orthopedic Surgery</a></li>
              <li><a href="#">Gynaecology and Obstetrics</a></li>
              <li><a href="#">Skin and VD</a></li>
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

        <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>
    </header>

    <!--Cover-->
    <section id="cover" class="d-flex align-items-center">
      <div class="container">
        <h1>Welcome to Med.io - The Patient's Companion Website</h1>
        <a href="#intro" class="btn-get-started scrollto">Get Started</a>
      </div>
    </section>

    <main id="main">

    <!---Introduction-->
    <section class="intro" id="intro">

    <div class="container-fluid">
      <div class="row">
          <div class="col-xl-5 col-lg-6 img-box d-flex justify-content-center align-items-stretch position-relative">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Get started</h3>
            <p>Visit a doctor with the help of this website easily with the press of a few buttons. Open your account first 
              to get an appointment today.
            </p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-appointment">
                <img src="assets/images/appointment_icon.png" alt="" >
              </i></div>
              <h4 class="title"><a href="#appointment">Make an appointment</a></h4>
              <p class="description">You can get an appointment through our website easily. Choose your desired department and 
                we will provide you with a doctor.
              </p>
              </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-department">
                <img src="assets/images/stethoscope_icon.png" alt="">
              </i>
              </div>
              <h4 class="title"><a href="">Department infromation</a></h4>
              <p class="description">
                We have a range of doctors whom we have divided into various departments. Click the icon to learn mora about departments.
              </p>
              </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-services">
                <img src="assets/images/services_icon.png" alt="">
              </i></div>
              <h4 class="title"><a href="">Services</a></h4>
              <p class="description">
                We offer a range of medical services. Click the icon to learn more about our provided services.
              </p>
              </div>

          </div>
      </div>
    </div>
    </section>

    <!-- Appointment-->
    <section class="appointment" id="appointment">
        <div class="container">
          <div class="appointment-title">
            <h2>Make an appointment</h2>
          </div>

          <form action="./PHP/patient_portal_inc.php" method="post" class="appointment-form">
            <div class="row">

              <div class="col-md-5 form-group mt-2">
                <label for="date" name="date-label">Select the appointment date</label>
                <input type="date" class="form-control" id="appointment-date" name="appointment-date" placeholder="Appointment Date">
                <div class="validate"></div>
              </div>


              <div class="col-md-5 form-group mt-2">
              <label for="department" name="dept-label">Choose your department</label>
              <select name="department" id="department" class="form-select">
                <option value="">Select Department</option>
                <option value="#">Medicine and Nephrology</option>
                <option value="#">Psychiatry</option>
                <option value="#">Cardiology</option>
                <option value="#">General Surgeon</option>
                <option value="#">Neurosurgery</option>
                <option value="#">E.N.T</option>
                <option value="#">Orthopedic Surgery</option>
                <option value="#">Gynaecology and Obstetrics</option>
                <option value="#">Skin and VD</option>
              </select>
              <div class="validate"></div>
              </div>
            </div>

            <div class="form-group mt-3">
              <textarea class="form-control message" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
            </div>

            <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="appointment-submit">Make an Appointment</button></div>
          </form>


        </div>
    </section>


    <!-- Department-->
    <section class="department">


    </main>
    </body>
</html>

<!---
Appointment Icon by <a href="https://freeicons.io/profile/3335">MD Badsha Meah</a> on <a href="https://freeicons.io">freeicons.io</a>                         
Stethoscope Icon by <a href="https://freeicons.io/profile/5790">106171237606937156455</a> on <a href="https://freeicons.io">freeicons.io</a>
Services Icon by <a href="https://freeicons.io/profile/2257">uicon</a> on <a href="https://freeicons.io">freeicons.io</a>
  
Introduction Photo by Pixabay: https://www.pexels.com/photo/close-up-photo-of-a-stethoscope-40568/
    
-->

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
    <link rel="stylesheet" href="assets/styles/card.css">
    <link rel="stylesheet" href="assets/styles/Doctor_portal_styles.css">
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
          <li><a class="nav-link scrollto active" href="patient_portal.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#intro">About</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="assets/patient_logout.php" class="logout-btn scrollto" id="logout-btn">Logout</a>
        </div>
    </header>

        <!--Cover-->
        <section id="cover" class="d-flex align-items-center">
      <div class="container">
        <h1>Doctor | List</h1>
      </div>
    </section>
    <style>
.card {
  box-shadow: 0 4px 4px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 50%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 2px;
}
</style>

<?php
			include_once("SQL/dbconnect.php");
			$sql = "SELECT name, email, age, gender, Instituitional_Background, department FROM doctor";
			$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));			
			while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
<div class="card">
<div class="container">
  <h1><?php echo $record['name']; ?></h1>
  <p chn Doelass="title"><?php echo $record['department']; ?></p>
  <p><?php echo $record['age']; ?></p>
  <p><button>Contact</button></p>
</div>
</div>
<?php } ?>
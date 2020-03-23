<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Odisha Badminton Association</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script type="text/javascript" src="leaderboard.js"></script>


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="http://localhost/project/"><span>Odisha Badminton Assc.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="http://localhost/project/">Home</a></li>
          <li><a href="about">About Us</a></li>
          <li><a href="leaderboard">Leaderboard</a></li>
          <li><a href="administration">Administration</a></li>
          <li><a href="gallery">Gallery</a></li>
          <li><a href="contact">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <main id="main">
  <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Leaderboard</h2>
          <ol>
            <li><a href="http://localhost/project/">Home</a></li>
            <li>Leaderboard</li>
          </ol>
        </div>

      </div>
    </section>
    </main>

  <form method="post" id="myForm" name="studentDetails" onsubmit="validate(event)" >
    <input type="hidden" name="id",id="id">
    <div class="col-sm-12">

      <div class="row container" style="margin:150px 10px 150px 10px">
        <div class="col-sm-4 form-group">
          <h4>Age:<sup class="star">*</sup>
          <select class="form-control" name="age[]" id="age" ><br>
            <option value = "-1" selected>[choose yours]</option>
            <option value =14 > Under 14</option>
            <option value =18 >Under 18</option>
            <option value =22>Senior</option>
          </select>	
        </div>
        <div class="col-sm-4 form-group">
          <h4>Gender:<sup class="star">*</sup>
          <select class="form-control" name="gender[]" id="gender" ><br>
            <option value = "-1" selected>[choose yours]</option>
            <option value = "Male">Male</option>
            <option value = "Female">Female</option>
          </select>	
        </div>  
        <div class="col-sm-4 form-group">
          <br>
          <button type="submit" class="primary" style="margin-left:40%; width: 50%;background:#1E4356;color:white" name="submit" onsubmit="abc()"  id="submit" >Submit</button>
        </div>
      </div>
    </div>

    
  </form>
  <table class="table table-striped" >
    <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Gender</th>
      <th>Age</th>
    </tr>
    </thead>
    <tbody>
    <?php
        if(isset($_POST['submit'])) {
          
          
          $age = $_POST['age'][0];
          $gender = $_POST['gender'][0];
          $conn= mysqli_connect("localhost","root","","badminton");
          if($conn-> connect_error){
            die("connection failed:".$conn-> connect_error);
          }
          if($age==14){
            $sql = "select firstName, lastName,gender,age from playerdetails where age<{$age} and gender='{$gender}'";
            $result=$conn->query($sql);
            if($result->num_rows > 0){
              while($row = $result-> fetch_assoc()){
                echo "<tr><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["gender"]."</td><td>".$row["age"]."</td></tr>";
              }
            }
          }
          if($age==18){
            $sql = "select firstName, lastName,gender,age from playerdetails where gender='{$gender}' and age BETWEEN 14 and {$age}";
            $result=$conn->query($sql);
            if($result->num_rows > 0){
              while($row = $result-> fetch_assoc()){
                echo "<tr><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["gender"]."</td><td>".$row["age"]."</td></tr>";
              }
            }
          }
          if($age==22){
            $sql = "select firstName, lastName,gender,age from playerdetails where gender='{$gender}' and age>18";
            $result=$conn->query($sql);
            if($result->num_rows > 0){
              while($row = $result-> fetch_assoc()){
                echo "<tr><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["gender"]."</td><td>".$row["age"]."</td></tr>";
              }
            }
          }
          else{
            echo("Zero results");
          }
          $conn->close();
      }
    ?>
    </tbody>
  </table>
          


 

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

  <div class="footer-newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Our Newsletter</h4>
          <p>Welcome to Odisha Badminton Association</p>
        </div>
        
      </div>
    </div>
  </div>

  <div class="footer-top">
    <div class="container">
      <div class="row">
        

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        

        <div class="col-lg-4 col-md-6 footer-contact">
          <h4>Contact Us</h4>
          <p>
              VIR 24, UNIT-6,<br>
              Infront of LIC Office,<br>
              Bhubaneswar, India <br>
              <strong>Phone:</strong> +91 94371 79747<br>
              <strong>Email:</strong> osba@gmail.com<br>
            </p>

        </div>

        <div class="col-lg-4 col-md-6 footer-info">
          <h3>About Odisha Badminton Association</h3>
          <p>Orissa State Badminton Association(OSBA), affiliated to Badminton Association of India(BAI) is committed towards the development of badminton in Odisha.</p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>
        

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Odisha Badminton Association</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by Silicon,BBSR
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
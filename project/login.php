<?php?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About - Odisha Badminton Association Bootstrap Template</title>
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
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="login.css">
  <script src="login.js"></script>
  <!-- <script type="text/javascript">
    $(document).ready(function(){
    $("#login").click(function(){
        var email= $('#email');
        var password= $('#password');

        var data={"email":email.val(),"password":password.val()};
        //console.log($data);

        $.ajax({
            url: "http://slimapp/api/login",
            type: "POST",
            data: data,
            dataType: 'JSON',
            success: function(response,status,xhr) {
                if (response.result) {
                    window.location.href = "listuser";
                  }else{
                    console.log(response);
                  }
                },
                  error: function (xhr, status, error) {
                    usernameWarning.html("Something went wrong!");
               
               //var $mystatus=response.status;

               
            }
            
    });
    });
})
</script> -->

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="http://localhost/project/"><span>Odisha Badminton ASSC.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="http://localhost/project/">Home</a></li>
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

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs" style="height: 100px;">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h3>LOG IN</h3>
          <ol>
            <li><a href="http://localhost/project/">Home</a></li>
            <li>Log In</li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

    

  <div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->
        <!-- Icon -->
        <div class="fadeIn first">
            <br>
            <img src="img/user.png" id="icon" class="profile-img-card" alt="User Icon" style="width:100px;height:100px;" />
            <br>
        </div>
        <!-- Login Form -->
        <form method="post" >
            <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="password" style="-webkit-text-security: circle;">
            <input type="button" id="login" class="fadeIn fourth" name=login value="Log In"></input>
            <br>
            <div><span id="message" style="color:red"></span></div>
            <span><b>Admin <b><a class="underlineHover" href="adminlogin">Log in</a></span>
            
            <br>
            
        </form>
        
        <!-- sign up  -->
        <div id="formFooter">
        <br>
        <span>Not having an account?  <a class="underlineHover" href="registration">Register now</a></span>
        </div>

    </div>
</div>



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
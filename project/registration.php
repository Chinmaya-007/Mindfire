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
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="registration.js"></script>
    <link rel="stylesheet" href="registration.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  
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
          <h3 >SIGN UP</h3>
          <ol >
            <li><a href="http://localhost/project/">Home</a></li>
            <li><a href="login">Log In</a></li>
          </ol>
        </div>

      </div>
    </section><!-- End About Us Section -->

        
    <div class="container">            
        <h1 class="well" style="position:center ;color:blue" >Registration Form</h1>
            <div class="col-lg-12 well">
                <div class="row"> 
                  <form method="post" id="myForm" name="studentDetails" onsubmit="validate(event)">
                      <input type="hidden" name="id",id="id">
                      <div class="col-sm-12">
                          
                          <h2>Personal Details</h2><br>
                          <div class="row">
                              
                              <div class="col-sm-6 form-group">
                                  <h4>First Name:<sup class="star">*</sup>
                                  <input class="form-control" type="text" name="firstName" id="firstName"  placeholder="Your first name"  >
                                  <br><label class="hiddenclass" id="message1">Enter valid first name</label>
                              </div>
                              <div class="col-sm-6 form-group">
                                  <h4>Last Name:<sup class="star">*</sup>
                                  <input class="form-control" type="text" name="lastName" id="lastName"   placeholder="Your last name"  >
                                  <br> <label class="hiddenclass" id="message2">Enter a valid last name</label>
                              
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6 form-group">
                                <h4>Gender:<sup class="star">*</sup>
                                <select class="form-control" name="gender" id="gender"  ><br>
                                  <option value = "-1" selected>[choose yours]</option>
                                  <option value = "Male">Male</option>
                                  <option value = "Female">Female</option>
                                </select>	
                              </div>
                              <div class="col-sm-6 form-group">
                                  <h4>Age:<sup class="star">*</sup>
                                  <input class="form-control" type="number" name="age" id="age"  placeholder="Age (min age 10)"  ><br>
                                  <tr> <label class="hiddenclass" id="message4">Enter your Age</label></tr>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-12">
                          <h2>Parent's Details</h2><br>	
                          <div class="row">
                              <div class="col-sm-6 form-group">
                                  <h4>Father's Name:<sup class="star">*</sup>
                                  <input class="form-control" type="text" name="fatherName"  id="fatherName" placeholder="full name"  ><br>
                                  <tr> <label class="hiddenclass" id="message6">Enter father's name</label></tr><br>
                              </div>
                              <div class="col-sm-6 form-group">
                                  <h4>Mother's Name:<sup class="star">*</sup>
                                  <input class="form-control" type="text" name="motherName" id="motherName"  placeholder="full name"  ><br>
                                  <tr> <label class="hiddenclass" id="message7">Enter mother's name</label></tr><br>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-12">
                        <h2>Contact Details</h2><br>	
                        <div class="row">
                            <div class="col-sm-6 form-group">
                              <h4>E-mail:<sup class="star">*</sup>
                              <input class="form-control" type="email" name="email" id="email"  placeholder="eg:abc@xyz.com"  ><br>
                              <tr> <label class="hiddenclass" id="message8">Enter a valid Email</label></tr><br>
                            </div>
                            <div class="col-sm-6 form-group">
                              <h4>Mobile Number:<sup class="star">*</sup>
                              <input class="form-control" type="tel" name="phoneNumber" id="phoneNumber"  placeholder="eg:0123456789" ><br>
                              <tr> <label class="hiddenclass" id="message9">Enter a valid Ph.no.</label></tr><br>
                            </div>   
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <h4>Password:<sup class="star">*</sup>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Password must be of 8 character" ><br>
                                <tr> <label class="hiddenclass" id="message24">Enter a valid password</label></tr><br>
                            </div>
                            <div class="col-sm-6 form-group">
                                <h4>Confirm Passowrd:<sup class="star">*</sup>
                                <input class="form-control" type="password" name="cPassword" id="cPassword" placeholder="Re-enter your password" ><br>
                                <tr> <label class="hiddenclass" id="message25">Re-enter the correct password</label></tr><br>
                            </div>
                        </div>
                      </div>	
                      <div class="col-sm-12">
                        <h2>Address</h2><br>	
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <h4>Address Line 1:<sup class="star">*</sup>
                                <input class="form-control" type="text" name="address1" id="address1"  placeholder="building number/house number" ><br>
                                <tr> <label class="hiddenclass" id="message10">Enter address field</label></tr><br>
                            </div>
                            <div class="col-sm-6 form-group">
                                <h4>Address Line 2:<sup class="star">*</sup>
                                <input class="form-control" type="text" name="address2" id="address2"  placeholder="area/locality/city"  ><br>
                                <tr> <label class="hiddenclass" id="message11">Enter address field</label></tr><br>
                            </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6 form-group">
                              <h4>District:<sup class="star">*</sup>
                              <input class="form-control" type="text" name="district" id="district"  placeholder="Your district..." ><br>
                              <tr> <label class="hiddenclass" id="message12">Enter District</label></tr><br>
                          </div>
                          <div class="col-sm-6 form-group">
                            <h4>ZIP Code:<sup class="star">*</sup>
                            <input class="form-control" type="number" name="pinCode" id="pinCode"  min="100000" max="999999"  placeholder="eg:XXXXXX"  ><br>
                            <tr> <label class="hiddenclass" id="message14">Enter Pin Code</label></tr><br>
                          </div>
                            
                        </div>
                        <br>
                      </div>
                      <br>
                      <br>
                      <br>
                      <br>
                      <button type="submit" class="btn" style="margin-left:40%; width: 20%;" id="submit" name="submit"  value="submit"><a href="about" style="color:white">Submit</a></button>
                  </form>
                    
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
<?php  require_once "student_php.php";
$update=true;?>

<html>
	<head>
		<title>Student details</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/details.js">
        </script>
        <link rel="stylesheet" href="css/details.css">
		
	</head>
	
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Student Form</a>
              </div>
            </div>
        </nav>
            
        <div class="container">            
            <h1 class="well" style="position:center ;color:blue" >Student Details</h1>
                <div class="col-lg-12 well">
                    <div class="row">
                        
                        
                        
                        <form method="post" id="myForm" name="studentDetails" onsubmit="validate(event)">
                            <input type="hidden" name="id",id="id"<?php echo $id; ?>">
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
                                        <h4>Class:<sup class="star">*</sup>
                                        <input class="form-control" type="number" name="class" id="class" min="1" max="10"  placeholder="class form 1 to 10" ><br>
                                        <tr> <label class="hiddenclass" id="message3">Enter your class</label></tr>
                                        <br>	
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Date Of Birth:<sup class="star">*</sup>
                                        <input class="form-control" type="date" name="dob" id="dob"  placeholder="DD/MM/YYYY" max="2017-01-01"  ><br>
                                        <tr> <label class="hiddenclass" id="message4">Enter your DOB</label></tr>
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
                                        <h4>Alt. E-mail:
                                        <input class="form-control" type="email" name="altEmail" id="altMail"  placeholder="eg:abc@xyz.com" ><br>
                                        <tr> <label class="hiddenclass" id="message22">Enter a valid Email</label></tr><br>
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
                                        <input class="form-control" type="text" name="cPassword" id="cPassword" placeholder="Re-enter your password" ><br>
                                        <tr> <label class="hiddenclass" id="message25">Re-enter the correct password</label></tr><br>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-sm-6 form-group">
                                        <h4>Mobile Number:<sup class="star">*</sup>
                                        <input class="form-control" type="tel" name="phoneNumber" id="phoneNumber"  placeholder="eg:0123456789" ><br>
                                        <tr> <label class="hiddenclass" id="message9">Enter a valid Ph.no.</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Alt. Mobile Number:
                                        <input class="form-control" type="tel" name="altPhoneNumber" id="altPhoneNumber"  placeholder="eg:0123456789" ><br>
                                        <tr> <label class="hiddenclass" id="message23">Enter a valid Ph.no.</label></tr><br>
                                    </div>
                                </div>
                            </div>	
                            <div class="col-sm-12">
                                <h2>Current Address</h2><br>	
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
                                        <h4>State:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="state" id="state"  placeholder="Your state..."  ><br>
                                        <tr> <label class="hiddenclass" id="message13">Enter state</label></tr><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>ZIP Code:<sup class="star">*</sup>
                                        <input class="form-control" type="number" name="pinCode" id="pinCode"  min="100000" max="999999"  placeholder="eg:XXXXXX"  ><br>
                                        <tr> <label class="hiddenclass" id="message14">Enter Pin Code</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Country:<sup class="star">*</sup>
                                        <select class="form-control" name="country" id="country" ><br>
                                            <option value = "-1" selected>[choose yours]</option>
                                            <option value = "USA">USA</option>
                                            <option value = "UK">UK</option>
                                            <option value = "INDIA">INDIA</option>
                                        </select>
                                        <br>
                                        <tr> <label class="hiddenclass" id="message15">Enter Country</label></tr>
                                        <br>
                                    </div>
                                </div>
                                <br>
                                <div class="card bg-primary text-white">
                                    <div class="card-body" style="margin-left: 36%;"><input style="margin-top:10px ;margin-bottom: 10px;" type="checkbox" name="filladdress" id="filladdress" onclick="fillAddress(this.form)" ><span> Present address same as permanent address</span><br></div>
                                </div>
                                
                                
                                <h2>Permanent Address</h2><br>	
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>Address Line 1:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="pAddress1" id="pAddress1"  placeholder="building number/house no."  ><br>
                                        <tr> <label class="hiddenclass" id="message16">Enter address field</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Address Line 2:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="pAddress2" id="pAddress2"  placeholder="area/locality/city"><br>
                                        <tr> <label class="hiddenclass" id="message17">Enter address field</label></tr><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>District:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="pDistrict" id="pDistrict"  placeholder="Your district..." ><br>
                                        <tr> <label class="hiddenclass" id="message18">Eneter District</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>State:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="pState" id="pState" placeholder="Your state..." ><br>
                                        <tr> <label class="hiddenclass" id="message19">Enter State</label></tr><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>ZIP Code:<sup class="star">*</sup>
                                        <input class="form-control" type="number" name="pPinCode" id="pPinCode"  min="100000" max="999999" placeholder="eg:XXXXXX" ><br>
                                        <tr> <label class="hiddenclass" id="message20">Enter Pin Code</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Country:<sup class="star">*</sup>
                                        <select class="form-control" name="pCountry" id="pCountry"  >
                                            <option value = "-1" selected>[choose yours]</option>
                                            <option value = "USA">USA</option>
                                            <option value = "UK">UK</option>
                                            <option value = "INDIA">INDIA</option>
                                        </select>
                                        <br>
                                        <tr> <label class="hiddenclass" id="message21">Enter Country</label></tr>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <br>
                        
                        <br>
                        <br>
                        <br>
                        <?php if ($update == true): ?>
                            <button  class="btn" type="submit" style="margin-left:40%; width: 20%;" name="edit" value="edit" onclick="edit()" >Edit</button>
                        <?php else: ?>
                            <button type="submit" class="btn" style="margin-left:40%; width: 20%;" name="update"  value="update">Update</button>
                        <?php endif ?> 

                        <?php
                         include 'student_php.php';
                        
                         $mail_id = $_SESSION["email"];
                         $results = mysqli_query($mysqli,"SELECT * FROM info WHERE email ='$mail_id'");
                         $row = mysqli_fetch_row($results);
                         $firstName=$row['firstName'];
                         $lastName=$row['lastName']
                        ?>
                        </form>
                        <?php $results = mysqli_query($db, "SELECT * FROM info"); ?>
                        
                    </div>
                </div>
        </div>
    </body>
</html>
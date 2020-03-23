<?php  require_once "student_php.php";?>

<html>
	<head>
		<title>Student details</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="studentDetails.js"></script>
        <link rel="stylesheet" href="studentDetails.css">
		
	</head>
	
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Student Form</a>
              </div>
            </div>
        </nav>
        
        <?php if (isset($_SESSION['message'])): ?>
            <div class="msg">
                <?php 
                    echo $_SESSION['message']; 
                    unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>
            
        <div class="container">            
            <h1 class="well" style="position:center ;color:blue" >Student Details</h1>
                <div class="col-lg-12 well">
                    <div class="row">
                        
                        
                        <?php $results = mysqli_query($db, "SELECT * FROM info"); ?>
                        <table>
                            <thead>
                                <tr>
                                    <td><b>First Name</b></td>
                                    <td><b>Last Name</b></td>
                                    <td><b>Class</b></td>
                                    <td><b>DOB</b></td>
                                    <td><b>Father's Name</b></td>
                                    <td><b>Mother's Name</b></td>
                                    <td><b>E Mail</b></td>
                                    <td><b>mobile Number</b></td>
                                    <td><b>ALt eMail</b></td>
                                    <td><b>Alt Mob. Number</b></td>
                                    <td><b>Address line1</b></td>
                                    <td><b>Address line2</b></td>
                                    <td><b>District</b></td>
                                    <td><b>State</b></td>
                                    <td><b>ZIP Code</b></td>
                                    <td><b>Country</b></td>
                                    <td><b>Add. line1(Permanent)</b></td>
                                    <td><b>Add. line2(Permanent)</b></td>
                                    <td><b>Dist.(Permanent)</b></td>
                                    <td><b>State(Permanent)</b></td>
                                    <td><b>ZIP Code(Permanent)</b></td>
                                    <td><b>Country(Permanent)</b></td>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <?php while ($row = mysqli_fetch_array($results)) { ?>
                                <tr>
                                <td><?php echo $row['firstName']; ?></td>
                                <td><?php echo $row['lastName']; ?></td>
                                <td><?php echo $row['class']; ?></td>
                                <td><?php echo $row['dob']; ?></td>
                                <td><?php echo $row['fatherName']; ?></td>
                                <td><?php echo $row['motherName']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['phoneNumber']; ?></td>
                                <td><?php echo $row['altEmail']; ?></td>
                                <td><?php echo $row['altPhoneNumber']; ?></td>
                                <td><?php echo $row['address1']; ?></td>
                                <td><?php echo $row['address2']; ?></td>
                                <td><?php echo $row['district']; ?></td>
                                <td><?php echo $row['state']; ?></td>
                                <td><?php echo $row['pinCode']; ?></td>
                                <td><?php echo $row['country']; ?></td>
                                <td><?php echo $row['pAddress1']; ?></td>
                                <td><?php echo $row['pAddress2']; ?></td>
                                <td><?php echo $row['pDistrict']; ?></td>
                                <td><?php echo $row['pState']; ?></td>
                                <td><?php echo $row['pPinCode']; ?></td>
                                <td><?php echo $row['pCountry']; ?></td>
                                    <td>
                                        <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                                    </td>
                                    <td>
                                        <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                        <form method="post" id="myForm" name="studentDetails">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="col-sm-12">
                                
                                <h2>Personal Details</h2><br>
                                <div class="row">
                                    
                                    <div class="col-sm-6 form-group">
                                        <h4>First name:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="firstName" id="firstName" value="<?php echo $firstName; ?>" placeholder="Your first name"  >
                                        <br><label class="hiddenclass" id="message1">Enter valid first name</label>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Last name:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="lastName" id="lastName" value="<?php echo $lastName; ?>"  placeholder="Your last name"  >
                                        <br> <label class="hiddenclass" id="message2">Enter a valid last name</label>
                                    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>class:<sup class="star">*</sup>
                                        <input class="form-control" type="number" name="class" id="class" min="1" max="10" value="<?php echo $class; ?>" placeholder="class form 1 to 10" ><br>
                                        <tr> <label class="hiddenclass" id="message3">Enter your class</label></tr>
                                        <br>	
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Date of Birth:<sup class="star">*</sup>
                                        <input class="form-control" type="date" name="dob" id="dob" value="<?php echo $dob; ?>" placeholder="DD/MM/YYYY" max="2020-01-15"  ><br>
                                        <tr> <label class="hiddenclass" id="message4">Enter your DOB</label></tr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <h2>Parent's Details</h2><br>	
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>Father's Name:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="fatherName" value="<?php echo $fatherName; ?>" id="fatherName" placeholder="full name"  ><br>
                                        <tr> <label class="hiddenclass" id="message6">Enter father's name</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Mother's Name:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="motherName" id="motherName" value="<?php echo $motherName; ?>" placeholder="full name"  ><br>
                                        <tr> <label class="hiddenclass" id="message7">Enter mother's name</label></tr><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <h2>Contact Details</h2><br>	
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>E-mail:<sup class="star">*</sup>
                                        <input class="form-control" type="email" name="email" id="email" value="<?php echo $email; ?>" placeholder="eg:abc@xyz.com"  ><br>
                                        <tr> <label class="hiddenclass" id="message8">Enter a valid Email</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Mobile Number:<sup class="star">*</sup>
                                        <input class="form-control" type="tel" name="phoneNumber" id="phoneNumber" value="<?php echo $phoneNumber; ?>" placeholder="eg:0123456789" ><br>
                                        <tr> <label class="hiddenclass" id="message9">Enter a valid Ph.no.</label></tr><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>Alt. E-mail:
                                        <input class="form-control" type="email" name="altEmail" id="altMail" value="<?php echo $altEmail; ?>" placeholder="eg:abc@xyz.com" ><br>
                                        <tr> <label class="hiddenclass" id="message22">Enter a valid Email</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Alt. Mobile no.:
                                        <input class="form-control" type="tel" name="altPhoneNumber" id="altPhoneNumber" value="<?php echo $altPhoneNumber; ?>" placeholder="eg:0123456789" ><br>
                                        <tr> <label class="hiddenclass" id="message23">Enter a valid Ph.no.</label></tr><br>
                                    </div>
                                </div>
                            </div>	
                            <div class="col-sm-12">
                                <h2>Current Address</h2><br>	
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>Address line1:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="address1" id="address1" value="<?php echo $address1; ?>" placeholder="building number/house number" ><br>
                                        <tr> <label class="hiddenclass" id="message10">Enter address field</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Address line2:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="address2" id="address2" value="<?php echo $address2; ?>" placeholder="area/locality/city"  ><br>
                                        <tr> <label class="hiddenclass" id="message11">Enter address field</label></tr><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>District:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="district" id="district" value="<?php echo $district; ?>" placeholder="Your district..." ><br>
                                        <tr> <label class="hiddenclass" id="message12">Enter District</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>State:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="state" id="state" value="<?php echo $state; ?>" placeholder="Your state..."  ><br>
                                        <tr> <label class="hiddenclass" id="message13">Enter state</label></tr><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>ZIP Code:<sup class="star">*</sup>
                                        <input class="form-control" type="number" name="pinCode" id="pinCode"  min="100000" max="999999" value="<?php echo $pinCode; ?>" placeholder="eg:XXXXXX"  ><br>
                                        <tr> <label class="hiddenclass" id="message14">Enter Pin Code</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Country:<sup class="star">*</sup>
                                        <select class="form-control" name="country" id="country" value="<?php echo $country; ?>"><br>
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
                                        <h4>Address line1:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="pAddress1" id="pAddress1" value="<?php echo $pAddress1; ?>" placeholder="building number/house no."  ><br>
                                        <tr> <label class="hiddenclass" id="message16">Enter address field</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Address line2:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="pAddress2" id="pAddress2" value="<?php echo $pAddress2; ?>" placeholder="area/locality/city"><br>
                                        <tr> <label class="hiddenclass" id="message17">Enter address field</label></tr><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>District:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="pDistrict" id="pDistrict" value="<?php echo $pDistrict; ?>" placeholder="Your district..." ><br>
                                        <tr> <label class="hiddenclass" id="message18">Eneter District</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>State:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="pState" id="pState" value="<?php echo $pState; ?>"placeholder="Your state..." ><br>
                                        <tr> <label class="hiddenclass" id="message19">Enter State</label></tr><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>ZIP Code:<sup class="star">*</sup>
                                        <input class="form-control" type="number" name="pPinCode" id="pPinCode" value="<?php echo $pPinCode; ?>" min="100000" max="999999" placeholder="eg:XXXXXX" ><br>
                                        <tr> <label class="hiddenclass" id="message20">Enter Pin Code</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Country:<sup class="star">*</sup>
                                        <select class="form-control" name="pCountry" id="pCountry" value="<?php echo $pCountry; ?>" >
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
                            <input  class="btn" type="submit" style="margin-left:40%; width: 20%;" name="update" value="UPDATE" >update</button>
                        <?php else: ?>
                            <input type="submit" class="btn" style="margin-left:40%; width: 20%;" name="submit" onclick="validate(this.form)" value="submit">
                        <?php endif ?> 
                        </form>
                       
                    </div>
                </div>
        </div>
    </body>
</html>
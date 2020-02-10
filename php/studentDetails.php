<?php include 'student_php.php';?>
<?php 
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $update = true;
        $record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
        if (count($record) == 1 ) {
            $n = mysqli_fetch_array($record);
            $firstName =  $n['firstName'];
            $lastName =  $n['lastName'];
            $class =  $n['class'];
            $dob =  $n['dob'];
            $fatherName= $n['fatherName'];
            $motherName= $n['motherName'];
            $email= $n['email'];
            $phoneNumber= $n['phoneNumber'];
            $altEmail= $n['altEmail'];
            $altPhoneNumber= $n['altPhoneNumber'];
            $address1= $n['address1'];
            $address2= $n['address2'];
            $district= $n['district'];
            $state= $n['state'];
            $pinCode= $n['pinCode'];
            $country= $n['country'];
            $pAddress1= $n['pAddress1'];
            $pAddress2= $n['pAddress2'];
            $pDistrict= $n['pDistrict'];
            $pState= $n['pState'];
            $pPinCode= $n['pPinCode'];
            $pCountry= $n['pCountry'];
        }
    }
?>
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
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <?php 
                                if (isset($_GET['edit'])) {
                                    $id = $_GET['edit'];
                                    $update = true;
                                    $record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");

                                    if (count($record) == 1 ) {
                                        $n = mysqli_fetch_array($record);
                                        $name = $n['name'];
                                        $address = $n['address'];
                                    }
                                }
                            ?>
                            <?php while ($row = mysqli_fetch_array($results)) { ?>
                                <tr>
                                    <td><?php echo $row['First name']; ?></td>
                                    <td><?php echo $row['Last Name']; ?></td>
                                    <td>
                                        <a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
                                    </td>
                                    <td>
                                        <a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                        <form  method="post" id="myForm" action="server.php" name="studentDetails">
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
                                        <input class="form-control" type="number" name="class" id="class" min="1" max="10" placeholder="class form 1 to 10" ><br>
                                        <tr> <label class="hiddenclass" id="message3">Enter your class</label></tr>
                                        <br>	
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Date of Birth:<sup class="star">*</sup>
                                        <input class="form-control" type="date" name="dob" id="dob" placeholder="DD/MM/YYYY" max="2020-01-15"  ><br>
                                        <tr> <label class="hiddenclass" id="message4">Enter your DOB</label></tr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <h2>Parent's Details</h2><br>	
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>Father's Name:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="fatherName" id="fatherName" placeholder="full name"  ><br>
                                        <tr> <label class="hiddenclass" id="message6">Enter father's name</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Mother's Name:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="motherName" id="motherName" placeholder="full name"  ><br>
                                        <tr> <label class="hiddenclass" id="message7">Enter mother's name</label></tr><br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <h2>Contact Details</h2><br>	
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>E-mail:<sup class="star">*</sup>
                                        <input class="form-control" type="email" name="email" id="email" placeholder="eg:abc@xyz.com"  ><br>
                                        <tr> <label class="hiddenclass" id="message8">Enter a valid Email</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Mobile Number:<sup class="star">*</sup>
                                        <input class="form-control" type="tel" name="phoneNumber" id="phoneNumber" placeholder="eg:0123456789" ><br>
                                        <tr> <label class="hiddenclass" id="message9">Enter a valid Ph.no.</label></tr><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>Alt. E-mail:
                                        <input class="form-control" type="email" name="altEmail" id="altMail" placeholder="eg:abc@xyz.com" ><br>
                                        <tr> <label class="hiddenclass" id="message22">Enter a valid Email</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Alt. Mobile no.:
                                        <input class="form-control" type="tel" name="altPhoneNumber" id="altPhoneNumber" placeholder="eg:0123456789" ><br>
                                        <tr> <label class="hiddenclass" id="message23">Enter a valid Ph.no.</label></tr><br>
                                    </div>
                                </div>
                            </div>	
                            <div class="col-sm-12">
                                <h2>Current Address</h2><br>	
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>Address line1:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="address1" id="address1" placeholder="building number/house number" ><br>
                                        <tr> <label class="hiddenclass" id="message10">Enter address field</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Address line2:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="address2" id="address2" placeholder="area/locality/city"  ><br>
                                        <tr> <label class="hiddenclass" id="message11">Enter address field</label></tr><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>District:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="district" id="district" placeholder="Your district..." ><br>
                                        <tr> <label class="hiddenclass" id="message12">Enter District</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>State:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="state" id="state" placeholder="Your state..."  ><br>
                                        <tr> <label class="hiddenclass" id="message13">Enter state</label></tr><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>ZIP Code:<sup class="star">*</sup>
                                        <input class="form-control" type="number" name="pinCode" id="pinCode"  min="100000" max="999999" placeholder="eg:XXXXXX"  ><br>
                                        <tr> <label class="hiddenclass" id="message14">Enter Pin Code</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Country:<sup class="star">*</sup>
                                        <select class="form-control" name="country" id="country"><br>
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
                                        <input class="form-control" type="text" name="pAddress1" id="pAddress1" placeholder="building number/house no."  ><br>
                                        <tr> <label class="hiddenclass" id="message16">Enter address field</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Address line2:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="pAddress2" id="pAddress2" placeholder="area/locality/city"><br>
                                        <tr> <label class="hiddenclass" id="message17">Enter address field</label></tr><br>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <h4>District:<sup class="star">*</sup>
                                        <input class="form-control" type="text" name="pDistrict" id="pDistrict" placeholder="Your district..." ><br>
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
                                        <input class="form-control" type="number" name="pPinCode" id="pPinCode" min="100000" max="999999" placeholder="eg:XXXXXX" ><br>
                                        <tr> <label class="hiddenclass" id="message20">Enter Pin Code</label></tr><br>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <h4>Country:<sup class="star">*</sup>
                                        <select class="form-control" name="pCountry" id="pCountry" >
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
                        </form>
                        <?php if ($update == true): ?>
                            <button  class="btn" type="submit" style="margin-left:40%; width: 20%;" name="update" value="UPDATE" >update</button>
                        <?php else: ?>
                            <button type="submit" class="btn" style="margin-left:40%; width: 20%;" name="submit" onclick="validate(this.form)" value="SUBMIT" >Submit</button>
                        <?php endif ?> 
                    </div>
                </div>
        </div>
    </body>
</html>
<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "studentdetails";
    $db = mysqli_connect($servername, $username, $password, $dbname);
    session_start();
    $id = $_SESSION["id"];

    $results = mysqli_query($db,"SELECT * FROM info WHERE id ='$id'");
    $row = mysqli_fetch_array($results);
    if($row){
    $id= $row['id'];
    $firstName =  $row['firstName'];
    $lastName =  $row['lastName'];
    $class =  $row['class'];
    $dob =  $row['dob'];
    $fatherName= $row['fatherName'];
    $motherName= $row['motherName'];
    $email= $row['email'];
    $altEmail= $row['altEmail'];
    $password=$row['password'];
    $phoneNumber= $row['phoneNumber'];    
    $altPhoneNumber= $row['altPhoneNumber'];
    $address1= $row['address1'];
    $address2= $row['address2'];
    $district= $row['district'];
    $state= $row['state'];
    $pinCode= $row['pinCode'];
    $country= $row['country'];
    $pAddress1= $row['pAddress1'];
    $pAddress2= $row['pAddress2'];
    $pDistrict= $row['pDistrict'];
    $pState= $row['pState'];
    $pPinCode= $row['pPinCode'];
    $pCountry= $row['pCountry'];
    }

	if (isset($_POST['submit'])) {
        $id= $_POST['id'];
        $firstName =  $_POST['firstName'];
        $lastName =  $_POST['lastName'];
        $class =  $_POST['class'];
        $dob =  $_POST['dob'];
        $fatherName= $_POST['fatherName'];
        $motherName= $_POST['motherName'];
        $email= $_POST['email'];
        $altEmail= $_POST['altEmail'];
        $password=$_POST['password'];
        $phoneNumber= $_POST['phoneNumber'];    
        $altPhoneNumber= $_POST['altPhoneNumber'];
        $address1= $_POST['address1'];
        $address2= $_POST['address2'];
        $district= $_POST['district'];
        $state= $_POST['state'];
        $pinCode= $_POST['pinCode'];
        $country= $_POST['country'];
        $pAddress1= $_POST['pAddress1'];
        $pAddress2= $_POST['pAddress2'];
        $pDistrict= $_POST['pDistrict'];
        $pState= $_POST['pState'];
        $pPinCode= $_POST['pPinCode'];
        $pCountry= $_POST['pCountry'];

		$a="INSERT INTO info VALUES ('".$id."','".$firstName."', '".$lastName."', '".$class."', '".$dob."', '".$fatherName."', '".$motherName."', '".$email."','".$password."', '".$phoneNumber."', '".$altEmail."', '".$altPhoneNumber."', '".$address1."', '".$address2."', '".$district."', '".$state."', '".$pinCode."', '".$country."', '".$pAddress1."', '".$pAddress2."', '".$pDistrict."', '".$pState."','".$pPinCode."', '".$pCountry."')"; 
        if ($db->query($a) === TRUE) {
            $_SESSION['message'] = "Address saved"; 
        } else {
            
        }
        
		
    }

    function update(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentdetails";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $id= $_POST['id'];  
        $firstName =  $_POST['firstName'];
        $lastName =  $_POST['lastName'];
        $class =  $_POST['class'];
        $dob =  $_POST['dob'];
        $fatherName= $_POST['fatherName'];
        $motherName= $_POST['motherName'];
        $email= $_POST['email'];
        $phoneNumber= $_POST['phoneNumber'];
        $password=$_POST['password'];
        $altEmail= $_POST['altEmail'];
        $altPhoneNumber= $_POST['altPhoneNumber'];
        $address1= $_POST['address1'];
        $address2= $_POST['address2'];
        $district= $_POST['district'];
        $state= $_POST['state'];
        $pinCode= $_POST['pinCode'];
        $country= $_POST['country'];
        $pAddress1= $_POST['pAddress1'];
        $pAddress2= $_POST['pAddress2'];
        $pDistrict= $_POST['pDistrict'];
        $pState= $_POST['pState'];
        $pPinCode= $_POST['pPinCode'];
        $pCountry= $_POST['pCountry'];
    
    $sql="UPDATE info SET firstName =  '$firstName', lastName = '$lastName', class = '$class', dob = '$dob',fatherName= '$fatherName', motherName= '$motherName', email= '$_POST[email]', phoneNumber= '$phoneNumber', altEmail= '$altEmail', altPhoneNumber= '$altPhoneNumber', address1= '$address1', address2= '$address2', district= '$district', state= '$state', pinCode= '$pinCode', country= '$country', pAddress1= '$pAddress1', pAddress2= '$pAddress2',pDistrict= '$pDistrict',pState= '$pState',pPinCode= '$pPinCode',pCountry= '$pCountry' WHERE id=$id";
    $result = mysqli_query($conn, $sql);

        
        
    }

    if (isset($_POST['edit'])) {
        $update=false;
    }

    if (isset($_POST['del'])) {
	$id = $_POST['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index.php');
    }
?>

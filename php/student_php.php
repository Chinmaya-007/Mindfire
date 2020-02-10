<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'studentdetails');

	// initialize variables
	$firstName = "";
	$lastName = "";
	$class = "";
    $dob = "";
    $fatherName="";
    $motherName="";
    $email="";
    $phoneNumber="";
    $altEmail="";
    $altPhoneNumber="";
    $address1="";
    $address2="";
    $district="";
    $state="";
    $pinCode="";
    $country="";
    $pAddress1="";
    $pAddress2="";
    $pDistrict="";
    $pState="";
    $pPinCode="";
    $pCountry="";
    $id = 0;
	$update = false;

	if (isset($_POST['submit'])) {
        $firstName =  $_POST['firstName'];
        $lastName =  $_POST['lastName'];
        $class =  $_POST['class'];
        $dob =  $_POST['dob'];
        $fatherName= $_POST['fatherName'];
        $motherName= $_POST['motherName'];
        $email= $_POST['email'];
        $phoneNumber= $_POST['phoneNumber'];
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

		mysqli_query($db, "INSERT INTO info (firstName, lastName, class, dob, fatherName, motherName, email, phoneNumber, altEmail, altPhoneNumber, address1, address2, district, state, pinCode, country, pAddress1, pAddress2, pDistrict, pState, pPinCode, pCountry) VALUES ('$firstName', '$lastName', '$class', '$dob', '$fatherName', '$motherName', '$email', '$phoneNumber', '$altEmail', '$altPhoneNumber', '$address1', '$address2', '$district', '$state', '$pinCode', '$country', '$pAddress1', '$pAddress2', '$pDistrict', '$pState=',$pPinCode', '$pCountry', )"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: studentDetails.html');
    }


    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $firstName =  $_POST['firstName'];
        $lastName =  $_POST['lastName'];
        $class =  $_POST['class'];
        $dob =  $_POST['dob'];
        $fatherName= $_POST['fatherName'];
        $motherName= $_POST['motherName'];
        $email= $_POST['email'];
        $phoneNumber= $_POST['phoneNumber'];
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

	mysqli_query($db, "UPDATE info SET firstName =  '$firstName', lastName = '$lastName', class = '$class', dob = '$dob',fatherName= '$fatherName', motherName= '$motherName', email= '$email', phoneNumber= '$phoneNumber', altEmail= '$altEmail', altPhoneNumber= '$altPhoneNumber', address1= '$address1', address2= '$address2', district= '$district', state= '$state', pinCode= '$pinCode', country= '$country', pAddress1= '$pAddress1', pAddress2= '$pAddress2',pDistrict= '$pDistrict',pState= '$pState',pPinCode= '$pPinCode',pCountry= '$pCountry', WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
    header('location: studentDetails.html');
    }

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

    if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index.php');
    }
?>

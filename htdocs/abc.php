<?php
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
$_SESSION['message'] = "Address updated!"; 
header('Location: profile.php');
?>
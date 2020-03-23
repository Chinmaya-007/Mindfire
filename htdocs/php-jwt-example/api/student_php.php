<?php
    include_once './config/database.php';
    // session_start();
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "studentdetails";
    // $db = new mysqli($servername, $username, $password, $dbname);

    header("Access-Control-Allow-Origin: * ");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    $id = 0;
	$firstName = "";
	$lastName = "";
	$class = "";
    $dob = "";
    $fatherName="";
    $motherName="";
    $email="";
    $password="";
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
    $update = false;
    $conn = null;

    $databaseService = new DatabaseService();
    $conn = $databaseService->getConnection();
    $data = json_decode(file_get_contents("php://input"));

	if (isset($_POST['submit'])) {
        $id= $data->id;
        $firstName =  $data->firstName;
        $lastName =  $data->lastName;
        $class =  $data->class;
        $dob =  $data->dob;
        $fatherName= $data->fatherName;
        $motherName= $data->motherName;
        $email= $data->email;
        $altEmail= $data->altEmail;
        $password=$data->password;
        $phoneNumber= $data->phoneNumber;    
        $altPhoneNumber= $data->altPhoneNumber;
        $address1= $data->address1;
        $address2= $data->address2;
        $district= $data->district;
        $state= $data->state;
        $pinCode= $data->pinCode;
        $country= $data->country;
        $pAddress1= $data->pAddress1;
        $pAddress2= $data->pAddress2;
        $pDistrict= $data->pDistrict;
        $pState= $data->pState;
        $pPinCode= $data->pPinCode;
        $pCountry= $data->pCountry;

		$query="INSERT INTO info VALUES ('".$id."','".$firstName."', '".$lastName."', '".$class."', '".$dob."', '".$fatherName."', '".$motherName."', '".$email."','".$password."', '".$phoneNumber."', '".$altEmail."', '".$altPhoneNumber."', '".$address1."', '".$address2."', '".$district."', '".$state."', '".$pinCode."', '".$country."', '".$pAddress1."', '".$pAddress2."', '".$pDistrict."', '".$pState."','".$pPinCode."', '".$pCountry."')"; 
        $stmt = $conn->prepare($query);
		$stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':class', $class);
        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':fatherName', $fatherName);
        $stmt->bindParam(':motherName', $motherName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':altEmail', $altEmail);
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password_hash);
        $stmt->bindParam(':phoneNumber', $phoneNumber);
        $stmt->bindParam(':altPhoneNumber', $altPhoneNumber);
        $stmt->bindParam(':address1', $address1);
        $stmt->bindParam(':address2', $address2);
        $stmt->bindParam(':district', $district);
        $stmt->bindParam(':state', $state);
        $stmt->bindParam(':pinCode', $pinCode);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':pAddress1', $pAddress1);
        $stmt->bindParam(':pAddress2', $pAddress2);
        $stmt->bindParam(':pDistrict', $pDistrict);
        $stmt->bindParam(':pState', $pState);
        $stmt->bindParam(':pPinCode', $pPinCode);
        $stmt->bindParam(':pCountry', $pCountry);
        if($stmt->execute()){

            http_response_code(200);
            echo json_encode(array("message" => "User was successfully registered."));
        }
        else{
            http_response_code(400);
        
            echo json_encode(array("message" => "Unable to register the user."));
        }
    }

    if (isset($_POST['update'])) {
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

	mysqli_query($db, "UPDATE info SET firstName =  '$firstName', lastName = '$lastName', class = '$class', dob = '$dob',fatherName= '$fatherName', motherName= '$motherName', email= '$email', phoneNumber= '$phoneNumber', altEmail= '$altEmail', altPhoneNumber= '$altPhoneNumber', address1= '$address1', address2= '$address2', district= '$district', state= '$state', pinCode= '$pinCode', country= '$country', pAddress1= '$pAddress1', pAddress2= '$pAddress2',pDistrict= '$pDistrict',pState= '$pState',pPinCode= '$pPinCode',pCountry= '$pCountry', WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
    }

    if (isset($_POST['edit'])) {
        $id = $_POST['edit'];
        $update=false;
    }

    if (isset($_POST['del'])) {
	$id = $_POST['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: index.php');
    }
?>

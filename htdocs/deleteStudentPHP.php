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
            $password=$n['password'];
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
            $update=false;
        }
<?php
//header ("Access-Control-Allow-Origin: http://localhost:4200");
//header ("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
//header ("Access-Control-Allow-Headers: origin, x-requested-with, content-type, authorization");
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;
use Tuupola\Middleware\JwtAuthentication;

//$app = new \Slim\App(['settings' => ['displayErrorDetails' => true]]);
use \Firebase\JWT\JWT;



$app->add(new Tuupola\Middleware\JwtAuthentication([
    "path" => ["/api"],
    "ignore" => ["/api/login"],
    "secret" => "chinmaya"
]));
//show all student details

$app->get('/api1/students',function(Request $request, Response $response){
    $sql="select * from info";
    try{
        $db= new db();
        $db=$db->connect();
        $stmt =$db->query($sql);
        $student=$stmt->fetchAll(PDO::FETCH_OBJ);
        $db= null;
        return $response->withJson($student,200);
        //echo json_encode($student);

    }catch(PDOException $e){
        echo '{"error":{"text": '.$e->getMessage().'}';

    }

});

//get single student
$app->get('/api1/students/{id}',function(Request $request, Response $response){
    $id = $request->getAttribute('id');
    $sql="select * from info where id = $id";
    try{
        $db= new db();
        $db=$db->connect();
        $stmt =$db->query($sql);
        $student=$stmt->fetchAll(PDO::FETCH_OBJ);
        $db= null;
        if($student!=NULL)
        {
            return $response->withJson($student,200);

        }
        else{
            $body = $response->getBody();
            $body->write('No student found with this id');
            return $response->withStatus(404)->withBody($body);
        }
        

    }catch(PDOException $e){
        echo '{"error":{"text": '.$e->getMessage().'}';

    }

});


// add student in the database
$app->post('/api1/students',function(Request $request, Response $response){
    $parsedBody = $request->getParsedBody();
    
    
    $id='0';
    $firstName= $parsedBody['firstName'];
    $lastName= $parsedBody['lastName'];
    $class= $parsedBody['class'];
    $dob= $parsedBody['dob'];
    $fatherName= $parsedBody['fatherName'];
    $motherName= $parsedBody['motherName'];
    $email= $parsedBody['email'];
    $password=$parsedBody['password'];
    $phoneNumber= $parsedBody['phoneNumber'];  
    $altEmail= $parsedBody['altEmail'];    
    $altPhoneNumber= $parsedBody['altPhoneNumber'];
    $address1= $parsedBody['address1'];
    $address2= $parsedBody['address2'];
    $district= $parsedBody['district'];
    $state= $parsedBody['state'];
    $pinCode= $parsedBody['pinCode'];
    $country= $parsedBody['country'];
    $pAddress1= $parsedBody['pAddress1'];
    $pAddress2= $parsedBody['pAddress2'];
    $pDistrict= $parsedBody['pDistrict'];
    $pState= $parsedBody['pState'];
    $pPinCode= $parsedBody['pPinCode'];
    $pCountry= $parsedBody['pCountry'];
    
    

    


    //}catch(PDOException $e){
        $sql="select * from info where email='$email'";
        $db=new db();
        $db=$db->connect();
        $stmt =$db->query($sql);
        $student=$stmt->fetch(PDO::FETCH_OBJ);
        $db= null;
        if ($student!=null) {
            $body = $response->getBody();
            
            return $response->withStatus(502,"email in use");
        }
        else{

            $sql="INSERT INTO info VALUES 
    (:id, :firstName, :lastName, :class, :dob, :fatherName, :motherName, :email,:password, :phoneNumber, :altEmail, :altPhoneNumber, :address1, :address2, :district, :state, :pinCode, :country, :pAddress1, :pAddress2, :pDistrict, :pState,:pPinCode, :pCountry) ";
    
        $db= new db();
        $db=$db->connect();
        $stmt =$db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':firstName', $firstName);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':class', $class);
        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':fatherName', $fatherName);
        $stmt->bindParam(':motherName', $motherName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':phoneNumber', $phoneNumber);
        $stmt->bindParam(':altEmail', $altEmail);    
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
        $stmt->execute();
        //$student=$stmt->fetchAll(PDO::FETCH_OBJ);

        
        return $response->withStatus(201);
        }
        

    //}

});

$app->put('/api1/students/{id}',function(Request $request, Response $response){
    $id=$request->getAttribute('id');
    $parsedBody = $request->getParsedBody();
    $firstName= $parsedBody['firstName'];
    $lastName =  $parsedBody['lastName'];
    $class =  $parsedBody['class'];
    $dob =  $parsedBody['dob'];
    $fatherName= $parsedBody['fatherName'];
    $motherName= $parsedBody['motherName'];
    $email= $parsedBody['email'];
    $password=$parsedBody['password'];
    $phoneNumber= $parsedBody['phoneNumber'];  
    $altEmail= $parsedBody['altEmail'];    
    $altPhoneNumber= $parsedBody['altPhoneNumber'];
    $address1= $parsedBody['address1'];
    $address2= $parsedBody['address2'];
    $district= $parsedBody['district'];
    $state= $parsedBody['state'];
    $pinCode= $parsedBody['pinCode'];
    $country= $parsedBody['country'];
    $pAddress1= $parsedBody['pAddress1'];
    $pAddress2= $parsedBody['pAddress2'];
    $pDistrict= $parsedBody['pDistrict'];
    $pState= $parsedBody['pState'];
    $pPinCode= $parsedBody['pPinCode'];
    $pCountry= $parsedBody['pCountry'];
    //print_r($parsedBody);
    

    if($firstName!= NULL || $lastName !=  NULL || $class !=  NULL || $dob !=  NULL|| $fatherName!= NULL || $motherName!= NULL || $email!= NULL|| $password!=NULL|| $phoneNumber!= NULL || $altEmail!= NULL || $altPhoneNumber!= NULL || $address1!= NULL || $address2!= NULL || $district!= NULL || $state!= NULL || $pinCode!= NULL || $country!= NULL || $pAddress1!= NULL || $pAddress2!= NULL || $pDistrict!= NULL || $pState!= NULL || $pPinCode!= NULL || $pCountry!= NULL )
    {

        $sql="UPDATE info set 
                            id=:id,
                            firstName=:firstName,
                            lastName=:lastName,
                            class=:class,
                            dob=:dob, 
                            fatherName=:fatherName,
                            motherName=:motherName,
                            email=:email,
                            password=:password, 
                            phoneNumber=:phoneNumber, 
                            altEmail=:altEmail, 
                            altPhoneNumber=:altPhoneNumber, 
                            address1=:address1, 
                            address2=:address2, 
                            district=:district, 
                            state=:state, 
                            pinCode=:pinCode, 
                            country=:country, 
                            pAddress1=:pAddress1, 
                            pAddress2=:pAddress2, 
                            pDistrict=:pDistrict, 
                            pState=:pState,
                            pPinCode=:pPinCode, 
                            pCountry=:pCountry 
                        where id=:id ";
        
            $db= new db();
            $db=$db->connect();
            $stmt =$db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':firstName', $firstName);
            $stmt->bindParam(':lastName', $lastName);
            $stmt->bindParam(':class', $class);
            $stmt->bindParam(':dob', $dob);
            $stmt->bindParam(':fatherName', $fatherName);
            $stmt->bindParam(':motherName', $motherName);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':phoneNumber', $phoneNumber);
            $stmt->bindParam(':altEmail', $altEmail);    
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
            $stmt->execute();
            return $response->withStatus(204,"updated");
    }
    else{
        $body = $response->getBody();
        $body->write("All fields are not present");
        return $response->withStatus(405)->withBody($body);
        
    }
    
});


$app->delete('/api1/students/{id}',function(Request $request, Response $response, array $args){
    
    
    if (! isset($args[1])) {
        exit('Please provide a key to verify');
    }
    $jwt = $argv[1];
    $secret="chinmaya";
    $payload = JWT::decode($jwt,$secret,['HS256']);
    //$signatureProvided = $tokenParts[2];
    //$id = $request->getAttribute('id');
    
    //$sql="DELETE from info where id = $id";
    try{
        
        //$payload = JWT::decode($jwt, $secret, ['HS256']);
        $sql = "select * from info where email='$payload->eamil' AND password='$payload->password'";
        $db= new db();
        $db=$db->connect();
        $stmt =$db->query($sql);
        $student = $stmt->fetch(PDO::FETCH_OBJ);
        if($student != null){
            $id =$request->getAttribute('id');
            $sql = "delete from info where id=$id";

            $stmt = $db->query($sql);
            $student_record = $stmt->fetch(PDO::FETCH_OBJ);
            if ($student_record != null) {
                return $response->withJson($student_record);
            }else{
                $data_unfound = array('message' => 'Record Not Found');
                return $response->withJson($data_unfound, 404);
            }

        }

    }catch(PDOException $e){
        $body = $response->getBody();
        $body->write("Id not found");
        return $response->withStatus(400)->withBody($body);

    }

});

$app->post('/api1/login',function(Request $request, Response $response){

    $parsedBody = $request->getParsedBody();
    
    $email= $parsedBody['email'];
    $password =  $parsedBody['password'];
    
    // $sql="SELECT * from info where email ='$email' AND password='$password'";
    // try{
        // $db= new db();
        // $db=$db->connect();
        // $stmt =$db->query($sql);
        // $student=$stmt->fetch(PDO::FETCH_OBJ);

        // $db= null;
        // if($student!=NULL){
        //     echo '{"notice":{"text": "logged in !"}';

        // }
        // else{
        //     echo '{"notice":{"text": "invalid Log in !"}';
        // }
        


    // }catch(PDOException $e){
    //     echo '{"error":{"text": '.$e->getMessage().'}';

    // }
    global $fm;

    // $db= new db();
    // $fm=$db->connect();
    //$jwt = new config\jwt();
    $vars = json_decode($request->getBody());
    if( array_key_exists('email', $vars) == false || $vars->email == null) {
        $newresponse = $response->withStatus(401);
        return $newresponse->withJson(['status'=>false, 'message'=>'Email is required ']);
    }
    if( array_key_exists('password', $vars) == false || $vars->password == null) {
        $newresponse = $response->withStatus(401);
        return $newresponse->withJson(['status'=>false, 'message'=>'password is required']);
    }
    $email = $vars->email;
    $password = $vars->password;
    
    $findCommand = $fm->newFindCommand('studentDetails');
    $findCommand->addFindCriterion('email', $email);
    $findCommand->addFindCriterion('password', $password);
    $findCommand->setLogicalOperator(FILEMAKER_FIND_AND);
    $result=$findCommand->execute();   
    if (FileMaker::isError($result)) {
        if ($result->code = 401) {
        $findError = 'There are no Records that match that request: '. ' (' .
        $result->code . ')';
        } else {
        $findError = 'Find Error: '. $result->getMessage(). ' (' . $result->code
        . ')';
        }
        $newresponse =  $response->withStatus(404);
        return $newresponse->withJson(["success"=>false,"message"=>"credentials dosent match each other"]);
        }  
    $ph=$result->getRecords()[0]->_impl->_fields['email'][0];
    if(count($result->getRecords())==1){
        $token = $jwt->jwttokenencryption( $ph);
    return $response->withJson(["status"=>true,  "token"=>$token]);
    } else {
        $newresponse = $response->withStatus(401);
        return $newresponse->withJson(["status"=>false, "message"=>"credentials dosent match each other"]);
    }
});
?>
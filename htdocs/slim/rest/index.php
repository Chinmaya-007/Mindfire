<?php
require("db.php");
$db= new DB("localhost","studentdetails","root","");


if($_SERVER['REQUEST_METHOD']=="GET"){
    //echo json_encode($db->query("SELECT * FROM info"));
    //http_response_code(200);
    if($_GET['url']=="login"){
        echo json_encode($db->query("SELECT * FROM info"));

    }
    elseif($_GET['url']=="user"){

    }

}
elseif($_SERVER['REQUEST_METHOD']=="POST"){
    if($_GET['url']=="login"){
        $postBody= file_get_contents("php://input");
        //echo $postBody;
        //$postBody=json_encode($postBody);
        //var_dump($postBody);
        // $error = json_last_error();
        // echo $error;
        $email=$postBody->email;
        $password=$postBody->password;
        if($db->query('select email from info where email=:email',array(':email'=>$email))){
            if(password_verify($password, $db->query('select password from info where email=:email',array(':email'=>$email))[0]['password'])){
                    echo "valid";
            }
        }

    }

}
else{
    http_response_code(405);
}
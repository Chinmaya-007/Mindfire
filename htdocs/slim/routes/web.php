<?php
$app->get('/login',function($request,$response){
    
    echo json_encode($this->db->query("SELECT * FROM info"));
    
});
$app->post('/login',function($request,$response,$args){
    $email=$request->getParam('email');
    $password=$request->getParam('password');
    if($user=$this->db->query("SELECT password FROM info WHERE email='".$email."' & password='".$email."'")->fetchAll(PDO::FETCH_OBJ)){
        echo "valid";
    } 
});


$app->get('/profile',function($request,$response){
    return $this->view->render($response,'profile.php');
});

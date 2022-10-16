<?php 
//response header indicates whether the response can be shared with requesting code from the given origin.
header("Access-Control-Allow-Origin: *"); //  * => all can access
//to make it support arabic and other language and support data with type json
header("Content-Type: application/json; charset=UTF-8");
//specify the way used to acess the api (GET-POST) etc
header("Access-Control-Allow-Method: *");
//the time in second in which the date be stored in cache memory to acess faster
header("Access-Control-Max-Age: 3600");
//give acess to the browser to exchange data withot errors
header("Access-Control-Allow-Headers: *");

//get the POST data 
$data = file_get_contents('php://input');
$data =json_decode($data);
// print_r($data);

if(isset($data->name)){
    print_r(json_encode(['password'=>'1234','email'=>'example@gmail.com']));
}else{
    print_r(json_encode(['message'=>'error']));
    
}


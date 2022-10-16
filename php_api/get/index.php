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


if(isset($_GET['username']) && isset($_GET['key'])){
    if($_GET['username']==="mohamed" && $_GET['key']==='1234'){

        
           $data =["name"=>"mohamed","department"=>"Computer Science"];
           $jsonData = json_encode($data);
           // print_r($data);
           print_r($jsonData);
    }else{
        $data = ['message'=>'خطأ فى طلب البيانات'];
        $jsonData = json_encode($data);
        print_r($jsonData);
    }
}else{
    $data = ['message'=>'خطأ فى طلب البيانات'];
    $jsonData = json_encode($data);
    print_r($jsonData);
}

<?php
/* 
---------------------------------------------------
json_decode()
    convert json object to php object or array
---------------------------------------------------
*/

$data ='{"name":"mmohamed" , "age":"22"}';

$objData = json_decode($data); //convert the json to php object

var_dump($objData); //object(stdClass)#1 (2) { ["name"]=> string(8) "mmohamed" ["age"]=> string(2) "22" }
echo   "<br>"; 
echo $objData ->name;
echo   "<br>"; 

$arrayData = json_decode($data,true); // true to convert to ass array

var_dump( $arrayData); //array(2) { ["name"]=> string(8) "mmohamed" ["age"]=> string(2) "22" }
echo   "<br>";
echo $arrayData['name'];
echo   "<br>"; 

?>

<?php

echo str_repeat("---------------------------------------------------",4)."<br>";
/* 
---------------------------------------------------
json_encode()
    convert php object or array to json object
---------------------------------------------------
*/
$data =["name"=>"mohamed","age"=>22];
$jsonData = json_encode($data);
print_r($jsonData);
echo   "<br>"; 


class Data {
    public $name ='mohamed';
    public $height = 178.5;
}
$data2 = new Data();
$jsonData2= json_encode($data2);
print_r($jsonData2);
echo   "<br>"; 
echo   "<br>"; 

?>


<?php
echo str_repeat("---------------------------------------------------",4)."<br>";

/* 
-----------------------------------------------------------------------------------
json_last_error()
-----------------------------------------------------------------------------------
index     =>                      value
-----------------------------------------------------------------------------------
0         =>      JSON_ERROR_NONE                                   لم يحصل اى خط
-----------------------------------------------------------------------------------
1         =>      JSON_ERROR_DEPTH                  تم نجاوز القيمة القصوى للعمق
-----------------------------------------------------------------------------------
2         =>      JSON_ERROR_STATE_MISMATCH                  صيغة جيسون غير صالحه
-----------------------------------------------------------------------------------
3         =>      JSON_ERROR_CTRL_CHAR     
-----------------------------------------------------------------------------------
4         =>      JSON_ERROR_SYNTAX
-----------------------------------------------------------------------------------
5         =>      JSON_ERROR_UTF8
-----------------------------------------------------------------------------------
6         =>      JSON_ERROR_RECURSION
-----------------------------------------------------------------------------------
7         =>      JSON_ERROR_INF_OR_NON
-----------------------------------------------------------------------------------
8         =>      JSON_ERROR_UNSUPPORTED_TYPE     ادخلت قيمة من نوع لا يمكن ترميزه
-----------------------------------------------------------------------------------
9         =>      JSON_ERROR_INVALID_PROPERTY_NAME
-----------------------------------------------------------------------------------
10        =>     JSON_ERROR_UTF16
-----------------------------------------------------------------------------------
*/

$data ="{'name':'mohamed','age':22}";//must use "" not ''
var_dump(json_decode($data));
echo '<br>';
echo json_last_error(); //4
echo '<br>';
echo json_last_error_msg(); //Syntax error


?>
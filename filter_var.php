<?php
//---------------------filter sanitize-------------------------
/* 
FILTER_SANITIZE_EMAIL :  remove any chars is not valid in email
*/
$email ='test< >@gmail.com';
$filterd_email = filter_var($email,FILTER_SANITIZE_EMAIL);
echo "email before is : $email and after is : $filterd_email <br>";
//output is : convert from test< >@gmail.com to test@gmail.com

/* 
FILTER_SANITIZZE_FLOAT : remove any chars exept digits,+- and optionally .,eE
*/
$number_float= filter_var('235.88,7  5+2test number float',FILTER_SANITIZE_NUMBER_FLOAT);
echo $number_float."<br>";
//output : 2358875+2
// to make the fraction allow ( . ) use additional filter  FILTER_FLAG_ALLOW_FRACTION
$number_float= filter_var('235.88,7  5+2test number float',FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
echo $number_float."<br>";
//output: 235.8875+2
// to allow ( , ) use FILTER_FLAG_ALLOW_THOUSAND
$number_float= filter_var('235.88,7  5+2test number float',FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_THOUSAND);
echo $number_float."<br>";
//output: 23588,75+2
//to allow use of (e or E) use FILTER_FLAG_ALLOW_SCIENTIFIC
$number_float= filter_var('235.88,7  5+2test numbr float',FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_SCIENTIFIC);
echo $number_float."<br>";
//output: 2358875+2e

/*
*FILTER_SANITIZE_NUMBER_INT : Remove all characters except digits, plus and minus sign.
*/
$numberInt = filter_var('22.5 + 5,8/7 int', FILTER_SANITIZE_NUMBER_INT);
echo $numberInt."<br>";
//output: 225+587

/* 
FILTER_SANITIZE_SPECIAL_CHARS : HTML-encode '"<>& and characters with ASCII value less than 32, optionally strip or encode other special characters.
*/

$text = filter_var('<h1> mohamed </h1>',FILTER_SANITIZE_SPECIAL_CHARS);
echo $text ."<br>";
//output : <h1> mohamed </h1>


/*
*FILTER_SANITIZE_STRING : remove html elements tags 
*/
$text = filter_var('<h1> mohamed </h1>',FILTER_SANITIZE_STRING);//PHP 8.1.0, use htmlspecialchars() instead
echo $text ."<br>";
//output : <h1> mohamed </h1>
?>
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer();

    //server setting
    // $mail->SMTPDebug  = SMTP::DEBUG_SERVER;           //Enable verbose debug output (show you if there any error)
    $mail->isSMTP();                                     //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                //Set the SMTP server to send through ('smtp.example.com')
    $mail->SMTPAuth   = true;                            //Enable SMTP authentication
    $mail->Username   ='mohamedkaoud865@gmail.com';      //SMTP username
    $mail->Password   ='ccbwxdlspayfmapn';                         //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;     //Enable implicit TLS encryption
    $mail->Port       = 465;                             //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    //content format
    $mail ->isHTML(true);  //set email format to html
    $mail ->CharSet = 'UTF-8';
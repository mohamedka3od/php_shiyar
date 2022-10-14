<?php
// openssl_encrypt() //function to envrypt data
//------------------------------------------------------------
// openssl_decrypt() //fun to decrypt the encrypted data
//------------------------------------------------------------
//$data = the data you want to encrypt or decrypt (must be string)
//------------------------------------------------------------
//$method =  cipher algo
//------------------------------------------------------------
//$key = pharse pass
//------------------------------------------------------------
// $options =0
//------------------------------------------------------------
// $iv = generate unique key for the encrypted data (must be 16 digit number or different depend on the method)
// openssl_encrypt(string $data, string $method , string $key , int $options =0 , string $iv):string

$data = 'data to encrypt and decrypt';
//$key should have been previously generated in a cryptographically safe way, like openssl_random_pseudo_bytes
$key = openssl_random_pseudo_bytes(10);
echo "key : $key <br>";
$cipher ='aes-128-cbc-hmac-sha256';
$ivlen = openssl_cipher_iv_length($cipher); // to detrimine number of digits
echo "ivlen : $ivlen <br>";

$iv = openssl_random_pseudo_bytes($ivlen);  //generate random numbers based on num of digits
echo "iv : $iv <br>";

$encryptedData = openssl_encrypt($data, $cipher,$key,0,$iv);
echo "encryptedData : $encryptedData  <br>";

//store $cipher, $iv, and $tag for decryption later
$decryptedData = openssl_decrypt($encryptedData, $cipher,$key,0,$iv);
echo "decryptedData  : $decryptedData   <br>";

<?php
function test(int $num1 , int $num2): int{
    echo $num1;
    echo $num2;
    return  $num1 + $num2;
 
}
echo test(num2:5,num1:7).'<br><br>';

//------------------------------------hashing--------------------------
/*
hashing with sha1 and md5 can be used to hash and secure our data
Hashing is a one-way algorithm it can not be run in reverse
md5 and sha1 can't be decrypted, but what those sites do, 
is maintain giant databases of common lookups. 
So if you make your password 'password' the md5 
will always be '5f4dcc3b5aa765d61d8327deb882cf99' 
which means you can store that and you know that the hash always (minus collisions) 
matches password.
*/
echo sha1("123456");
echo "<br>";
echo md5("123456");
/*
`MD5` is fast in comparison of `SHA1`’s speed.
 However, SHA1 provides more security than MD5.
 */

?>
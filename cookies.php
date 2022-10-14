<?php
//setcookie(name,value,expire);
//echo $_COOKIE['name'];
setcookie('name','mohamed');

echo $_COOKIE['name'];
echo "<br>";
// $_COOKIE['name'] = 'ali'; // it is like a var not cookie

//to edit cookie
setcookie('name','ali');
echo $_COOKIE['name'];
echo "<br>";


// to delete a cookie
// setcookie('name','',time()-3600); // end one houre ago (time =time to this moment with sec , 3600 = 1h)
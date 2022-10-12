<?php
//$_SERVER['PHP_SELF']  return the file and folder name
echo $_SERVER['PHP_SELF'];         //php_shiyar/server.php
echo "<br>";

//$_SERVER['SCRIPT_FILENAME'] return the all path for the current file
echo $_SERVER['SCRIPT_FILENAME']; // D:/xampp/htdocs/php_shiyar/server.php
echo "<br>";

//$_SERVER['REQUEST_METHOD'] with which method the user enter the site
echo $_SERVER['REQUEST_METHOD'];         //GET by default
echo "<br>";


//$_SERVER['QUERY_STRING'] get query from url work with GET
echo $_SERVER['QUERY_STRING'];         //text=hjgh
echo "<br>";

// return the host ip
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
//return the host name
echo $_SERVER['SERVER_NAME'];
echo "<br>";
//return the user ip
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
?>

<form action="" method="GET">
    <input type="text" name="text" >
    <input type="submit" value="submit">
</form> 
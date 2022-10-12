<?php
/*----------------------DATE----------------------- */

/**
 * date_default_timezone_set
 *   to cahnge the default time zone from yours to any other 
 *   to fiend specific time zone go to : https://www.php.net/manual/en/timezones.php
 */

   


// date_default_timezone_set("Asia/Riyadh");

$date_today= date("d/m/y");
echo "d/m/y : ".$date_today;
// output: 11/10/22
echo "<br>";
$date_today= date("D/M/Y");
echo "D/M/Y : ".$date_today;
// output: Tue/Oct/2022
echo "<br>";


$today = date("F j, Y, g:i a");                   // March 10, 2001, 5:16 pm
$today = date("m.d.y");                           // 03.10.01
$today = date("j, n, Y");                         // 10, 3, 2001
$today = date("Ymd");                             // 20010310
$today = date('h-i-s, j-m-y, it is w Day');       // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');     // It is the 10th day (10ème jour du mois).
$today = date("D M j G:i:s T Y");                 // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \e\s\t\ \l\e\ \m\o\i\s'); // 17:03:18 m est le mois
$today = date("H:i:s");                           // 17:16:18
$today = date("Y-m-d H:i:s");                     // 2001-03-10 17:16:18 (le format DATETIME de MySQL)


/*----------------------TIME----------------------- */
/*
    H - 24-hour format of an hour (00 to 23) 
    h - 12-hour format of an hour with leading zeros (01 to 12)
    G - 24-hour format of an hour (0 to 23) 
    g - 12-hour format of an hour (1 to 12)
    i - Minutes with leading zeros (00 to 59)
    s - Seconds with leading zeros (00 to 59)
    a - Lowercase Ante meridiem and Post meridiem (am or pm)
*/
$time= date("h:i:s a"); //05:33:24 pm
echo $time;


?>
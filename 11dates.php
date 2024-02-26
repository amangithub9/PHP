<?php
// Set the timezone to Indian Standard Time
date_default_timezone_set('Asia/Kolkata');

echo "Welcome today we are going to learn dates in php. <br>";
/*

d - Represents the day of the month (01 to 31)
m - Represents a month (01 to 12)
Y - Represents a year (in four digits)
l (lowercase 'L') - Represents the day of the week

*/

// Dates
echo "Today is " . date("d - m - y l") . "<br>";
echo "Today is " . date("d - m - Y l") . "<br>";


//Time

/*
H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)
*/ 

echo "This time is ". date("h:i:sa") ."<br>";

// Get Your Time Zone

/*
<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>
*/ 

// Create a Date With mktime()

//mktime(hour, minute, second, month, day, year)

$d = mktime(11, 14, 54, 8, 12, 2024);
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$today = date("m.d.y");                         // 03.10.01
$today = date("j, n, Y");                       // 10, 3, 2001
$today = date("Ymd");                           // 20010310
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
$today = date("H:i:s");                         // 17:16:18
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)

?>
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

?>
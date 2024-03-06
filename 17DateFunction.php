<?php
// Set the timezone to Indian Standard Time
date_default_timezone_set('Asia/Kolkata');

echo "hi";
echo "<br>";
//***************** Time FUNCTION()************************* */

echo "Today is " . date("d/F/Y") . "<br>";

echo "Today is " . date("j/m/y - I") . "<br>";

echo "Today is " . date("jS/M/y - I ") . "<br>"; // N = starts with monday 

echo "Today is " . date("d") . "<br>";  // date -> 04
echo "Today is " . date("jS") . "<br>"; // date -> 4th s-> th rd nd
echo "month in number" . date("m") . "<br>";  // date -> month 03
echo "month in number " . date("n") . "<br>";  //date -> month 3
echo "Today is month " . date("M") . "<br>";  // date -> Mar
echo "Today is month " . date("F") . "<br>";  // date -> March
echo "Current year " . date("Y") . "<br>";  // date -> 2024
echo "Current year " . date("y") . "<br>";  // date -> 24
// echo "Today is " . date("I") . "<br>";  // week start from monday count
echo "Days start from Sunday " . date("w") . "<br>";  // week start from sunday count
echo "Days start from Sunday " . date("N") . "<br>"; // week day number 1
echo "Today is " . date("d-F-Y") . "<br>";
echo "Week day is " . date("D") . "<br>"; //week day Mon
echo "Week day is " . date("l") . "<br>"; // current day Monday
echo "Day of year " . date("z") . "<br>"; // current day in 365 days
echo "Week day is " . date("W") . "<br>"; // current week of the year
echo "Days of the month " . date("t") . "<br>"; // total day in current month
echo "Leap year or not " . date("L") . "<br>"; // return in 0 or 1


echo "<br>";
echo "<br>";

//***************** Time FUNCTION()************************* */

/*

Hours           Minutes             Second          Meridiem
h(01 to 12)     i(00 to 56)         s(00 to 59)     a (am or pm)
H(00 to 23)                                         A (AM or PM)
g(1 to 12) 
G(0 to 23) 

*/

echo "Hour is " . date("h") . "<br>";
echo "Hour is " . date("H") . "<br>";
echo "Hour is " . date("g") . "<br>";
echo "Hour is " . date("G") . "<br>";
echo "Minutes is " . date("i") . "<br>";
echo "Seconds is " . date("s") . "<br>";
echo "Meridiem is " . date("a") . "<br>";
echo "Meridiem is " . date("A") . "<br>";
echo "Time is " . date("h:i:sA e") . "<br>";  // e means show country time zone 
echo "Date and Time " . date("d-m-Y h:i:sA") ." Indian Standard Time " . "<br>";

echo "<br>";
echo "<br>";

//***************** Past Time function()************************* */

/*

        mktime(hour, minute, second, month, day, year) 
        gmmktime(hour, minute, second, month, day, year)
        ^ Greenwich mean time
*/

echo date("l", mktime(0,0,0,3 ,2 ,2024)) . "<br>";

echo date("d-m-Y", mktime(0,0,0,3 ,2 ,2024)) . "<br>";

echo date("d-m-Y h:i:sA", mktime(0,0,0,3 ,2 ,2024)) ." IST" ."<br>";  //IST time 

echo date("d-m-Y h:i:sA", gmmktime(0,0,0,3 ,2 ,2024))  . " GMT" ."<br>";  //GMT time


echo "<br>";
echo "<br>";


//***************** Date create function()************************* */
/*
    mktime() -> timestamp
    date_crete(time, timezone)
    date_format(object, format)
 */

    $date = date_create("2024-04-15 ") ;
    $date = date_create("2024-04-15 22:24:06") ;
    $date = date_create("2024-04-15 22:24:06" , timezone_open('Asia/Kolkata')) ;
    echo date_format($date, "l") . "<br>"; // which day it would be
    echo date_format($date, "d-m-Y ") . "<br>"; // which day it would be
    echo date_format($date, "d-m-Y h:i:sA  ") . "<br>"; // which day it would be


    echo "<br>";
    echo "<br>";
/*
checkdate(month, day, year)
date_diff(datetime1, datetime2, absolute) // pass true false in absolute it checks ut absolute differnece of given date.

*/
    
    echo checkdate(04, 05, 2024);
    echo checkdate(04, 35, 2024); //false
    echo "<br>";
    
    $date1 = date_create("2023-04-15");
    $date2 = date_create("2021-05-18");
    $diff = date_diff($date1, $date2);
    
    echo $diff->days . " Days";
    echo "<br>";
echo $diff->format("%R%a days"); // use to show in form of formate to get negative and positive value.


echo "<pre>";
print_r($diff);
echo "</pre>";

echo "<br>";
echo "<br>";

/*
******************** Date add and Sub Function
                    date_add(object, interval) +
                    date_sub(object, interval) -
                    date_modify(object, modify) 
*/
$date = date_create("2023-05-16");
date_add($date, date_interval_create_from_date_string("30 days")); // add days from given date.

echo date_format($date, "d-m-Y"); 

echo "<br>";

$date = date_create("2023-05-16");
date_sub($date, date_interval_create_from_date_string("30 days")); // subtract days from given date.

echo date_format($date, "d-m-Y"); 

echo "<br>";

$date = date_create("2023-05-16");
date_modify($date, "10 days"); // add and subtract days from given date.
date_modify($date, "-10 days"); // add and subtract days from given date.

echo date_format($date, "d-m-Y"); 


//********* Getdate() function */



?>
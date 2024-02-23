<?php

$name = "aman";  // string
echo $name;
echo "<br>";

$number = 5;  // integer
echo $number;
echo "<br>";

/* GET the Type :- The var_dump() function returns the data type and the value: */

$x = 5;
var_dump($x);  //get return type and value //int(5)
echo "<br>";

$s = "Aman";
var_dump($s);   //get return type and value //string("Aman")
echo "<br>";

var_dump(5);
echo "<br>";

var_dump("Aman");
echo "<br>";

var_dump(3.14);  // return float value
echo "<br>";

var_dump(true);  // return bool value
echo "<br>";

var_dump([2,3,4]); // return array
echo "<br>";

var_dump(NULL); // return null value
echo "<br>";

$a = $b = $c = "Fruits";  //Assign multiple value and get same results.

echo $a;
echo "<br>";

echo $b;
echo "<br>";

echo $c;
echo "<br>";


/*PHP Variable scope 
LOCAL
GLOBLE
STATIC
*/

$x1 = 5;  //global scope

function myTest(){
  //      using x inside this function will generate an error
//   echo "<p>Variables x inside function is : $x1</p>";
}
myTest();

echo "<p>Variables x inside function is : $x1</p>";
echo "<br>";

function myTest1(){
    $y1 = 5;  // Local
    
    echo "<p>Variables y1 inside function is: $y1</p>";
}
myTest1();

//        using y1 outside this function will generate an error
// echo "<p>Variables y1 inside function is: $y1</p>";


$x2 = 5;
$y2 = 10;

function myTest2(){
    global $x2, $y2;  // if u want to use global var in inside function use (global) keyword for that after that u can access indide that function.
    $y2 = $x2 + $y2;
}
myTest2();
echo $y2; // output 15.

echo "<br>";

$x3 = 5;
$y3 = 10;

function myTest4(){
    $GLOBALS['y3'] = $GLOBALS['x3'] + $GLOBALS['y3'];  // it is a 2nd method to store global var inside function using array[indexing] index holds reference value inside it.
}
myTest4();
echo $y3;  //output 15
echo "<br>";


?>
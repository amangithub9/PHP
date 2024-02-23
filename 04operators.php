<?php
/*
Operators in php
1. Arithmetic Operators 
2. Assignment Operators
3. Comparison Operators 
4. Logical Operators
*/


// 1. Arithmetic Operators 

$x = 10;
$y = 3;

echo "For x + y , the result is " . ($x + $y) . "<br>"; // addition
echo "For x - y , the result is " . ($x - $y) . "<br>"; // Subtraction
echo "For x * y , the result is " . ($x * $y) . "<br>"; // Multiplication
echo "For x / y , the result is " . ($x / $y) . "<br>"; // Division
echo "For x % y , the result is " . ($x % $y) . "<br>"; // Division
echo "For x ** y , the result is " . ($x ** $y) . "<br>"; // Division
echo "<br>";
// 2. Assignment Operators

$b = $x;
echo "Fox b, the value is :". $b  . "<br>";
echo "<br>";

// 3. Comparison Operators 

$x = 7;
$y = 78; // 66 false.
echo "Is x == y, the result is " ;
echo var_dump($x == $y) . "<br>";

echo "Is x != y, the result is " ;
echo var_dump($x != $y) . "<br>";

echo "Is x >= y, the result is " ;
echo var_dump($x >= $y) . "<br>";

echo "Is x <= y, the result is " ;
echo var_dump($x <= $y) . "<br>";

echo "Is x <> y, the result is " ;
echo var_dump($x <> $y) . "<br>";

echo "<br>";

// 4. Logical Operators

$x = true; // false
$y = false;

echo "Is x and y, the result is " ;
echo var_dump($x and $y) . "<br>";

echo "Is x && y, the result is " ;
echo var_dump($x && $y) . "<br>";

echo "Is x or y, the result is " ;
echo var_dump($x or $y) . "<br>";

echo "Is x || y, the result is " ;
echo var_dump($x || $y) . "<br>";

echo "Is x != y, the result is " ;
echo var_dump($x != $y) . "<br>";

echo "<br>";


?>
<?php

function square($x, $y){

    // return $x * $x;
    return "$x = $y";
}

$a = [1, 2, 3, 4, 5];
$b = ['Lemon', 'Orange', 'Green Apple', 'Mango', 'Lichi'];
$newArray = array_map('square', $a, $b);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>"; 

function myFunction($x, $y){

    // return $x * $x;
    return [$x => $y];  // return multidimensional array in this case.
}

$a = [1, 2, 3, 4, 5];
$b = ['Lemon', 'Orange', 'Green Apple', 'Mango', 'Lichi'];
// $newArray = array_map('myFunction', $a, $b);
$newArray = array_map(null, $a, $b); // it return seperate array

echo "<pre>";
print_r($newArray);
echo "</pre>";



echo "<br>";

function uppercase($name){
    return strtoupper($name);
}

$fruits = [
    "one" => "apple",
    "two" => "orange",
    "three" => "mango"
];

$newArray = array_map('uppercase',$fruits);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";


function myReduce($name, $name2){
    return $name . "-" . $name2;
}
$fruits = ['Lemon', 'Orange', 'Grapes', 'Mango', 'Lichi'];

$newArray = array_reduce($fruits, 'myReduce'); // array_reduce(array, function, inital value)

echo "<pre>";
print_r($newArray);
echo "</pre>";


?>
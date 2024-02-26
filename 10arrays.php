<?php

echo "Welcome we are here to learn Arrays today! <br>";

$arr = array("Volvo", "BMW", "Tata");

echo $arr[0];
echo "<br>";
echo $arr[1];
echo "<br>";
echo $arr[2];
echo "<br>";
echo "<br>";

$favCar = array(
    'Bmw' => 'S Class',
    'Tata' => 'Harries',
    'Mahindra' => 'XUV 700',
    'VW' => 'Vento',
    'Toyota' => 'Fortuner',
    'Ford' => 'Endevour',
    'Hero' => 'Splender',
    'Honda' => 'City',
    'Audi' => 'R8'   
);

var_dump($favCar);
echo "<br>";
echo "<br>";
$favCar["Audi"] = "R";
echo var_dump($favCar);
echo "<br>";
echo "<br>";

echo $favCar['VW'];
echo "<br>";
echo "<br>";

foreach ($favCar as $key => $value) { // key associates value
    # code...
    echo "This is my fav car from brands $key ki $value <br>";
}
echo "<br>";
echo count($favCar);  // for counting
echo "<br>";

echo $favCar['Bmw']; // this is how u can access individual associates from array
echo "<br>";
echo $favCar['Audi'];
echo "<br>";
echo $favCar['Honda'];
echo "<br>";
echo $favCar['VW'];
echo "<br>";
echo "<br>";


$cars = [
    "Volvo",
    "BMW",
    "Tata",
    "Toyota",
    "Audi",
    "VW"
]; //PHP indexed Arrays

var_dump($cars );  // access indexed arrays
echo $cars[0];
echo $cars[1];
echo $cars[2];


echo "<br>";
echo "<br>";

$cars = [
    "Volvo",
    "BMW",
    "Tata",
    "Toyota",
    "Audi",
    "VW"
];
$cars[3] = "Ford";   // this is how u can change the value of an arrays
var_dump($cars);

echo "<br>";
echo "<br>";

$cars = [
    "Volvo",
    "BMW",
    "Tata",
    "Toyota",
    "Audi",
    "VW"
];  // loop throungh an indexed array
 
foreach ($cars as $value) {
    # code...
    echo $value . "<br>";
}

$haathi = [];  //Declare empty array []
$haathi[0] = "chota hathi";
$haathi[1] = "bada hathi";
$haathi[2] = "sbse bada hathi";

var_dump($haathi);
echo "<br>";
echo "<br>";

$myCar = [];

$myCar["valvo"] = "XC 90";
$myCar["Tata"] = "Harrier";
$myCar["RR"] = "Defendre";

var_dump($myCar);

echo "<br>";
echo "<br>";

$mixArray = [];  // mixing Arrays
    $mixArray[0] = "chota hathi";
    $mixArray[1] = "bada hathi";
    $mixArray[2] = "sbse bada hathi";
    $mixArray["valvo"] = "XC 90";
    $mixArray["Tata"] = "Harrier";
    $mixArray["RR"] = "Defendre";

var_dump($mixArray);

echo "<br>";
echo "<br>";
echo "<br>";

//ADDITION IN ARRAY ITEMS

$fruits = [
    "Apple",
    "Banana",
    "Green Apple",
    "Grapes",
    "Orange"
];
$fruits[] = "Avacado"; // this statment will add another fruits in it.
// $fruits = ["Amrood"]; // this statment will redeclare 

print_r($fruits);
echo "<br>";
echo "<br>";
var_dump($fruits);

echo "<br>";
echo "<br>";


$myFavCar = [
    'Bmw' => 'S Class',
    'Tata' => 'Harries',
    'Mahindra' => 'XUV 700',
    'VW' => 'Vento',
    'Toyota' => 'Fortuner'
];
// Adding associate arrays
$myFavCar["Mitsubishi"]  ="Pjaero";

print_r($myFavCar);   // var_dump();

echo "<br>";
echo "<br>";

//Add multiple array items

$fruit = [
        "Apple",
        "Banana",
        "Kiwi",
];
array_push($fruit, "Orange", "Amrood", "Anar");

print_r($fruit);  // var_dump();

echo "<br>";
echo "<br>";

//Add Multiple Items to Associative Arrays

$gaadi = [
        'Ford' => 'Mustang ',
        'Ford' => 'Aspire',
        'Ford' => 'GT'
];
$gaadi = $gaadi + [
    'Mahindra' => 'Scorpio',
    'Tata' => 'Safari',
    'RangeRover' => 'Vellor'
];

print_r($gaadi);

echo "<br>";
echo "<br>";

//  REMOVE ARRAYS ITEMS

$car = [
    "Volvo", 
    "BMW",
    "Tata",
    "Toyota",
    "Audi",
    "VW"  
];  //Remove Array Item

array_splice($car, 0, 2); // (var, index where u start, items count u want to be deleted)/ two items will remove.
print_r($car); //

// USING THE UNSET FUNCTION => unset()
//Note: The unset() function does not re-arrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.


echo "<br>";
echo "<br>";

$car = [
    "Volvo", 
    "BMW",
    "Tata",
    "Toyota",
    "Audi",
    "VW"  
];
unset($car[1]);
// unset($car[2] , $car[3]);
// unset($car[3]);
// unset($car[4]);
print_r($car);


echo "<br>";
echo "<br>";
// Remove Item From an Associative Array

$car =[
    'Brand' => "Ford",
    "Model" => "Mustang",
    "color" => "gray",
    "Year" => "2015"
];

unset($car["model"]);
// unset($car["model"], $car["Year"]);

print_r($car); // var_dump();


?>
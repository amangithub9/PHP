<?php

echo "We are going to learn functions in php <br>";

// *********function -> in_array()  -> it returns true false value 0,1***********

$fruits = ["Banana", "Apple", "Amrood", '55' ,"Grapes"];

echo in_array('Banana', $fruits);
echo in_array('Kela', $fruits);

echo "<br>";

if(in_array('Banana', $fruits)){  //in_array is used for search elements in current array
    echo "Find Successfully";
}
else{
    echo "can not find anything";
}

echo "<br>";

if(in_array(55, $fruits)){  //in_array is used for search elements in current array
    echo "Find Successfully";
}
else{
    echo "can not find anything";
}

echo "<br>";

if(in_array(55, $fruits, true)){  // true means value going for true nature of that element not any string value in this case result will return can't find anything.
    echo "Find Successfully";
}
else{
    echo "can not find anything";
}

echo "<br>";
echo "<br>";

$a = [
    ['p', 'h'],
    ['p', 'r'],
    '0'
];

if(in_array(['p', 'h'], $a, true)){  // in_array gives true false value.
    echo "Find Sucessfully!";
}
else{
    echo "can not find anything";
}

echo "<br>";

$fruits = ["Banana", "Apple", "Amrood", '55' ,"Grapes"];
echo array_search("Apple", $fruits);  // true
echo array_search("Kela", $fruits);  // false

echo "<br>";

$fruits = [
        "1" => "Kela",
        "2" => "Seb",
        "3" => "Amroood",
        "14" => "Anar"
];

echo array_search("Anar", $fruits);  // output -> 14 // array_search give index value.

// ************ array_replace() & array_replace_recursive********

$name1= ["Aman", "Guarav", "Ayush", "Rahul"];
$name2 = ["Raja", "Saurabh"];
$color = ["Red", "Blue", "Green"];

$newArray = array_replace($name1, $name2, $color); // u need to put this in new array beacuse when it will replace elements it needs new variable to store that data.

echo "<pre>";;
print_r($newArray);
echo "</pre>";

echo "<br>";
echo "<br>";

$name1= ["Aman", "Guarav", "Ayush", "Rahul"];
$name2 = [0 => "Raja", 1 =>"Saurabh", 'a' => "Mehul"];  // replace Aman & Gaurav


$newArray = array_replace($name1, $name2); // u need to put this in new array beacuse when it will replace elements it needs new variable to store that data.

echo "<pre>";;
print_r($newArray);
echo "</pre>";

echo "<br>";
echo "<br>";

$array1 = array(
    "a" => array("red"),
    "b" => array("green", "pink")
);

$array2 = array(
    "a" => array("yellow"),
    "b" => array("black")
);

$newArray = array_replace_recursive($array1, $array2); // in multidimensional arrya basic array_replace won't work that's why we use array_replace_recursive because

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";
echo "<br>";

$suv = ["xuv 700", "Fortuner", "harrier", "Defender"];
$sedan = ["swift", "city", "vento", "s class"];

$new = array_replace($suv, $sedan);

echo "<pre>";
print_r($new);
echo "</pre>";

echo "<br>";
echo "<br>";

$upper = [
        ["AMAN", "RAHUL"],
        ["AYUSH"]
];

$lower = [
        ["aman", ],
        ["ayush", "gaurav"]
];

$new = array_replace_recursive($upper, $lower);

echo "<pre>";
print_r($new);
echo "</pre>";

echo "<br>";

$a1 = [
    "a" => "red",
    "b" => "green"
];

$a2 = [
    "a" => "blue",
            "yellow"
];

$new = array_replace($a1, $a2);
echo "<pre>";
print_r($new);
echo "</pre>";

echo "<br>";

echo "<pre>";
$a1=array("red","green","blue","yellow");
$a2=array(0=>"orange",3=>"burgundy");

print_r(array_replace($a1,$a2));
echo "</pre>";















?>
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

echo "<br>";

// ******** array_pop() and array_push() function .

$fruits = ["kela", "santara", "seb", "angoor"];

array_pop($fruits); // using array_pop() remove last element from the array.

echo "<pre>";
print_r($fruits);
echo "</pre>";

echo "<br>";

$cricketPlayer = ["Virat Kohli", "MS Dhoni", "Shubhman Gill"];

echo "<br>";

$fruits = ["kela", "santara", "seb", "angoor"];

array_push($fruits, "Papita", "Lichi"); // using array_push() add elements in current array u can add multiple elements at one time using this function.

echo "<pre>";
print_r($fruits);
echo "</pre>";


echo "<br>";

// ******** array_pop() and array_push() function ******.

$name = ["Aman", "Ayush", "Gaurav", "Rahul"];

array_shift($name);  // it removes very first element in array

echo "<pre>";
print_r($name);
echo "</pre>";

echo "<br>";

$name = ["Aman", "Ayush", "Gaurav", "Rahul"];

array_unshift($name, "Vibham", "Raju");  // it add new elements in very first of the array and u can made as many u want in terms on entries.

echo "<pre>";
print_r($name);
echo "</pre>";

echo "<br>";

//************* array_merge(), array_merge_recusrive() and array_combine() functions ******************** */

$fruits1 = ["orange", "apple", "kela"];
$veggie1 = ["sabzi", "pea", "gazar"];
$color = ["red", "green", "blue"];

$newArray = array_merge($fruits1, $veggie1, $color); // basically array_merge is used for merging of multiple array not only one but multiple index array.

echo "<pre>";
print_r($newArray);
echo "</pre>";


echo "<br>";

$fruits1 = ['a' =>"orange",'b' => "apple",'c' => "kela"]; // associative array 
$veggie1 = ["sabzi", "pea", ]; // index array we are now perform array_mergein that case.

$newArray = array_merge($fruits1, $veggie1);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";

$fruits1 = ['a' => "orange","apple","kela"]; // associative array 
$veggie1 = ['a' => "sabzi", "pea", 65,1]; // if u made associative arrya using same key second array will replace the value to be first one

$newArray = array_merge($fruits1, $veggie1);
//$newArray = $fruits1 + $veggie1; // amd if u want not to replce first array but reture first array key value then use + operator it also merge that array.

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";
echo "<br>";

$fruits = [
            'a' => 'Orange',
            'b' => 'Apple',
            'c' => 'Banana',
];

$veggie = ['b' => ['color' => ['red', 'green','blue']],
            'd'=> 'Gazar',
            22,
            12
];

$newArray = array_merge_recursive($fruits, $veggie); // we use array_merge_recursive because it looks like complex array so perform better code we it.

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";

$name = ["Aman", "Gaurav", "Ayush"];
$age = [23,25,22];

$newArray = array_combine($name, $age); // we use array_combine in index array only it make forst array as a key and second as its value.

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";

// ************array_slice() and array_splice() functions **********

$name = ["aman", "ayush", "Gaurav", "raju"];

$newArray = array_slice($name, 1, 2); // array_slice($name, start, length); it opt value what ever u length gave.

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";

$name = ["aman", "ayush", "Gaurav", "raju"];

$newArray = array_slice($name, 1, 2,true); // array_slice($name, start, length); it opt value what ever u length gave.

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";

$color = [
   'a' => 'red',
   'b' => 'green',
   'c' => 'blue',
   '1' => 'orange',
   '2' => 'brown'
];

$newArray = array_slice($color, 1, 3,true);  
//$newArray = array_slice($color, 1, 3); // preserved key means if u give this it will return its key what osever given but if u did not gave it will give default or normal indexing.

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";


$name1 = ["aman", "ayush", "gaurav", "saurabh","rahul"];
$name2 = ["sanjay", "ram"];

 //(array1 , start, length, array2); splice is use for deleleting elements

echo "<pre>";
print_r(array_splice($name1, 1, 2, $name2));
print_r(array_splice($name1, 0, 0, $name2));
print_r($name1);
echo "</pre>";

echo "<br>";

$a1 = [
    '0' => 'red',
    '1' => 'green'
];

$a2 = [
    '0' => 'blue',
    '1' => 'yellow'
];

echo "<pre>";
print_r(array_splice($a1, 1, 2, $a2)); // it shows which value is removed from this array
print_r($a1); // it gives actual value after remoing elements.
echo "</pre>";


$color = ["red", "green", "yellow", "brown", "pink"];

array_splice($color, 2, 2);  // removed 2 values
// array_splice($color, -1);  // removed 1 values
// array_splice($color, 0 , 1);  // removed 1 values
array_splice($color, 2, count($color));

echo "<pre>";
print_r($color);
echo "</pre>";



?>
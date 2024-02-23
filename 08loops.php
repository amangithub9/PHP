<?php

//  WHILE LOOP IN PHP
echo"While loop in PHP";
$i = 1;

while($i <= 10){
    echo $i;
    echo "<br>";
    $i++;
}

echo "<br>";

$x = 1;
while($x <10){
    echo "Aman";
    echo "<br>";
    $x++;
}

echo "<br>";

// FOR LOOP IN PHP
echo"For loop in PHP";
echo "<br>";

for($i =0; $i< 10;$i++){
    echo $i;
    echo "<br>";
}

echo "<br>";

for($i =0; $i< 10;$i++){
    echo "Hi this is a string";
    echo "<br>";
}

echo "<br>";

for ($i=0; $i < 6; $i= $i + 2) {  // skip 2
    # code...
    echo $i;
    echo "<br>";
}


// DO WHILE LOOP IN PHP

echo "<br>";
$i = 1;

do{
    echo "$i <br>";
    $i++;
}
while($i < 11);

echo "<br>";
echo "<br>";
$i = 10;
do{
    echo "$i <br>";
    $i++;
}
while($i < 8);

$i =1;

do{
    if($i == 5) break;
    echo$i;
    $i++;
}
while($i < 4);

echo "<br>";
echo "<br>";

// FOREACH LOOP IN PHP

$arr = array("banana", "orange", "bisuits", "roti","sabzi");

foreach ($arr as $val ) {
    # code...
    echo $val;
    echo "<br>";
}

echo "<br>";
echo "<br>";

$cricket = array("virat", "dhoni", "yuvi","shami", "siraj","ABD");

foreach ($cricket as $val ){
    # code...
    echo $val;
    echo "<br>";
}
$cricket = array("virat" =>"80", "dhoni" =>"20", "yuvi" =>"25","shami" =>"10", "siraj" =>"6","ABD" =>"55");

foreach ($cricket as $key => $value) {
    # code...
    echo "$key : $value";
    echo "<br>";
}

?>
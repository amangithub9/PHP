<?php

$a = 55;  // user number.
$b = 10;

if($a > 60){
    echo "a is greater than 60";
}
else{
    echo "a is not greater than 60";

}

echo "<br>";
echo "<br>";

$age = 24;

if($age > 18){
    echo "u can drink alcohol and ganza";
}
elseif($age > 15){
    echo "u can drink water only and ganza";
}
else{
    "only water";
}

echo "<br>";

$a = 2;

if($a > 4){
    echo "a is greater number";
}
else{
    echo "a is smaller";
}

echo "<br>";
if(5 > 4){
    echo "5 is greater";
}

echo "<br>"; 

$num1 = 56;
$num2 = 56;

if($num1 == $num2){
    echo $num1 . " is equals to ". $num2;
}
else{
    echo "not equal";
}

echo "<br>";

$number = array(1,2,3,4,5);
$sum =0;
for($i = 0; $i<count($number);$i++){
    $sum += $i;
}
echo $sum;

echo "<br>";

$n1 = 100;
$n2 = 200;
$n3 = 500;

if($n1 < $n2 && $n2 < $n3){
    echo "both conditions are true";
}

echo "<br>";

$a = 19;

if($a < 20) $b = "Hello";
echo $b;

echo "<br>";

$a =13;
$b = $a > 15 ? "hello" : "Good Bye";
echo $b;

echo "<br>";
?>
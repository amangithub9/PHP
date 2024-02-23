<?php
$name = "Aman";
echo $name;
echo "<br>";

echo  "The length of ". "my string is ".strlen($name);  // count the length

echo "<br>"; 

$word = "Hii this is me my name is Aman";
echo strpos($word , "is"); 
echo "<br>"; 

echo str_word_count($word); // it is used for count the total words in a string
echo "<br>"; 

echo strrev($word); // strrev use for reverse a string
echo "<br>"; 

echo strpos($word , "this"); // position of any elem in string

echo "<br>";

echo str_replace("Aman", "Ayush", $word); // replace use for replacing any word in any string
echo "<br>";

echo str_repeat($word, 10);
echo "<br>";


echo "<pre>";
echo ltrim("  This is a good boy   ");

echo "<br>";
echo rtrim("  This is a good boy   ");
echo "</pre>";
echo "<br>";
echo trim("  This is a good boy   ");

echo "<br>";
echo "<br>";

$name2 = "Hello World!";
echo strtoupper($name2);  //strtoupper() => make it uppercase.

echo "<br>";
echo "<br>";

$name3 = "HELLO WORLD!";
echo strtolower($name3);  // strtolower() => make it lowercase.

echo "<br>";
echo "<br>";

$name3 = "HELLO WORLD!";
$expo = explode(" ", $name3);  // explode => convert string into Array.

print_r ($expo);

?>


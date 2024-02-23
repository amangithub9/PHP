<?php

$age = 20;
switch($age){
    case 15:
        echo "Your age is 12 year old <br>";
        break;
    
    case 18:
        echo "You are an adult person <br>";
        break;
    
    case 27:
        echo "You are an adult + marriage person";
        break;

    default:
    echo "I don not know your age";   
    break; 
    
}

echo "<br>";

$color = "blue";

switch($color){
    case "red":
        echo "Your fav color is red <br>";
        break;

    case "blue":
        echo "your fav color is blue <br>";
        break;

    case "green":
        echo "your fav color is green <br>";
        break;
    default:
    echo "your dont see color <br>";
    break;
}
       

echo "<br>";
echo "<br>";

$d = 0;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The weeks feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}
echo phpversion();

?>
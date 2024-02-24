<?php  
echo "This is function and wwe are going to learn function in php today! <br>";

function marks($totalMarks){ //PHP Function Arguments
    $sum = 0;

    foreach ($totalMarks as $val) {
  
        $sum += $val;
    }
    return $sum;
}
echo "<br>";

function avg($totalMarks){  //PHP Function Arguments
    $sum = 0;
    $i =0;
    foreach ($totalMarks as $val) {
        
        $sum += $val;
        $i++;
    }
    return $sum / $i;
}

$aman = [98,88,96,89,91,92];
$total = marks($aman);
$percentage = avg($aman);

echo "Total marks of aman is: $total <br>";
echo "Percentage of aman is: $percentage <br>";

echo "<br>";

$ayush = array(95,99,56,66,89,83);
$total = marks($ayush);
$percentage = avg($ayush);

echo "Total marks of ayush is: $total <br>";
echo "Percentage of ayush is: $percentage <br>";

echo "<br>";

$suj = array(99,98,97,96,95,94);
$total = marks($suj);
$percentage = avg($suj);

echo "Total marks of suj is: $total <br>";
echo "Percentage of suj is: $percentage";

echo "<br>";
echo "<br>";


function familyName($fname, $year){  //PHP Function Arguments
    echo "$fname ";
    echo "Born in $year";
}
familyName("Aman","2001"); echo "<br>";
familyName("Papa", "1974"); echo "<br>";
familyName("Mummy", "1973"); echo "<br>";
familyName("Sister", "2010"); echo "<br>";

echo "<br>";

function setHeight($min = 50){  // Default arg in php
    echo "The height is : $min feet <br>";
}

setHeight(); // default access.
setHeight(55);
setHeight(569);
setHeight(23);

echo "<br>";
echo "<br>";

function mul($x, $y){   // Returning value in php
    return $x * $y;
}


echo mul(8,8) . "<br>"; 
echo mul(8,9) . "<br>"; 
echo mul(8,5) . "<br>"; 
echo mul(5,8) . "<br>"; 

echo "<br>";

 
function add(&$num){  //Passing Arguments by Reference
    $num += 10;
}
$num2 = 18;
add($num2);
echo $num2 ;

echo "<br>";
echo "<br>";

function sumMyNum(...$x){
   $sum =0;
   foreach ($x as $value) {
        $sum += $value;
   } 
   return $sum; 
}
$a = sumMyNum(5, 6, 6, 3, 8, 9, 10);
$b = sumMyNum(88,12);
echo $a;
echo "<br>";
echo $b;

echo "<br>";
echo "<br>";

function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
        $n += $x[$i];
    }
    return $n;
}

$a = sumMyNumbers(5, 2, 6, 2, 7, 7);
echo $a;

echo "<br>";
echo "<br>";

  function myFamily($lastname, ...$firstname){  //using for each
    $txt ="";

    foreach ($firstname as $val) {
        # code...
        $txt = $txt. "Hii $val $lastname.<br>"; 
        
    }
    return $txt;
  }

  $name = myFamily("Gupta", "Aman", "Ayush", "Gaurav", "Sudhir");
  echo $name;

  echo "<br>";

  function myFam($lastname, ...$firstname){  //using len count method
    $txt ="";
    $len = count($firstname);
    for ($i=0; $i < $len; $i++) { 
        # code...
        $txt = $txt . "Hii , $firstname[$i] $lastname. <br>";

    }
    return $txt;
  }
  $name2 = myFam("Gupta", "Aman", "Ayush", "Gaurav", "Sudhir");
  echo $name2;

  echo "<br>";


function add1(int $x, int $y){  //it will not couse error cause php is loosly typed lang but if we declare ( declare(strict_types=1) at the very first beggining then we can tackle this problem;
    return $x + $y;
}
echo add1(5, "5");


?>



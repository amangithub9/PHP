<?php
 // Multidimensional Index array
$emp = [
    [1, "Aman", "Web Developer", 25000],
    [2, "Gaurav", "Digital Marketar", 20000],
    [3, "Ayush", "Coder", 5000],
    [4, "Vibham", "Network Engineer", 30000],
];
$len = count($emp);
for ($i=0; $i < $len; $i++) {  // i = row , outer loop
    for ($j=0; $j < $len; $j++) {  // j = col , inner loop
        # code...
        echo $emp[$i][$j] ." ";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";


echo "<table border = '2px' cellpadding = '5px'>";

echo "<tr>
        <th>Emp Id.</th>
        <th>Emp Name</th>
        <th>Designation</th>
        <th>Salary</th>
</tr>";  
foreach ($emp as $val) {
    echo "<tr>";
    foreach ($val as $value) {
        # code...
        echo " <td> $value </td> ";
    }
    echo "</tr>";
}
echo "</table>";

echo "<pre>";
print_r($emp);
echo "</pre>";


 // Multidimensional Associate array

 $marks =[
        "Aman" => [
            "Java" =>85,
            "Maths" =>85,
            "C++" =>85,
        ],
        "Gaurva" => [
            "Java" =>80,
            "Maths" =>95,
            "C++" =>85,
        ],
        "Ayush" => [
            "Java" =>75,
            "Maths" =>65,
            "C++" =>80,
        ],
 ];

echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>";
echo "<tr>
        <th>Name</th>
        <th>Marks</th>
        <th>Marks</th>
        <th>Marks</th>
        
</tr>";
foreach ($marks as $key => $value) {

    echo "<tr>
           <td>$key </td>";
    foreach ($value as $value2) {
        echo "<td> $value2 </td> ";
    }
    echo "</tr>";
}
echo "</table>";

 echo "<pre>";
print_r($marks);
echo "</pre>";


?>
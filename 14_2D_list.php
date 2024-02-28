<?php
// // Multidimensional array or Nested Array (List function)
/*
$array = [
    [1,2],
    [3,4]
];

foreach($array as list())
*/ 
// Index Array

$emp = [
    [1, "Aman", "Web Developer", 25000],
    [2, "Gaurav", "Digital Marketar", 20000],
    [3, "Ayush", "Coder", 5000],
    [4, "Vibham", "Network Engineer", 30000],
];



foreach($emp as list($id, $name, $designation, $salary)){
    echo "$id $name $designation $salary <br>";
}

echo "<br>";
echo "<br>";


$emp = [
    [1, "Aman", "Web Developer", 25000],
    [2, "Gaurav", "Digital Marketar", 20000],
    [3, "Ayush", "Coder", 5000],
    [4, "Vibham", "Network Engineer", 30000],
];

echo "<table border = '2px' cellpadding ='5px' cellspacing = '2px'>
<tr>
        <th>Emp Id.</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Salary</th>
</tr>";

foreach($emp as list($id, $name, $designation, $salary)){
    echo   "<tr><td>$id</td>
                <td>$name</td>
                <td>$designation</td>
                <td>$salary</td></tr>";
}

echo "</table>";

echo "<br>";
echo "<br>";
// Associate Array using list

$emp = [
    [
        "id" => 1,
        "name" => "Aman",
        "designation" => "Web Developer",
        "salary" => 25000
    ],
    [
        "id" => 2,
        "name" => "Gaurav",
        "designation" => "Digital Marketer",
        "salary" => 20000
    ],
    [
        "id" => 3,
        "name" => "Ayush",
        "designation" => "Coder",
        "salary" => 5000
    ],
    [
        "id" => 4,
        "name" => "Vibham",
        "designation" => "Network Eng",
        "salary" => 250000
    ],
];

echo "<table border = '2px' cellpadding ='5px' cellspacing = '2px'>
<tr>
        <th>Emp Id.</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Salary</th>
</tr>";

foreach($emp as list("id" => $id, "name" => $name, "designation" => $designation, "salary" => $salary)){
    echo   "<tr><td>$id</td>
                <td>$name</td>
                <td>$designation</td>
                <td>$salary</td></tr>";
}

echo "</table>";

/*
foreach($emp as list("id" => $id, "name" => $name, "designation" => $designation, "salary" => $salary)){
    echo   "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td></tr>";
}
*/

?>
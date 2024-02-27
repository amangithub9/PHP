<?php

$matrix = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

// Traditional For Loop
$row = count($matrix);
$col = count($matrix[0]);

for ($i=0; $i <$row ; $i++) { 

    for ($j=0; $j < $col ; $j++) { 
        # code...
            echo $matrix[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>";

// Foreach Loop but both works same.
foreach ($matrix as $row) {
    foreach ($row as $val) {
        # code...
        echo "$val ";
    }
    echo "<br>";
}
echo "<br>";


// CREATATION OF MATRIX

$mat = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

// ACCESS MATRIX -That how u can access those matries element

echo $mat[0][0] . "<br>";
echo $mat[0][1] . "<br>";
echo $mat[0][2] . "<br>";
echo $mat[1][0] . "<br>";

// PRINT MATRIX -That how u print all matrixes

foreach ($mat as $row) { //row means outer loop of matrix
    # code...
    foreach ($row as $element) {
        echo $element ." ";
    }
    echo "<br>";
}
// Output:
// 1 2 3
// 4 5 6
// 7 8 9

echo "<br>";

// ADD TWO MATRICES

$mat1 = array(
    array(1,2), 
    array(3,4)
);
$mat2 = array(
    array(5,6), 
    array(7,8)
);
$result = array();

for ($i=0; $i < count($mat1) ; $i++) { 
    for ($j=0; $j < count($mat1[0]); $j++) { 
    $result[$i][$j] = $mat1[$i][$j] + $mat2[$i][$j];
    echo $result[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";

$mat1 = array(
    array(1,2,3),
    array(1,2,3),
    array(1,2,3)
);
 
$mat2 = array(
    array(2,9,31),
    array(6,13,35),
    array(9,5,33)
);

$answer = array();

// performing addition of matrix
for ($i=0; $i < count($mat1); $i++) { 
    # code...
    for ($j=0; $j < count($mat1[0]); $j++) { 
        # code...
        $answer[$i][$j] = $mat1[$i][$j] + $mat2[$i][$j];
    }
}

// PRINT RESULT IF MATRIX

for ($i=0; $i < count($mat1); $i++) { 
    for ($j=0; $j < count($mat1[0]); $j++) { 
        # code...
        echo $answer[$i][$j] ." ";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
// Transpose of matrix

function transposeMatrix($matrix) {
    $transposed = array();
    foreach ($matrix as $row => $columns) {
        foreach ($columns as $row2 => $column2) {
            $transposed[$row2][$row] = $column2;
        }
    }
    return $transposed;
}

$matrix = array(
    array(1, 2), 
    array(3, 4), 
    array(5, 6)
);
$transposedMatrix = transposeMatrix($matrix);

// Print the transposed matrix
foreach ($transposedMatrix as $row) {
    foreach ($row as $element) {
        echo $element . " ";
    }
    echo "<br>";
}
echo "<br>";
?>
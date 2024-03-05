<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include and Require</title>
</head>
<body>
    <h1>Hello My name is Aman and i am a full stack developer</h1>
    <h3>Skills</h3>
    <li>Java</li>
    <li>JavaScript</li>
    <li>React.js</li>
    <li>Bootstrap</li>

    <?php
    echo "<br>";
    include '01index.php';  // include means it attach other file with using include and require function but their is a catch while using both of it.
    echo "<br>";
    include '01index.php';
    echo "<br>";
    // require '01index.php'; 
    
    echo "<br>";
    include '01index1.php'; // but if u are using include any found any error it will execute after code any throw errror only in where it found.

    echo "<br>";
    // require '01index1.php';   // if u use require then any error found in that file after code will not execute 
    echo "hello";
    
    // *************** include_once and require_once ******** 
    // it both same but once means u can use only one time this _once fn tackle the duplication of include fn like i code above include 2 times and it show 2 time with same file but in include_once it will show only one time even  if u given two or 3 time does not matter.
    
    include_once 'print.php';
    include_once 'print.php';
    require_once 'print1.php';
    
    
    ?>
</body>
</html>
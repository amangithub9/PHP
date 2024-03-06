<?php

session_start();

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    // echo "<pre>";
    // print_r($_SESSION);
    // echo "</pre>";
    if(isset($_SESSION["favColor"])){
        echo "Fav Color: ", $_SESSION["favColor"] . "<br>";
    }
    echo "Fav Car: ", $_SESSION["favCar"] . "<br>";

?>
</body>
</html>
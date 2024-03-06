<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST</title>
</head>
<!-- <body>
    <form action ="19testform.php" method ="get">
    Name :    <input type="text" name="fname"> <br><br>
    Age :   <input type="text" name="age"> <br><br>
        <input type="submit" name="save">
    </form>
</body> -->

<!-- <body>
    <form action ="19testform.php" method ="post">
    Name :    <input type="text" name="fname"> <br><br>
    Age :   <input type="text" name="age"> <br><br>
        <input type="submit" name="save">
    </form>
</body> -->
<body>
        <form action ="19testform.php" method ="post">
        <input name="person[0][first_name]" value="john" />
        <input name="person[0][last_name]" value="smith" />
        ...
        <input name="person[1][first_name]" value="jane" />
        <input name="person[1][last_name]" value="jones" />
        <input type="submit" name="save">
</form>
</body>
</html>

<?php
echo "welcome here to learn about super global";

//************* $_GET & $_POST **********


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST</title>
</head>
<body>
    <!-- <form action ="20testform.php" method ="post">
    Name :    <input type="text" name="fname"> <br><br>
    Age :   <input type="text" name="age"> <br><br>
        <input type="submit" name="save">
    </form> -->




    <form action ="<?php echo $_SERVER['PHP_SELF'] ?>" method ="post">
    Name :    <input type="text" name="fname"> <br><br>
    Age :   <input type="text" name="age"> <br><br>
        <input type="submit" name="save">
    </form>

    <?php
    if(isset($_POST['save'])){
        echo $_POST['fname'] . "<br>";
        echo $_POST['age'] . "<br>";
    }
    ?>
            <?php
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
        ?>
</body>


</body>
</html>

<?php

//************* $_SERVER **********
/*
if u want to post u data on the same page perform action on sever not any other page .like this
<?php echo $_SERVER['PHP_SELF'] ?> 
*/

?>
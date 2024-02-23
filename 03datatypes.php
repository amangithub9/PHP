<?php

        /*
        String
        Integers
        Float
        Boolean 
        Array
        Object
        Null
        */

    // String
        $name = "Aman";
        $friend = "Ayush";
        echo "$name ka dost hia $friend <br>";

        // Integer -Non decimal
        $age = 23;
        $income = 400000;
        $loan = 18000;
        echo  "$age <br>";
        echo  "$income <br>";
        echo  "$loan <br>";

        //Decimal and Float

        $price = 199.99;
        $gaming_phone = 39999.99;
        echo $price;
        echo "<br>";
        echo $gaming_phone;
        echo "<br>";

        //Bool 
        $areU_Happy = true;
        $areU_Sad = false;
        echo $areU_Happy;
        echo "<br>";
        echo var_dump($areU_Sad);
        echo "<br>";

        //Object - Instances of class
        //Array Used to store multiple values of same data type

        $friends = array("aman", "ayush", "Rahul", "Suraj");
        echo var_dump($friends);
        echo "<br>";

        echo $friends[0];
        echo "<br>";
        echo $friends[1];
        echo "<br>";
        echo $friends[2];
        echo "<br>";
        echo $friends[3];
        echo "<br>";

        //Null

        $name1 = NULL;
        echo $name1;
        echo "<br>";
        echo var_dump($name1);
        echo "<br>";
        echo var_dump(NULL);

        /* PHP OOBJECTS */
        
?>
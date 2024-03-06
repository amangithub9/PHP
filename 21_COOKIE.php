<?php
$cookie_name = "user";
$cookie_value = "Aman Gupta";
setcookie($cookie_name, $cookie_value, time() + (86400), "/");
/*
    // Create Cookie
    setcookie(name, value, expire, path, domain, secure, httponly)
    // Get Cookie
    $_COOKIE['name']
*/
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

    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie is not set yet";
    }
    else{
        echo $_COOKIE[$cookie_name];
    }

    echo "<br>";
    
    if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
    } else {
    echo "Cookies are disabled.";
    }
?>
</body>
</html>


<?php
// echo "HI";


// session_start();

// $_SESSION["favColor"] = "Blue";  // Set session name and value

// echo $_SESSION["favColor"]; // Get the Session value

// session_unset(); // Remove all session variables
// session_destroy(); // Destroy the Session.

session_start();

$_SESSION["favColor"] = "Green";  
$_SESSION["favCar"] = "Mustang GT";  

echo "Session variable is set";

?>


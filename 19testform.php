<?php
echo "welcome here to learn about super global <br>"; 

//****************** $_GET **************** */
// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// echo $_GET['fname'];
// echo "<br>";
// echo $_GET['age'];


//****************** $_GET **************** */
/* 
echo "<pre>";
print_r($_REQUEST);
print_r($_POST);
echo "</pre>";

echo $_POST['age'];
echo $_POST['fname'];
echo "<br>";
echo $_REQUEST['fname'];
echo $_REQUEST['age'];

*/

echo "<pre>";
print_r($_POST['person']);
echo "</pre>";
//will get you something like:
array (
0 => array('first_name'=>'john','last_name'=>'smith'),
1 => array('first_name'=>'jane','last_name'=>'jones'),
)

?>
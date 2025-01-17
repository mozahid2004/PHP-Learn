<?php  

session_start();


print_r($_SESSION);


// $_REQUEST can work with both get and post
// $name = $_POST['name'];
// $age = $_POST['age'];
$name = $_REQUEST['name'];
$age = $_REQUEST['age'];
echo "Name : $name <br/>";
echo "Age :  $age";

// $_SERVER
echo "<pre>";
print_r($_SERVER);
echo"</pre>";

echo "Cookie Name: " . $_COOKIE["user"];


?>
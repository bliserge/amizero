<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db   ="ecommercephp";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn -> connect_error) 
{
	die($conn -> error);
}
else
{
	//echo "database connected";
}

?>
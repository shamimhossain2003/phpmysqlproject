<?php

$host= "localhost";
$user= "root";
$password= "";
$database= "news611";

$conn= new mysqli($host, $user, $password, $database);
if ($conn -> connect_error) {
	die($conn -> error);
} else {
	//echo("database connection successfully!");
}


?>
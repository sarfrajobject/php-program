<?php

ini_set("display_errors",1);
ini_set("display_reporting_errors",1);
error_reporting(E_ALL);

$host = "localhost";
$username = "root";
$password = "devil@123";
$db = "cart";


$conn = new mysqli($host, $username, $password ,$db);

if ($conn->connet_error){

	die("connection Failed".$conn->connect_error);

}
$name = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['register'])) {
	$name = $_POST['username'];

	$query = "select *from users where username = '$name'";
	$result = $conn->query($query);

	if ($result->num_rows > 0) {
	  	$name_error = "Sorry... username already taken";
	} else {
	  $query = "INSERT INTO users (username, password)
		VALUES ('$name', '$password')";
	  $result = $conn->query($query);	
		$conn->close();
	}
}
?>

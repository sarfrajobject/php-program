<?php

$host = "localhost";
$username = "root";
$password = "devil@123";

$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
	die("connection failed".$conn->connect_error);
}

$query = "CREATE DATABASE test";

if ($conn->query($query)===TRUE) {
	
	echo "Databese created Sussfully";

}
else{

	echo "error connection".$conn->error;
}

$conn->close();

?>
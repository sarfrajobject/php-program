<?php

$host = "localhost";
$username = "root";
$password = "devil@123";
$db = "cart";

$conn = new mysqli($host, $username, $password);

if ($conn->connect_error){

	die("Connection error !".$conn->connect_error);
}


?>
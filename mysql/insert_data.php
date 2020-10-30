<?php

ini_set("display_errors",1);
ini_set("display_reporting_errors",1);
error_reporting(E_ALL);

$host = "localhost";
$username = "root";
$password = "devil@123";
$db = "Resto";



$conn = new mysqli($host,$username,$password,$db);

if($conn->connect_error){

	die("Connection error ". $conn->connect_error);
}


$name =  'jain Resturent';
$email = "jain@gmail.com";
$place = "Roorkee";
$mobile = 6787890;
$query = "INSERT INTO users (name,email, place,mobile)
VALUES ('$name', '$email', '$place', '$mobile')";


if($conn->query($query)===TRUE){

	echo "Insert entrry !";

}

else {

	echo "error connection ".$conn->error;
}

$conn->close();

?>
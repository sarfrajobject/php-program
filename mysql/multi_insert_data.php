<?php


ini_set("display_errors",1);
ini_set("display_reporting_errors",1);
error_reporting(E_ALL);

$host = "localhost";
$username = "root";
$password = "devil@123";
$db = "test";


$conn = new mysqli($host, $username, $password, $db);

if($conn->connect_error){

	die ("Connection error ".$conn->connect_error);
}

$query = "INSERT INTO MyGuest (firstname, lastname, email)
VALUES ("Saalim","Malik","saalimmalik@gmail.com")";
$query.= "INSERT INTO MyGuest (firstname, lastname, email)
VALUES ("Anas","anas","saalimmalik@gmail.com")";

if($conn->multi_query($query)===TRUE){

	echo "Insert Multi entry !";
}
else
{

	echo "error connection ";

}

$conn->close();

?>
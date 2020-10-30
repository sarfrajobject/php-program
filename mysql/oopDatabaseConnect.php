<?php 

ini_set("display_errors",1);

$host = "localhost";
$username = "root";
$password = "devil@123";


$conn = new mysqli ($host, $username, $password);

if($conn->connect_error){

	die("connection error".$conn->connect_error);

}
echo "connect susscfully";

?>
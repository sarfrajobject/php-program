<?php

$host = "localhost";
$username = "root";
$password = "devil@123";
$db = "Resto";


$conn = new mysqli ($host, $username, $password ,$db);

if ($conn->connet_error){

	die("connection Failed".$conn->connect_error);

}

$query = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(250) NOT NULL,
place VARCHAR(200) NOT NULL,
email VARCHAR(200) NOT NULL,
mobile INT(10) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


 if($conn->query($query)===TRUE){

 	echo "Database created Successfully";

 }  
 else{

 	echo "error connection".$conn->error;
 }   

 $conn->close();

?>
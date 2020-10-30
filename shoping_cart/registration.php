<?php

session_start();

$host = "localhost";
$username = "root";
$password = "devil@123";
$db = "cart";


$conn = new mysqli($host, $username, $password, $db);

if($conn->connect_error){

	die("connection failed ".$conn->connect_error);

}

$if (isset($_POST[submit])){
	$name = $_POST['user'];
	$password = $_POST['password'];


	$query = "select *from users where username = '$name'";
	$result = $conn->query($query);


	if ($result->num_rows > 0) {
	  	echo "taken ";
	  	
	} 
	else {
	  $query = "INSERT INTO users (username, password)
		VALUES ('$name', '$password')";
	  $result = $conn->query($query);	
		echo 'Saved!';
	       exit();
	}
	$conn->close();
	
}


?>
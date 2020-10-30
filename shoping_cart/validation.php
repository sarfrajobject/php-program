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

$name = $_POST['user'];
$password = $_POST['password'];


$query = "SELECT * FROM users WHERE username = '$name' AND password = '$password' ";
$result = $conn->query($query);


if ($result->num_rows > 0) {
  // output data of each row
	$_SESSION['name'] = $name;
} else {
  echo "0 results";
}
$conn->close();

header("location:show.php");
?>
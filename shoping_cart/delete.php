<?php


$host  = "localhost";
$username = "root";
$password = "devil@123";
$db = "cart";

$conn = new mysqli($host, $username, $password,$db);

if($conn->connect_error){

	die("connection filed");
}
$id = $_GET['id'];

$query = "DELETE FROM cart WHERE id=$id ";

if ($conn->query($query) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

header("Location:show.php");

?>
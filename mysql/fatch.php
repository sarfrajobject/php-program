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


$query = "SELECT id, username, password FROM users ORDER BY id";
$result = $conn->query($query);


if ($result->num_rows > 0) {
  // output data of each row
	while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>
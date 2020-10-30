<?php

$host = "localhost";
$username = "root";
$password = "devil@123";
$db = "cart";

$conn = new mysqli($host, $username,$password,$db);


if($conn->connect_error){

	die("Connection error ". $conn->connect_error);
}


$name = "Anas";

$query = "select *from users where username = '$name' ";
if($conn->query($query)===TRUE)
{

$result = $conn->query($query);

if ($result->num_rows > 0) {
  while($row = $result->fetch_array()){
        echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            
        }
} else {
  echo "0 results";
}
}
$conn->close();

?>

<?php
$host = "localhost";
$username = "root";
$password = "devil@123";
$db = "cart";


$conn = new mysqli ($host, $username, $password ,$db);

if ($conn->connet_error){

    die("connection Failed".$conn->connect_error);

}
else{

    echo "susscfully";
}

?>
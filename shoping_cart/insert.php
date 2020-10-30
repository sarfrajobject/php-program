<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();

$host = "localhost";
$username = "root";
$password = "devil@123";
$db = "cart";

$target = "images/";
$conn = mysqli_connect($host, $username, $password ,$db);

if ($conn->connet_error){

	die("connection Failed".$conn->connect_error);

}

$nameErr  ="";
$name =  "";

if(isset($_POST['submit'])){
	$name = test_input($_POST['name']);
	$price = $_POST['price'];
	$image = $_FILES['image']['name'];
	$timage = $_FILES['image']['tmp_name'];

	move_uploaded_file($timage, $target.$image);
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
    else{
    	$query = "INSERT INTO cart (name, price ,image)
		VALUES ('$name', '$price' ,'$image')";



		$qry = mysqli_query($conn, $query);

		if ($qry) {

		  echo "Susscfully";

		} 
		else{

			echo "somthing wrong ".$conn->error;
		}
		$conn->close();
    }
}





function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
header("location:show.php");
?>
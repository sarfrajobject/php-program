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

	echo "succfully";
}
if(isset($_POST['user_name']))
{
 $name=$_POST['user_name'];

 $checkdata="SELECT * FROM users WHERE username='$name'";

 $query=mysql_query($checkdata);

 if(mysql_num_rows($query)>0)
 {
  echo "User Name Already Exist";
 }
 else
 {
  echo "Available";
 }
 exit();
}

?>
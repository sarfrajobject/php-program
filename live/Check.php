<<!-- ?php
$host = "localhost";
$username = "root";
$password = "devil@123";
$db = "users";


$conn = new mysqli ($host, $username, $password ,$db);

if ($conn->connet_error){

    die("connection Failed".$conn->connect_error);

}

if (isset($_POST['username'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $query = mysqli_query($conn, "select username from users where LCASE(username)='" . strtolower($username) . "'");
    if ($query->num_rows > 0) {
        echo json_encode(array("result" => "fail", "msg" => "Sorry, Username is already taken."));
        echo "$username";
    } else {
        echo json_encode(array("result" => "success", "msg" => "Username is available."));
    }
}

? -->>
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
if(isset($_POST['username']))
{
 $name=$_POST['username'];

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
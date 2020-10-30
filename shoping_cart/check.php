<?php
$host = "localhost";
$username = "root";
$password = "devil@123";
$db = "cart";


$conn = new mysqli ($host, $username, $password ,$db);

if ($conn->connet_error){

    die("connection Failed".$conn->connect_error);

}

if (isset($_POST['user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $query = mysqli_query($conn, "select name,email,username from users where LCASE(username)='" . strtolower($username) . "'");
    if ($query->num_rows > 0) {
        echo json_encode(array("result" => "fail", "msg" => "Sorry, Username is already taken."));
    } else {
        echo json_encode(array("result" => "success", "msg" => "Username is available."));
    }
}

?>
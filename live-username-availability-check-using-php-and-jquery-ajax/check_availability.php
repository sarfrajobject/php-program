<?php
require_once '../DBController.php';
if (isset($_POST['username'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $query = mysqli_query($conn, "select name,email,username from users where LCASE(username)='" . strtolower($username) . "'");
    if ($query->num_rows > 0) {
        echo json_encode(array("result" => "fail", "msg" => "Sorry, Username is already taken."));
    } else {
        echo json_encode(array("result" => "success", "msg" => "Username is available."));
    }
}
?>
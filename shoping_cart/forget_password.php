<?php

$host = "localhost";
$username = "root";
$password = "devil@123";
$db = "cart";

$conn = new mysqli($host, $username,$password,$db);

if($conn->connect_error){

	die("Connection filed ".$conn->conect_error);

}

$password = $_POST['password'];
$id = $_GET['id'];

$query = "UPDATE users SET password = '$password' where id = $id ";

if($conn->query($query)===TRUE){
	echo "";
}

$conn->close();
if (isset($_POST['submit'])){   header("Location: show.php")  ; }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Password</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
		.button {
		  border: none;
		  outline: 0;
		  margin-top:  5px; 
		  padding: 8px;
		  color: white;
		  background-color: red;
		  text-align: center;
		  cursor: pointer;
		  width: 100%;
		  font-size: 18px;
		  border-radius: 10px;
		  text-decoration: none;
		}
		.update{
			padding-top: 80px; 
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-5 update">
			<h2>Update Password </h2>
			<form action="<?php $_PHP_SELF ?>" method="POST">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label> Password </label>
					<input type="password" name="password" class="form-control" required="">
				</div>
			
				<button type="submit" class="btn btn-success my-2 pl-5 pr-5 button">Update</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>

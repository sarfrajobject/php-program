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
$nameErr  ="";
$name =  "";

if(isset($_POST['submit'])){
	$name = test_input($_POST['user']);
	$password = test_input($_POST['password']);
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
    else{

		$query = "SELECT * FROM users WHERE username = '$name' AND password = '$password' ";
		$result = $conn->query($query);
		if ($result->num_rows > 0) {
	  // output data of each row
		$_SESSION['name'] = $name;
		header("location:index.php");

	} else {
		$nameErr = "Username.. and password Not match!"; 

	}

    }

	

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$conn->close();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet"  href="main.css">
	<style type="text/css">
		.error{
			color: red;
			margin-right:100px; 

		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-5 login">
			<h2>Log In here </h2>
			<form action="<?php $_PHP_SELF ?>" method="post">
				<div class="form-group">
					
					<label>Username</label>
					<input type="text" name="user" class="form-control" required>
					<span class="error"><?php echo $nameErr; ?></span>
				</div>
				<div class="form-group">
					<label> password </label>
					<input type="password" name="password" class="form-control" required="" >
				</div>
				<button type="submit" name = "submit"class="btn btn-success my-2 pl-5 pr-5 button">Log in</button>
				
			</form>
			<a href="" class="b ">Forgotten Password? </a>   
			<a href="signup.php" class="b">Create Account</a>
		</div>
	</div>
</div>
</body>
</html>
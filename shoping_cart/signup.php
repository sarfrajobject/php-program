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


if (isset($_POST['submit'])){
	$name = test_input($_POST['user']);
	$password = test_input($_POST['password']);
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
    else{
		$name = $_POST['user'];
		$password = $_POST['password'];
		$query = "select *from users where username = '$name'";
		$result = $conn->query($query);
		
		if ($result->num_rows > 0){
		echo "";
		}
		else{
			$query = "INSERT INTO users (username, password)
		    VALUES ('$name', '$password')";
		    $result = $conn->query($query); 
		    header("location:login.php");
        	exit();
		}
	}

	$conn->close();

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet"  href="main.css">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-5 form">
			<h2>Sign up here </h2>
			<form action="<?php $_PHP_SELF ?>" method="post">
				<div class="form-group">

					<label>Username</label>
					<input type="text" id="username" name="user" value="<?php echo $name;?>" class="form-control" required>
					<span class="error"><?php echo $nameErr;?></span>
					<?php if ($result->num_rows > 0) {
				  	echo "<p class = 'exict'>Username.. Alrady taken Please try again!</p>";
				  	
				}elseif($result->num_rows > 0){
					echo "suss";
				} ?>
				
				<div id="status" ></div>
				</div>

				<div class="form-group">
					<label> password </label>
					<input type="password" name="password" class="form-control" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
				
				</div>
				<button type="submit" name="submit" class="btn btn-success my-2 pl-5 pr-5 button">Sign up</button>

			</form>
			<p>Already have an account?  <a href="login.php">Login</a></p>
		</div>
	</div>
</div>
</body>
</html>
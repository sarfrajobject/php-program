<?php

$host = "localhost";
$username = "root";
$password = "devil@123";
$db = "cart";


$conn = new mysqli($host,$username,$password,$db);
if ($conn->connet_error){

	die("connection Failed".$conn->connect_error);

}

$nameErr = $imgErr = "";
$name = $image = "";


$allowed_extensions = array(".jpg",".jpeg",".png",".gif");

if(isset($_POST['submit'])){
	$name = test_input($_POST['name']);
	$price = $_POST['price'];
	$image = $_FILES['image']['name'];
	$timage = $_FILES['image']['tmp_name'];
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$extension = end(explode(".", $_FILES["image"]["name"]));

	move_uploaded_file($timage, $target.$image);
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
    elseif ((($_FILES["image"]["type"] == "image/gif")
	|| ($_FILES["image"]["type"] == "image/jpeg")
	|| ($_FILES["image"]["type"] == "image/jpg")
	|| ($_FILES["image"]["type"] == "image/png"))
	&& ($_FILES["image"]["size"] < 20000)
	&& in_array($extension, $allowedExts)){
    	    	$query = "INSERT INTO cart (name, price ,image)
				VALUES ('$name', '$price' ,'$image')";



				$qry = mysqli_query($conn, $query);

				$conn->close();
				header("location:show.php");
	}
    else{

		$imgErr = "Invalid format. Only jpg / jpeg/ png /gif format allowed";
    }
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
	<title>Add item</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet"  href="main.css">
	<style type="text/css">
		
		.error{
			color: red;
		}
	</style>
	
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-5 form" >
			<h2>Add Item here </h2>
			<form action="<?php $_SELF_PHP ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Item Name</label>
					<input type="text" name="name" class="form-control" required>
					<span class= "error"><?php echo $nameErr ?></span>
				</div>
				<div class="form-group">
					<label> Price </label>
					<input type="text" name="price" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Item Image</label>
					<input type="file" name="image" class="form-control" required>
					<span class = "error"><?php echo $imgErr ?></span>
				</div>
				<button type="submit" name = "submit"class="btn btn-success my-2 pl-5 pr-5 button">Add Entry</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
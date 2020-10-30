<?php

$host = "localhost";
$username = "root";
$password = "devil@123";
$db = "cart";

$conn = new mysqli($host, $username,$password,$db);

if($conn->connect_error){

	die("Connection filed");

}
$id = $_GET['id'];
$query = "select *from cart where id = $id ";
$result = $conn->query($query);

if ($result->num_rows > 0) {
while($row = $result->fetch_array()){
	$item_name = $row['name'];
	$price_item= $row['price'];
	$image = $row['image'];
   }
}
$id = $_GET['id'];

$name = $_POST['name'];
$price = $_POST['price'];



$sql = "UPDATE cart SET name = '$name', price='$price'   WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "";
} 
$conn->close();

if (isset($_POST['submit'])){   
	header("location:show.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update item</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-5 form">
			<h2>Update Item here </h2>
			<form action="<?php $_PHP_SELF ?>" method="POST">
				<div class="form-group">
					<label>Item Name</label>
					<input type="text" name="name" value = "<?php echo "$item_name"; ?>" class="form-control" required>
				</div>
				<div class="form-group">
					<label> Price </label>
					<input type="text" name="price" value = "<?php echo "$price_item"; ?>" class="form-control" required="">
				</div>
					<div class="form-group">
					<label>Item Image</label>
					<input type="file" name="image" value = "<?php echo "$image"; ?>" class="form-control" required>
					<span class = "error"><?php echo $imgErr ?></span>
				</div>
				<button type="submit" name="submit" class="btn btn-success my-2 pl-5 pr-5 button">Update</button>
						
			</form>
		</div>
	</div>
</div>
</body>
</html>

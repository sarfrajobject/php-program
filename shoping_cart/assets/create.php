<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
		.button {
		  border: none;
		  outline: 0;
		  margin-top:  5px; 
		  padding: 12px;
		  color: white;
		  background-color: red;
		  text-align: center;
		  cursor: pointer;
		  width: 100%;
		  font-size: 18px;
		  border-radius: 10px;
		  text-decoration: none;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">

		<div class="col-md-5">
			<h2>Log In here </h2>
			<form action="validation.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" class="form-control" required>
				</div>
				<div class="form-group">
					<label> password </label>
					<input type="password" name="password" class="form-control" required="">
				</div>
				<button type="submit">Log in</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
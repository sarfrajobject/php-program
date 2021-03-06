<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<?php
// define variables and set to empty values
$nameErr = $emailError = $mobileError ="";
$name = $email = $mobile =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["name"])) {
    $mobileError = "Name is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
    // check if name only contains letters and whitespace
    if (!preg_match('/^[0-9]{10}+$/', $mobile)) {
      $mobileError = "10 digit Number"; 
    }
  }
  if (empty($_POST["email"])) {
    $emailError = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format"; 
    }
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Mobile: <input type="text" name="mobile" value="<?php echo $mobile;?>">
  <span class="error">* <?php echo $mobileError;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailError;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>

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
  }

  if ($result->num_rows > 0) {
      echo "";
      
  } 
  else {
    $query = "INSERT INTO users (username, password)
    VALUES ('$name', '$password')";
    $result = $conn->query($query); 
    header("location:login.php");
         exit();
  }
  $conn->close();
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  
}
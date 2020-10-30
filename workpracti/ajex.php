<?php

$host = "localhost";
$username = "root";
$password = "devil@123";
$db = "user";


$conn = new mysqli ($host, $username, $password ,$db);

if ($conn->connet_error){

   die("connection Failed".$conn->connect_error);

}
else{
   echo "successfully";
}

if(isset($_POST['action']) && $_POST['action'] == 'availability')
{
if ($connection->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
else
{
$username       = mysqli_real_escape_string($connection,$_POST['username']); // Get the username values
//            echo $username;
//            echo "Connected successfully";
$query  = "select email from users3 where email='".$username."'";
$res    = mysqli_query($connection,$query);
$count  = mysqli_num_rows($res);
echo $count;

}
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>sign up</title>
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet"  href="main.css">
<script type="text/javascript">
$(document).ready(function(){
$('#username').keyup(function(){
// alert('sds');
var username = $(this).val(); // Get username textbox using $(this)

var Result = $('#result'); // Get ID of the result DIV where we display the results

if(username.length > 2) { // if greater than 2 (minimum 3)
Result.html('Loading...'); // you can use loading animation here
var dataPass = 'action=availability&username='+username;
$.ajax({ // Send the username val to available.php
type : 'POST',
data : dataPass,
url  : 'available.php',
success: function(responseText){ // Get the result
//alert(responseText);
if(responseText == 0){
Result.html('<span class="success">Available</span>');
}
else if(responseText > 0){
Result.html('<span class="error">Taken</span>');
}
else{
alert('Problem with sql query');
}
}
});
}else{
Result.html('Enter atleast 3 characters');
}
if(username.length == 0) {
Result.html('');
}
});
});
</script>

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
               <input type="text" name="user" value="<?php echo $name;?>" class="form-control" required>
               <span class="error"><?php echo $nameErr;?></span>

            </div>
           <h2>Check live email availability Demo</h2>
<br>
<div class="content">
<table>
<tr>
<td>    Ex: <b><i>xyz@gmail.com</i></b><br /> <input type="text" placeholder="Username" name="username" id="username" /></td>
<td><div class="result" id="result"></div></td>
</tr>
</table>
      </div>
   </div>
</div>
</body>
</html>


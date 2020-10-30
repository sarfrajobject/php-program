<?php 
ini_set('display_errors',1);
error_reporting(E_ALL);

if(isset($_POST['submit']))
{
$ImageName = $_FILES['photo']['name'];
$fileElementName = 'photo';
$tmp = $_FILES['photo']['tmp_name'];
$path = 'uploads/';
 
$location = $path . $_FILES['photo']['name']; 
move_uploaded_file($tmp, $location); 

echo "$tmp";

if (move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'. $_FILES["photo"]['name'])) {
    echo "Uploaded";
} else {
   echo "File was not uploaded";
} 

} ?>
<form name="form1" id="form1" method="post" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data">
<input type="file" name="photo">
<input type="submit" name="submit">
</form>

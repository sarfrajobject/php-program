<?php



if (isset($_POST['submit'])) {
	# code...
	$name = $POST['username'];
	$age = $POST['age'];
	$favourite = $POST['favourite color'];



	setcookie('name',$name ,time()+300);
	setcookie('age' ,$age , time()+300);
	setcookie('f_color' ,$favourite ,time()+300);

	echo $_COOKIE['name'];
}
?>
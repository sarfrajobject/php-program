<?php


class Auth   {


public static function auth($password){
	if ($password=='sarfraj') {
		echo "Your password math you are log in ";
	}
	else {
		echo "your passsword not match ";
	}
}
}

$password = 'sarfraj';

Auth::auth();

?>
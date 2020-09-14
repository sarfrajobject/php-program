<?php
class Session{

	public function __construct(){

		session_start();
		$_SESSION['name'] = "Sarfraj";
		$_SESSION['age'] = 20;
	}

	public function session_read(){

		session_start();
		echo "Hi ".$_SESSION['name']." How are you,Your age  ".$_SESSION['age'];
	}

}


$create = new Session;
$create->session_read();

?>
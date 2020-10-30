<?php
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 

class Book{


	public $name = "Sarfraj Malik";
	public $email = "Sarfrajkhan082@gmail.com";

	function access(){

		echo "Hi ".$this->name ."<br>";
		echo "Your Email ".$this->email."<br>";
	}

	}

	$object = new Book;
	$object->access();
	echo "Hi ".$object->name."You access public method !";
?>

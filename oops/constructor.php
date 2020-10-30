<?php

class Book{
	 public $name = "Sarfraj Malik";

	function __construct(){

		echo "Hi ".$this->name;
	}
}


$book = new Book;

?>
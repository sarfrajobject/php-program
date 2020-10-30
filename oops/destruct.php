<?php

class Book{

	public $name = "Sarfraj malik ";

	function __destruct(){

		echo "Hi $this->name";

	}
}

$object = new Book;

?>
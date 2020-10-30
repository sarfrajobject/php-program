<?php

abstract class Book{

	public $author= "yashwent";
	public $title ="Letus c";
	public $page = 700;
	abstract public function letus(){

		echo "Author :".$this->author."<br>";
		echo "Title :".$this->title."<br>";
		echo "Page :".$this->page."<br>";
	}
}

$obj = new Book;


?>
<?php

class Book{

	const AUTHOR = "Yeshwent";

	 function letus_c($page){

		echo "Author : ".self::AUTHOR ."<br>";
		echo "Page : " .$page;

	}
}

$book1 = new Book;
$book1->letus_c(200);

?>
<?php

class Mobile {

	public $Model;
	
	function show_model($number){
		echo "Mobile model name :".$number."<br>";
	}
}

$samsung = new Mobile;
$samsung->show_model(A8);
$samsung->show_model(A31);
$lg = new Mobile;
$lg->show_model(h6);
?>
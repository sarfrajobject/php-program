<?php

ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);

interface Animal{


	public function makesound();


}

class Cat implements Animal{

	public function makesound(){

		echo "The Cat is makesound Meao..<br>";
	}
}

class Dog implements Animal {


	public function makesound(){

		echo "The Dog is makesond BhoBho...<br>";

	}
}


class Cow implements Animal{

	public function makesound() {


		echo "The cow makesound moo...<br>";

	}
}

$cat = new Cat;
$dog = new Dog;
$cow = new Cow;


$animals = array($cat,$dog,$cow);

foreach($animals as $animal){

	$animal->makesound();

}




?>
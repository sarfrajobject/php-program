<?php

interface Animal{

	public function makesound();

}

class Cat implements Animal{

	public function makesound(){

		echo "Cat is make sound Meao...";

	}
}

$obj = new Cat;
$obj->makesound();

?>

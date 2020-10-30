<?php

class Triangle {

	public function getArea($b,$h){

		$a = 1/2*($b*$h);
		echo "Triangle Area : $a";
	}
}


$obj = new Triangle;

$obj->getArea(5,10);

?>
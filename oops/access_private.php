<?php

class Method{
	private $name = "Sarfraj Malik";

	function access(){

		echo "Hi ". $this->name ." you access private method <br>";
	}
}

$obj = new Method;

$obj->access();
echo "Hi".$obj->name;

?>
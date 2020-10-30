<?php


class Array_merge{

	function array_merge(){

		$a = array("Sarfraj","Anas");
		$b = array("Saalim");
		print_r(array_merge($a,$b));
	}

}

$array = new  Array_merge;

$array->array_merge();

?>
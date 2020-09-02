<?php

function sum($a,$b)
{
	$c = $a+$b;
	echo $c."<br>";
	echo "function name :".__function__;
}


sum(5,20);
?>
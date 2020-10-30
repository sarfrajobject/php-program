<?php

ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);

$num = 10;

try{

	if($num==1){

		echo "The nummber is a $num ";

	}
	else
	{
		throw new Exception("Error Processing Request");
		
	}
}
catch(Exception $e){

	echo $e->getMessage();
}

finally{

	echo "ff";
}

?>
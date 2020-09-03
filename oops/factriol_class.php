<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Factorial{

	function factorial($num){

		if ($num == 0){
			return 1;
		}
		elseif ($num == 1) {
			return 1;
		}
		else {
        return ($num * factorial($num-1));
   		}

	}
}



$fact = new Factorial;
echo $fact->factorial(5);

?>
<?php

for($i = 1;$i<=100;$i++){
	if (($i%3==0) && ($i%5==0)) {
		# code...
		echo "BUZZ FIZZ <br>";
	}
	elseif ($i%3==0) {
		# code...
		echo "FIZZ <br>";
	}
	elseif ($i%5==0) {
		# code...
		echo "BUZZ <br>";
	}
	else 
		echo $i.'<br>';
}

?>
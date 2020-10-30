<?php

$sentence = "Hi sarfraj Malik how are you!";

$find = "Malik";

if (strpos($sentence, $find) !== false){

	echo "Word found !";

}
else {
	echo "Word not found";
}

?>
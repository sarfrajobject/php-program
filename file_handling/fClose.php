<?php

$file = fopen("index.txt", "r");


$file1 = fclose($file);


if ($file1) {
	echo "file close sussecfully !";
}

else {

	echo "file not close ";
}

?>
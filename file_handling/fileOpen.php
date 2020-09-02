<?php

$myfile = fopen("index.txt", "r");



if ($myfile){
	echo "file open sucess ";
}


else {
	echo "file not found !";
}

?>
<?php


$fileOpen = fopen("index.txt", "r");

echo fread($fileOpen, filesize("index.txt"));

echo fclose($fileOpen);

?>
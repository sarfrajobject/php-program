<?php

$myfile = fopen("index.txt", "w") or die("Unable to open file!");
echo fread($myfile,filesize("index.txt"));
fclose($myfile);

?>
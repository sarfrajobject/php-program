<?php

$a = array("red","yellow");
$b = array("1"=>"red","4"=>"blue");

$search = array_search("red", $a);
$search_b = array_search("blue", $b);


print_r($search);
echo "<br>";
print_r($search_b);

?>
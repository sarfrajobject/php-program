<?php

$car = array("BMW" => "etr", "honda"=>"etr", "swift"=>"etr");


print_r(array_change_key_case($car,CASE_LOWER));

echo "<br>";

print_r(array_change_key_case($car, CASE_UPPER));


?>
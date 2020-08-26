<?php

$arr = array(1,2,3,5,8,4);

$min = $arr[0]; 

foreach ($arr as $key => $val) {
	# code...
	if($min > $val){
        $min = $val;
    }
}
echo "Minimum nuber in Array : $min";

?>
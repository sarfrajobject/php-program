<?php

$arr = array(1,2,3,5,8,4);

$max = $arr[0]; 

foreach ($arr as $key => $val) {
	# code...
	if($max < $val){
        $max = $val;
    }
}
echo $max;

?>
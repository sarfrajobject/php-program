<?php


function add($num,$num2){


	$result = $num +$num2;
	return $result;
}


$add1 = add(100,200);
echo $add1.'<br>';
$add2 = add(200,300);
echo  $add2.'<br>';

echo "Total ".$add1*$add2;


?>
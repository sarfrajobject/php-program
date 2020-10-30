<?php

$num1 = 10;
$num2 = 20;

if (($num2==$num1)  && ($num1==$num2))

{
	echo "equal";
} 
	if(($num2<$num1)  && ($num1>$num2))
	{
		echo "lessthan";
	}
	elseif (($num2<$num1)  or ($num1<$num2)) {
		echo "$num2 is graterthan $num1";
	}

else
{
	echo "not equal";
}
?>

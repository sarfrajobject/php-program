<?php

$heads = 0;
$tails = 0;

$rnum = rand(1,2);

for ($i=1; $i<=100 ; $i++) { 
	if ($rnum == 1) {
	# code...
		echo "Heads, I win! <br>";
		$heads++;
	}
	elseif ($rnum == 2) {
		# code...
		echo "Tails, you win! <br>";
		$tails++;
	}
}
echo "There were ".$heads."heads and ".$tails.".";
?>
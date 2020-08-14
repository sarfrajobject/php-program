<?php 

function fibannaci($num)
{
	if ($num==0){
		return 0;
	}
	elseif($num==1){
		return 1;
	}

	else{
		return (fibannaci($num-1) +  
                fibannaci($num-2)); 
	}

}

$num = 10; 
for ($counter = 0; $counter < $num; $counter++){   
    echo Fibonacci($counter); 
} 
?>
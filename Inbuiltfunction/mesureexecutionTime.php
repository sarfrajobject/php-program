<?

$start = microtime(true);

for($i = 1; $i <=1000; $i++) 
{ 

    echo "hello"; 
}  
$end =  microtime(true);

$execution_time = ($start-$end);
echo "$execution_time sec";

?>
<?php

ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$start = microtime(true);

	class Time{

	function nmmber($number);

	{
		return $number;
	}
}

$end = microtime(true);

$calculate = $start-$end;

echo "Time $calculate";

$object = new Time;

?>
<?php

$students = array(array('name' =>'Sarfraj',
						'Age' => 21,
						'waight' => 50),
				array('name' =>'Saalim',
						'Age' => 21,
						'waight' => 50),
				array('name' =>'Anas',
						'Age' => 21,
						'waight' => 50));


foreach ($students as $i => $name) {

	echo "Hi " .$name['name'] . '<br>';
}

?>
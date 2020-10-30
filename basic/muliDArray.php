<?php

$students = array(array('Name' => 'Sarfraj', 
					  'Age' => 21,
					  'Waight' => 52 ),
				array('Name' => 'Saalim', 
					  'Age' => 20,
					  'Waight' => 55 ),
				array('Name' => 'Anas', 
					  'Age' => 18,
					  'Waight' => 50 ));



echo $students[0]['Name'] .' '.$students[0]['Age'] .' '.$students[0]['Waight'].'<br>';
echo $students[1]['Name'] .' '.$students[1]['Age'] .' '.$students[1]['Waight'].'<br>';
echo $students[2]['Name'] .' '.$students[2]['Age'] .' '.$students[2]['Waight'].'<br>';

?>
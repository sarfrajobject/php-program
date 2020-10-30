<?php

session_start();

$name = $_SESSION['Name'];
$Age = $_SESSION['Age'];
$Weight = $_SESSION['Weight'];




echo "Name :".$name.'<br>';
echo "Age :".$Age.'<br>';
echo "Weight :".$Weight.'<br>';
?>
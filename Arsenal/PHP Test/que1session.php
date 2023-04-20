<?php
	session_start(); 
	$counter = 0;

	if(isset($_COOKIE['counter'])) {
	$counter = $_COOKIE['counter'];
	}
	$counter++;
	setcookie('counter', $counter, time()+3600);
	echo "value is: " . $counter;
	//session_destroy();
	
?>


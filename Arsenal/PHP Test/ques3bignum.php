<?php
	$num = array(3,47,82,46,90,35,96,25,87,56,25,5,84,71,27);
	echo implode(" ",$num) ."<br>";
	
	$biggest = $num[0];
	for($i=1; $i<count($num); $i++){
	if($num[$i] > $biggest){
	$biggest = $num[$i];
	}
   }
	echo "biggest number in the array is: " .$biggest;
?>
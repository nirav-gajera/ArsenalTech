<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    echo "Hello! $name"."<br>";
	$city = $_POST['city'];
	echo "Your favourite city is $city";
}

?>
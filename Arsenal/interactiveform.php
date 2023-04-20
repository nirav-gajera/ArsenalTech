<?php

	$city = "";

if(isset($_POST['submit']) && isset($_POST['city']) && !empty($_POST['city']))
{
    echo "Form is submitted and input value is set";
	}else{
    echo "Form is not submitted and value is null";
}
?>
<html>
<body>
    <form method="post">
        <h1>Enter your favourite city :- </h1><br>
        <input type="text" name="city" id="city">
        <input type="submit" value="submit" name="submit"><br>
    
	<?php
	if(isset($_POST['submit'])){
	$city = $_POST['city']; 
	echo "<h3>YOur input is: $city</h3>";
	}
	?>
	</form>
	
</body>
</html>
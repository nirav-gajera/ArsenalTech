<html>
<body>
	<h1>Palindrome Checker</h1>
	<form method="POST" action="">
		<label for="number">Enter a number:</label>
		<input type="text" name="number" id="number">
		<button type="submit" name="submit">Check</button>
	</form>

	<?php
	if(isset($_POST['submit']))
		{
		$number = $_POST['number'];
		$reversed = strrev($number);
		if($number == $reversed) 
		{
			echo "$number is a Palindrome number";
		} else {
			echo "$number is not a Palindrom number";
		}
	}
	?>
</body>
</html>

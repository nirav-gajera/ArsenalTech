<html>
<body>
	<form method="post">
		<label>Enter a number:</label>
		<input type="text" name="number">
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>

<?php
	function palindrome($num){
	    $temp = $num;
	    $reverse_num = 0;
	    
	    while ($temp > 0) {
	        $rem = $temp % 10;
	        $reverse_num = ($reverse_num * 10) + $rem;
	        $temp = (int) ($temp / 10);
	    }
	    if($num == $reverse_num){
	        return true;
	    } else {
	        return false;
	    }
	}
	
	if(isset($_POST['number'])) {
		$num = $_POST['number'];
		if(palindrome($num)){
			echo "$num is a palindrome number";
		} else {
			echo "$num is not a palindrome number";
		}
	}
?>


<?php
function createRadiobuttons($number)
{
	for($i=0; $i<=$number; $i++)
	{
		echo"<input type='radio' value='RADIO[]' id='CHECKBOX' name='RADIO'>RADIO";
		echo"</br>";
	}
}
?>
<html>
<head></head>
<body>
<form method="post">
<label for="radio">Enter number of radio buttons you want</label>
<input type="text" name="number" id="number">
<input type="submit" value="submit" name="submit">
</form>
<?php
if(isset($_POST['submit']))
{
	$noofradioswant = $_POST['number'];
	createRadiobuttons($noofradioswant);
}
?>
</body>
</html>

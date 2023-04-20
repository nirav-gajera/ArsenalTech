<!--Laugh on Monday, laugh for danger.
Laugh on Tuesday, kiss a stranger.
Laugh on Wednesday, laugh for a letter.
Laugh on Thursday, something better.
Laugh on Friday, laugh for sorrow.
Laugh on Saturday, joy tomorrow.
-->
<html>
<head>
</head>
<body>
<h1> if...elseif...else</h1>
	<form method ="post"><label for="input">Enter any day of week</label>
	<input type="text" name="dayofweek" id="dayofweek">
	<input type="submit" name="submit" value="submit"><br>
	</form>
<?php
if(isset($_POST['submit']))
{
	
	if(isset($_POST['dayofweek']))
	{
		if($_POST['dayofweek'] === "monday" || $_POST['dayofweek'] === "Monday" || $_POST['dayofweek'] === "MONDAY")
		{
			echo "Laugh on Monday, laugh for danger.";
		}
	elseif($_POST['dayofweek'] === "tuesday" || $_POST['dayofweek'] === "Tuesday" || $_POST['dayofweek'] === "TUESDAY")
		{
			echo "Laugh on Tuesday, kiss a stranger.";
		}
	elseif($_POST['dayofweek'] === "wednesday" || $_POST['dayofweek'] === "Wednesday" || $_POST['dayofweek'] === "WEDNESDAY")
		{
			echo "Laugh on Wednesday, laugh for a letter.";
		}
	elseif($_POST['dayofweek'] === "thursday" || $_POST['dayofweek'] === "Thursday" || $_POST['dayofweek'] === "THURSDAY")
		{
			echo "Laugh on Thursday, something better.";
		}
	elseif($_POST['dayofweek'] === "friday" || $_POST['dayofweek'] === "Friday" || $_POST['dayofweek'] === "FRIDAY")
		{
			echo "Laugh on Friday, laugh for sorrow.";
		}
	elseif($_POST['dayofweek'] === "saturday" || $_POST['dayofweek'] === "Saturday" || $_POST['dayofweek'] === "SATURDAY")
		{
			echo "Laugh on Saturday, joy tomorrow.";
		}
	else
		{
		echo "Not any day of week";
		}	
	}
}
	
?>
</body>
</html>  









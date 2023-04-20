<html>
<body>
	<form method="post">
		<label for="days">Select a day:</label>
		<select id="days" name="days">
			<option value="monday">Monday</option>
			<option value="tuesday">Tuesday</option>
			<option value="wednesday">Wednesday</option>
			<option value="thursday">Thursday</option>
			<option value="friday">Friday</option>
			<option value="saturday">Saturday</option>
		</select>
		<button type="submit" name="submit">Submit</button>
	</form>

	<?php
		if(isset($_POST['submit'])){
			$day = $_POST['days'];
			switch($day){
				case 'monday':
					echo "<p>Laugh on Monday, laugh for danger.</p>";
					echo "<button onclick='window.history.back()'>Back</button>";
					break;
				case 'tuesday':
					echo "<p>Laugh on Tuesday, kiss a stranger.</p>";
					echo "<button onclick='window.history.back()'>Back</button>";
					break;
				case 'wednesday':
					echo "<p>Laugh on Wednesday, laugh for a letter.</p>";
					echo "<button onclick='window.history.back()'>Back</button>";
					break;
				case 'thursday':
					echo "<p>Laugh on Thursday, something better.</p>";
					echo "<button onclick='window.history.back()'>Back</button>";
					break;
				case 'friday':
					echo "<p>Laugh on Friday, laugh for sorrow.</p>";
					echo "<button onclick='window.history.back()'>Back</button>";
					break;
				case 'saturday':
					echo "<p>Laugh on Saturday, joy tomorrow.</p>";
					echo "<button onclick='window.history.back()'>Back</button>";
					break;
				default:
					echo "<p>Invalid input.</p>";
					echo "<button onclick='window.history.back()'>Back</button>";
					break;
			}
		}
	?>
</body>
</html>
<?php
$travel = array("Automobile", "Jet", "Ferry", "Subway");

	foreach ($travel as $t)
    {
    echo "<ul>";

    echo "<li>$t</li>";

    echo "</ul>";

    }
?>
<html>
<body>
<h2>User input to array </h2>
<form  method="post">
<input type="text" name="added">

<?php
	foreach ($travel as $t)
	{
	echo "<input type= 'hidden' name='travel[]' value='$t'>";      
	}
?>

<input type="submit" name="submit" value="Add More!">

<?php
if (isset($_POST["submit"]))
{
	$travel = $_POST["travel"];
	$added = explode(",", $_POST["added"]);
	$travel = array_merge($travel, $added);

	echo "<p><b> list with additions: </b></p>";
	echo "<ul>";

	foreach ($travel as $t)
    {
	echo "<li>$t</li>";
    }
	echo "</ul>";
}
?>
</form>
</body>
</html>
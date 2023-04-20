<?php
function createCheckboxes($number)
{
    for($i=0; $i<=$number; $i++)
	{
        echo"<input type='checkbox' name='CHECKBOX[]' id='CHECKBOX' value='CHECKBOX'>CHECKBOX";
        echo"</br>";
    }
}
?>
<html>
<head>
</head>
<body>
    <form method="post">
        <label for="checkbox">enter number of checkbox you want</label>
        <input type="text" name="number" id="number">
        <input type="submit" value="submit" name="submit">
    </form>
<?php
	if(isset($_POST['submit']))
	{
        $noofcheckboxeswant = $_POST['number'];
		createCheckboxes($noofcheckboxeswant);
    }
?>
</body>
</html>

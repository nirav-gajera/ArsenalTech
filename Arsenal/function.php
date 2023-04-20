<?php 
$months = array("January" => "31", 
				"February" => "28 (29 if leap year)", 
				"March" => "31",
				"April" => "30",
				"May" => "31", 
				"June" => "30",
				"July" => "31",
				"August" => "31", 
				"September" => "30",
				"October" => "31",
				"November" => "30",
				"December" => "31");

if(isset($_POST['submit']))
{
    $input = $_POST['months'];
    echo optionElement($months, $input);
}

function createoption($months)
{
    echo "<option value='None' selected>Please select a month</option>";
    foreach($months as $key => $value)
	{
        echo "<option value=".$key.">".$key."</option>";
    }
}

function optionElement($months, $opted)
{
    foreach($months as $key => $value)
	{
        if($key === $opted){
            return "The month of $opted has $value days.";
        }
    }
}

?>
<html>
<head>
</head>
<body>
    <form method="post">
        <h2>Select a month</h2>
        <select name="months" id="months">
            <?php createoption($months); ?>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
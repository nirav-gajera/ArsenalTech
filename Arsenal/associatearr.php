<?php

$largest_city= array(
    "Tokyo" => "Japan",
    " Mexico City" => "Mexico", 
    "New York City" => "USA", 
    "Mumbai" => "India", 
    "Seoul" => "Korea", 
    "Shanghai" => "China", 
    "Lagos" => "Nigeria", 
    "Buenos Aires" => "Argentina", 
    "Cairo" => "Egypt", 
    "London" => "England");
?>
<html>
<head>
</head>
<body>
<h1>Assosiative array</h1>
    <form method="post">
        <label for="city">Choose a city:</label>
		<select name="selectcity" id="selectcity">
            <?php
            foreach($largest_city as $city => $country)
			{
                echo "<option value='$city'>$city</option>";
            }
            ?>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        if(isset($_POST['submit']) || isset($_POST['selectcity']))
		{
            foreach($largest_city as $city => $country)
			{
                if($_POST['selectcity'] === $city)
				{
                    echo "$city is in $country";
                }
            }
        }
    ?>
</body>
</html>
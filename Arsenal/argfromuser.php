<?php

function areaofrect($width, $length)
{
    $area = $width * $length;
    return "A rectangle of length $length and width $width has an area of $area";
}

?>

<html>
<head>
</head>
<body>
    <form method="post">
        <h1>Find area of rectangle</h1><br>
        <label for="length"><b>Enter length:</b></label>
        <input type="text" name="length" id="length"><br>
        <label for="width"><b>Enter width:</b></label>
        <input type="text" name="width" id="width"><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php 
    
    if(isset($_POST['submit']))
	{
        $l = $_POST['length'];
        $w = $_POST['width'];

        echo areaofrect($w, $l);
    }

    ?>
</body>
</html>







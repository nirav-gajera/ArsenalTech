<?php
$travel = array("Automobile", "Jet", "Ferry", "Subway");

foreach ($travel as $t)
    {
    echo "<ul>";

    echo "<li>$t</li>";

    echo "</ul>";

    }
?>

<form  method="post">
<input type="text" name="added" >
<?php

foreach ($travel as $t)
{
echo "<input type= 'text' name='travel[]' value='$t'>";      
}

?>
<input type="submit" name="submit" value="Add More!">
</form>

<?php

if (isset($_POST["submit"]))
{
$travel = $_POST["travel"];
$added = explode(",", $_POST["added"]);
$travel = array_merge($travel, $added);


echo "<p> list with additions:</p>";

echo "<ul>";

foreach ($travel as $t)
    {
    echo "<li>$t</li>";
    }

echo "</ul>";
}
?>


<?php
$weathers = array("Rain","Sunshine","Clouds","Hail","Sleet","Snow","Wind");
?>
<html>
<body>
<h2>Array from user input</h2>
    <form method="post">
		City:-   <input type="text" name="city" size="20"><br><br>
		Month:-<input type="text" name="month" size="19"><br><br>
        Year:-   <input type="text" name="year" size="20"> <br><br>
    <b>Weathers:</b><br><br>
        <?php
        foreach($weathers as $weather){
          echo  "<input type='checkbox' name='weather[]' id='weather' value=$weather>$weather<br>";
        }
        ?>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $input =  array($_POST['city'],$_POST['month'],$_POST['year']);
            echo "In $input[0] in the month of $input[1] $input[2], you observed the following weather: <br>";
            echo "<ul>";
            foreach($_POST['weather'] as $weather){
                echo "<li>$weather</li>";
            }
            echo "</ul>";
        }     
    ?>
</body>
</html>

<!--In $city in the month of $month $year, you observed the following weather:", 
where $city, $month and $year are values from the array you created.-->
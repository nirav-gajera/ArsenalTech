<?php 
#array of months
$months = array("January" => "31", "February" => "28 (29 if leap year)", "March" => "31","April" => "30","May" => "31", "June" => "30", 
"July" => "31", "August" => "31", "September" => "30", "October" => "31", "November" => "30","December" => "31");

#output of selected input
if(isset($_POST['submit'])){
    $input = $_POST['monthsel'];
    echo optionElement($months, $input);
}
#function for printing output
function optionElement($months, $opted){
    foreach($months as $key => $value){
        if($key === $opted){
            return "The month of $opted has $value days.";
        }
    }
}
#function of creating whole select 
function createSelect($array){
    if(is_array($array)){
        echo "<select name='monthsel' id='monthsel'>";
        createOption($array);
        echo "</select>";
    }else{
        echo "No array";
    }
}
#function for creating option
function createOption($months){
    echo "<option value='None' selected>Select a month</option>";
    foreach($months as $key => $value){
        echo "<option value=".$key.">".$key."</option>";
    }
}

?>
<html>
<head>
</head>
<body> 
    <form method ="post" action="funcallfun.php">
        <h2> Please select a month </h2>
        <?php createSelect($months); ?>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
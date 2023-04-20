<?php
$modes = array("Automobile","Jet","Ferry","Subway");
echo "Travel takes many forms, whether across town, across the country, or around the world.
Here is a list of some common modes of transportation:";
echo "<br>";
if(!isset($_POST['submission'])){
    echo "<ul>";
    foreach($modes as $mode){
       echo "<li>$mode</li>";
    }
?>
<html>

<body>
    <form method="post">
        <label for="inp">Give a list seprated by commas</label><br>
        <input type="text" name="additem" id="additem">
        <?php 
            foreach($modes as $mode){
               echo "<input type='hidden' name='modesoft[]' value=$mode>";
            }
        ?>
        <input type="submit" value="Go" name="submission">
    </form>
    <?php } else {
        $modes = $_POST['modesoft'];
        $additemarray = explode(',',$_POST['additem']);
        array_splice($modes,count($modes), 0, $additemarray);
        echo "<p>List with your added items</p>";
        echo "<ul>";
        foreach($modes as $mode){
            echo "<li>$mode</li>";
        }
        echo "</ul>";
    ?> 
    <p>Add more ?</p>
    <form method="post">
    <label for="inp">Give a list seprated by commas</label><br>
        <input type="text" name="additem" id="additem">
        <?php 
            foreach($modes as $mode){
               echo "<input type='hidden' name='modesoft[]' value=$mode>";
            }
        ?>
        <input type="submit" value="Go" name="submission">
    </form>
    <?php } ?>

    
    
</body>
</html>
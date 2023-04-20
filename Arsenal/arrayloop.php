<html>
<head>
</head>
<body>
<h1> Simple array loop:</h1>
    <?php
        $largest_city= array("Tokyo"," Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
        $separated = implode(',',$largest_city);
        echo "Comma Seprated :- ".$separated;
        echo "<br>";
        echo "<br>";
    ?>
    <?php echo "<b>Sorted</b>"; ?>
    <ul> 
    <?php
        asort($largest_city);
        foreach($largest_city as $city){
        echo "<li>$city</li>";
        }
    ?>
    </ul>
    <?php 
       echo "<br>";
       echo "<b>Added and sorted</b>"; 
    ?>
    <ul>
    <?php
     array_push($largest_city, "Los Angeles", "Calcutta", "Osaka", "Beijing");
     asort($largest_city);
     foreach($largest_city as $city){
     echo "<li>$city</li>";
     }
    ?>
    </ul>
</body>
</html>
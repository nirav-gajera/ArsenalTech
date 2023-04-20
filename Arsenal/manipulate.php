<?php
$temprature = array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78, 68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83);
$total_temprature = 0;
$temp_array_length = count($temprature);
foreach($temprature as $temp)
{
    $total_temprature = $total_temprature + $temp;
}
$average_high_temprature = $total_temprature / $temp_array_length;
echo "Average High Temprature :- $average_high_temprature&deg";
echo "<br>";
sort($temprature);
echo "Five coolest temprature :- ";
echo "<br>";
for($i=0;$i<5;$i++){
    echo $temprature[$i]."&deg";
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "Five warmest temprature :- ";
echo "<br>";
for($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
    echo $temprature[$i]."&deg";
    echo "<br>";
}
?>
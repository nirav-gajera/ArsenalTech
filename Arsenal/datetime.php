<?php
echo "Today is " .date("Y/M/D"). "<br>";
echo "Today is " .date("Y.M.D"). "<br>";
echo "Today is " .date("Y-M-D"). "<br>";
echo "Today is " .date("l"). "<br>";
echo"<br>";
echo"<br>";
//define time
echo "The time is " . date("h:i:sa");
echo"<br>";
echo"<br>";
//Create Date with mkdate()
$d=mktime(11, 14, 54, 8, 12, 2023);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
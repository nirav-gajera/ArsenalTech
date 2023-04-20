<html>
<head> 
</head>
<body>
    <h1>Weather Conditons:</h1>
    <?php
        $weathercondition = array("rain","sunshine","clouds","hail","sleet","snow","wind");

        echo "We've seen all kinds of weather this month. At the beginning of the month, we had <b>$weathercondition[5]</b> 
		and <b>$weathercondition[6].</b> Then came <b> $weathercondition[1]</b> with a few <b>$weathercondition[2]</b> 
		and some <b>$weathercondition[0].</b> At least we didn't get any <b>$weathercondition[3]</b> or <b>$weathercondition[4].</b>"
    ?>
</body>
</html>
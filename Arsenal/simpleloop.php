<?php
$abc = 0;
while ($abc < 9) {
    echo "abc ";
    $abc++;
}
echo "<br>";
$xyz = 0;
do{
    echo "xyz ";
    $xyz++;
}while($xyz < 9);
echo "<br>";
for($i=1; $i<=9; $i++){
    echo $i;
    echo "<br>";
}
for($loop = 65; $loop<=70; $loop++){
    $ABC = chr($loop);
    echo "Item $ABC";
    echo "<br>";
}
?>

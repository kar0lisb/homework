<?php

$temperature = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
$sum = 0;


for($i=0; $i < count($temperature); $i++) {
    $sum = $sum + $temperature[$i];
}
$average = $sum / count($temperature);
echo round($average);
echo "<br>";

for($i=0; $i < 5; $i++) {
    rsort($temperature);
    echo $temperature[$i];
    echo "&nbsp";
}
echo "<br>";

for($i=0; $i < 5; $i++) {
    sort($temperature);
    echo $temperature[$i];
    echo "&nbsp";
}

?>
<?php 

for ($i = 1; $i <=3; $i++) {
    for ($j = 1; $j <=10; $j++) {
        echo "$i x $j = " . $i * $j . " | "; 
    }
    echo "<br>";
}

echo "<br>";


for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 4; $j++) {
        for ($k = 1; $k <= 8; $k++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<br>";
}


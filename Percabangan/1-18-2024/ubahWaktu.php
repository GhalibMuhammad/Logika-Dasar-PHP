<?php
$waktu1 = "19:00";
$waktu1_formatted = (date("H:i a", strtotime($waktu1)) == "00:00 am") ? "12:00 pm" : date("h:i a", strtotime($waktu1));


$waktu2 = "23:45";
$waktu2_formatted = (date("H:i a", strtotime($waktu2)) == "00:00 am") ? "12:00 pm" : date("h:i a", strtotime($waktu2));


$waktu3 = "08:55";
$waktu3_formatted = (date("H:i a", strtotime($waktu3)) == "00:00 am") ? "12:00 pm" : date("h:i a", strtotime($waktu3));


echo "Waktu 1: " . $waktu1_formatted . "<br>";
echo "Waktu 2: " . $waktu2_formatted . "<br>";
echo "Waktu 3: " . $waktu3_formatted . "<br>";
?>
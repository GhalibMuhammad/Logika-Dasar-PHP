<?php

$usia = 17;

if ($usia >= 6 && $usia <=12) {
    echo "Waktu tidur optimal adalah 10jam";
}elseif ($usia > 12 && $usia <=18) {
    echo "Waktu tidur optimal adalah 8 hingga 9jam";
} elseif ($usia > 18 && $usia <= 40) {
    echo "Waktu tidur optimal adalah 8jam";
}



// 1. Waktu tidur usia 6-12 = 10jam 12-18 8-9 18-40 =7-8 apabila seseorang berusia 17 taun berapa waktu yang terbaik

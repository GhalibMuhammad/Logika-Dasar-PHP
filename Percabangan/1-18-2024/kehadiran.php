<?php

$absen = "sakit";

$kehadiran = ($absen == "sakit") || ($absen == "izin") ? 100 -3 : 
    (($absen == "alfa") ? 100 - 5 : 100);
    echo "total kehadiran $kehadiran"; 

// nilai1 = 90;

// $predikat = ($nilai1 >= 90) ? "A" : (($nilai1 > 75 && $nilai1 <= 90) ? "B" : "C");
// echo $predikat;

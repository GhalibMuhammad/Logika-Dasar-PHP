<?php

$beratBadan = 48;
$tinggiBadan = 148;
 
$imt = $beratBadan / ($tinggiBadan * $tinggiBadan / 10000);

echo "total bmi kamu $imt";

if ($imt < 18.5 ) {
    echo "berat badan kurang ";
} elseif ($imt >= 18.5 && $imt < 22.9) {
    echo "Normal";
} elseif ($imt >= 22.9 && $imt < 24.9) {
    echo "Berat Lebih";
} elseif ($imt >= 25 ) {
    echo "Obesitas";
}


// kurang dari 18.5 berat badan kurang 
//         dari 18.5 sampai kurang dari 22.9 : Normal
//         Drai 22.9 sampai kurang dari 24.9 :berat lebih
//         lebih dari = 25 : obesitas
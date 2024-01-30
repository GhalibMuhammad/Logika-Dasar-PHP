<?php
// Fungsi untuk mendapatkan huruf terakhir dari string
function getHurufTerakhir($string) {
    // Menggunakan fungsi substr untuk mendapatkan satu karakter terakhir
    $hurufTerakhir = substr($string, -1);
    
    return $hurufTerakhir;
}

// Contoh penggunaan
$stringContoh = "Wikrama";
$hurufTerakhirContoh = getHurufTerakhir($stringContoh);

echo "Huruf terakhir dari \"$stringContoh\" adalah: $hurufTerakhirContoh";


<?php

function pembandingNama($nama1, $nama2) {
    
    $panjangNama1 = strlen(str_replace(' ', '', $nama1));
    $panjangNama2 = strlen(str_replace(' ', '', $nama2));

    echo "Jumlah karakter nama pertama ($nama1): " . $panjangNama1 . "<br>";
    echo "Jumlah karakter nama kedua ($nama2): " . $panjangNama2 . "<br>";

    if ($panjangNama1 > $panjangNama2) {
        echo "Nama pertama ('$nama1') memiliki jumlah karakter lebih banyak.<br>";
        echo "Selisih jumlah karakter dengan nama kedua: " . ($panjangNama1 - $panjangNama2) . "<br>";
    } elseif ($panjangNama2 > $panjangNama1) {
        echo "Nama kedua ('$nama2') memiliki jumlah karakter lebih banyak.<br>";
        echo "Selisih jumlah karakter dengan nama kesatu: " . ($panjangNama2 - $panjangNama1) . "<br>";
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama.<br>";
    }
}

pembandingNama("Muhammad Ghalib", "Muhammad Azka");


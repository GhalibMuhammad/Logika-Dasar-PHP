<?php

// Buatlah sebuah fungsi yang akan mengubah sebuah number menjadi format number contoh jika 1000 = 1k dan jika 1.000.000 = 1M 

    function formatAngka($angka) {
        if ($angka >= 1000000) {
        echo ($angka / 1000000) . 'M';
        } elseif ($angka >= 1000) {
        echo ($angka / 1000) . 'K';
        } else {
        echo $angka;
        }
    }

    formatAngka(9000);

    echo "<br>";

    formatAngka(1000000);

    // echo "<br>";

    // formatAngka(10);




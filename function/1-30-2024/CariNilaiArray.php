<?php

$data = [80, 90, 100, 88, 100];

function search($angkaYangDicari, ...$data) {
    $jumlah = 0;
    foreach ($data as $value) {
        if ($value == $angkaYangDicari) {
            $jumlah += 1;
        }
    }
    return $jumlah;
}

$angkaYangDicari = 100;
echo"jumlah angka $angkaYangDicari = " . search($angkaYangDicari, 80, 90, 100, 88, 100);

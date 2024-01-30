<?php

$nilai_mtk = 60;
$nilai_inggris = 85;
$nilai_indonesia = 67;

$rata_rata = ($nilai_mtk + $nilai_inggris + $nilai_indonesia) / 3;

if ($rata_rata >= 85) {
    echo "Diterima";
} else {
    echo "Tidak diterima";
}
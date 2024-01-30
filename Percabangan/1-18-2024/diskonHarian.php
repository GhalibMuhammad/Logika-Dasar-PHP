<?php

echo date('l, d / m / Y');

$nasgor = 15000;
$ayam = 20000;
$nasbul = 25000;
$esteh = 3000;
$esJeruk = 50000;


$qtNAsgor = 2;
$qtNasbul = 2;
$qtAyam = 1;

$diskon = 0;

$pesanan = ($qtNAsgor * $nasgor) + ($qtNasbul * $nasbul) + ($qtAyam * $ayam);

$hari_ini = date('l');
$diskon_jumat = $pesanan * 0.05;
$diskon_senin = $pesanan * 0.02;

if ($hari_ini == 'Friday') {
        $total = $pesanan - $diskon_jumat;
} elseif ($hari_ini == 'Monday') {
        $total = $pesanan - $diskon_senin;
}else {
        $total = $pesanan;
}

    echo "Total yang harus kamu bayarkan adalah $pesanan"; 







// if (date('l'));{}

// Menu di rumah makan
// Nasi goreng = 15k
// Ayam bakar = 20k
// nasi kebuli = 25k
// esteh = 3000
// es jeruk = 50000

// Ada program memeberikan diskon sebesar 5% dihari jumat dan2% senin,
// hitugkal harga yang harus dibayar jika membeli 2 nasi kebuli, 1 ayam bakar, 2 nasi gvoreng menggunkan hari otomatis 
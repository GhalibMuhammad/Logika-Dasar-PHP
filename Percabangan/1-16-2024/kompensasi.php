<?php

$jamNormal = 8;
$kompensasiSatu = 50000;
$kompensasiDua = 25000;

$jamMulai = 8;
$jamSelesai = 22;

$jumlahJam = $jamSelesai - $jamMulai;

if( $jumlahJam > $jamNormal){

    $jumlahJamKompensasi = $jumlahJam - $jamNormal;

    if ( $jumlahJamKompensasi == 1) {
        $kompensasi = $kompensasiSatu;
    } else {
        $kompensasi = ( ($jumlahJamKompensasi -1 ) * $kompensasiDua ) + $kompensasiSatu;
    }

    echo " Jumlah Kompensasi : " . $kompensasi;
} else {
    echo "tidak mendapatkan kompensasi";
}
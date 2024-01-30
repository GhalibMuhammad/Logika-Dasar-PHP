<?php

function rupiah($uang) {
    
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];

    $lembarUang = [];

    foreach ($pecahan as $nilai) {
        $jumlahLembar = floor($uang / $nilai);

        if ($jumlahLembar > 0) {
            $lembarUang[$nilai] = $jumlahLembar;
        }

        $uang %= $nilai;
    }

    return $lembarUang;
}

$uang = rupiah(188800);

echo "Lembar Uang : <br>";
foreach ($uang as $nilai => $jumlah) {
    echo "$nilai: $jumlah lembar <br>" ;
}

?>

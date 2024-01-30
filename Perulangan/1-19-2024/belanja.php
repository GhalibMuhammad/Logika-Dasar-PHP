<?php

$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 5,
    ],
];

echo "<ol>";

foreach ($barang as $key => $value) {
         echo "<li> Total yang kamu bayar untuk " . $value['nama_barang'] . " = Rp ";

        $total = $value["jumlah_beli"] * $value["harga_barang"];
        echo $total . "<br>";

   
}

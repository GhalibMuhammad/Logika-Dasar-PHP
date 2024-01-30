<!-- program diskon 5% tipa hari selasa. Dan setiap pembelian diatas 100000 mendapatkan diskon sebesar 7%. -->

<!-- hitunnglah uang yang harus di bayar jika total pembelian 130.000 pada hari selasa -->


<?php


$hari = "selasa"; 
$totalPembelian = 130000;

echo "Total Belanja = " . $totalPembelian; 
echo "<br>";
echo "Anda Belanja Pada Hari = " . $hari; 
echo "<br>";


$diskonSelasa = $totalPembelian * 0.05;
$diskonDiatas = $totalPembelian * 0.07;

if ($hari == "selasa" || $totalPembelian > 100000) {
    if ($hari == "selasa" && $totalPembelian <= 100000) {
        $total_diskon = $totalPembelian - $diskonSelasa;
    } elseif ($hari == "selasa" && $totalPembelian > 100000) {
        $total_diskon = $totalPembelian - $diskonDiatas - $diskonSelasa;
    } elseif ($totalPembelian > 100000) {
        $total_diskon = $totalPembelian - $diskonDiatas;
    }
    echo "Total pembayaran yang harus dibayr adalah " . $total_diskon;
} else {
    echo "Tidak mendapatkan diskon";
}










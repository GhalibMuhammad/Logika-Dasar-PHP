<?php
$a = 9;
$b = 2;

echo "Bilangan $a Dibagi $b <br> ";

$hasil = $a / $b;

if (is_float($hasil)) {
    echo "Hasil pembagian : $hasil <br>";
     $hasil = round($hasil);
    echo "Hasil pembulatan: $hasil";
} else {
    echo "Hasil pembagian: $hasil";
}

?>

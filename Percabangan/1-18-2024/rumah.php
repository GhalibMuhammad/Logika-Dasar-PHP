<?php
$panjang = 13;
$lebar = 9;

$luas = $panjang * $lebar;

if ($luas < 90) {
    $rumah = "Tipe 36";
} elseif ($luas >= 90 && $luas <= 96) {
    $rumah = "Tipe 45";
} elseif ($luas > 96 && $luas <= 120) {
    $rumah = "Tipe 54";
} elseif ($luas > 120 && $luas <= 150) {
    $rumah = "Tipe 60";
} else {
    $rumah = "Tipe 70";
}

echo "Luas tanah: {$luas} m2\n";
echo "<br>";
echo "Tipe rumah: {$rumah}\n";
?>

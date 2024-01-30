<?php

$student = [

    [
        "nama" => "ghalib",
        "nilai" => [70,90,99,86]
    ],
    [
        "nama" => "azka",
        "nilai" => [90,90,99,86]
    ],
    [
        "nama" => "rhestu",
        "nilai" => [90,76,99,86]
    ],
    [
        "nama" => "azka",
        "nilai" => [85,80,95,90]
    ],

];

echo "<ol>";

foreach ($student as $key => $value) {
    echo "<li>" . $value['nama' ] . (array_sum($value['nilai']) / count($value['nilai'])) . "</li>";
}
echo "</ol>";


?>
<?php

echo "========================================================================";

$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];

$kompeten = [];
$belumKompeten = [];

echo "<ol>";


foreach ($bilangan as $key => $value) {
    if ($value >= 75) {
        $kompeten[] = $value;
    } else {
        $belumKompeten[] = $value;
    }
}

echo "<li>Kompeten: " . implode(", ", $kompeten) . "</li>";
echo "<li>Belum Kompeten: " . implode(", ", $belumKompeten) . "</li>";

echo "</ol>";

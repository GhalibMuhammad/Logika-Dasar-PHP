<?php

$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

echo "<ol>";

foreach ($data as $key => $row) {
    echo "<li> {$row["nama"]} "; 
    if ($row['tahun'] % 4 == 0 ) {
        echo "lahir pada tahun kabisat " . $row['tahun'];
    }else {
        echo "lahir bukan pada tahun kabisat " . $row['tahun'];
    }
    echo "</li>";
}

echo "</ol>";
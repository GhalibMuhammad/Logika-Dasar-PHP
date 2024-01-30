<?php

function formatIDN($date) {
    $hariIndo = ['Monday' => 'Senin', 'Tue' => 'Selasa', 'Wed' => 'Rabu', 'Thu' => 'Kamis', 'Fri' => 'Jumat', 'Sat' => 'Sabtu', 'Sun' => 'Minggu'];
    echo strtr(date('l, d M y', strtotime($date)), $hariIndo);
}

$date = date('D, d M y');
echo $date . " vs ";
formatIDN($date);


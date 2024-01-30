<?php

function formatIDNDate($date) {
    $days = [
        'Mon' => 'Senin',
        'Tue' => 'Selasa',
        'Wed' => 'Rabu',
        'Thu' => 'Kamis',
        'Fri' => 'Jumat',
        'Sat' => 'Sabtu',
        'Sun' => 'Minggu'
    ];

    $day = substr($date, 0, 3);

    if ($days[$day]) {
        $formatHari = $days[$day];
    } else {
        $formatHari = $day;
    }

    $formatTanggal = $formatHari . substr($date, 3);

    echo $formatTanggal;
}

$date = date('D, d M Y');
echo  $date;
echo " vs ";
formatIDNDate($date);


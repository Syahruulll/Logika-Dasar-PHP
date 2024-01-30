<?php

function formatAngka($angka) {

    if ($angka >= 1000000) {
        $formatangka = ($angka / 1000000) . 'M';
    } elseif ($angka >= 1000) {
        $formatangka =  ($angka / 1000) . 'K';
    } else {
        $formatangka = $angka;
    }

    echo $formatangka;
    echo "</br>";
}

formatAngka(9000);
echo "</br>";

formatAngka(1700000);


<?php

$a = 5;
$b = 10;


if ($a == $b) {
    
    echo "Kedua variabel sama, nilai: $a\n";
} else {

    $angkaTerbesar = ($a > $b) ? $a : $b;
    echo "Kedua variabel berbeda, angka terbesar: $angkaTerbesar\n";
}
?>
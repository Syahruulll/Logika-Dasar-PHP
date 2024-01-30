<?php

$diskon1 = 0.05;
$diskon2 = 0.07;
$diskon3 = 0.12; 
$batasDiskon = 100000;
$ttlBalanja = 130000;
$hariBalanja = "selasa";


$diskon = 0;


if ($hariBalanja == "selasa") {
  
    if ($ttlBalanja > $batasDiskon) {
        $diskon += $diskon3;
        $jlmdiskon3 = $ttlBalanja * $diskon3;
        $ttldis3 = $ttlBalanja - $jlmdiskon3;
        echo "Hari Selasa, belanja di atas 100 ribu, dapat diskon 12%. Harga menjadi " . $ttldis3;
    } else {
        $jlmdiskon1 = $ttlBalanja * $diskon1;
        $ttldis1 = $ttlBalanja - $jlmdiskon1;
        $diskon += $diskon2;
        echo "Hari Selasa, dapat diskon 5%. Harga menjadi " . $ttldis1;
    }
} 

$totalDiskon = $ttlBalanja * $diskon;
$hargaAkhir = $ttlBalanja - $totalDiskon;

echo "<br>";
echo "Total diskon: " . ($diskon * 100) . "%";
echo "<br>";
echo "Harga akhir setelah diskon: " . $hargaAkhir;






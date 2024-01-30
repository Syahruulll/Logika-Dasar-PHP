<?php
//pembulatan
$angka1 = 10;
$angka2 = 3;

$hasil = $angka1 / $angka2;

echo "Hasil pembagian: " . $hasil;


if ($hasil == round($hasil)) {
    echo " (tanpa pembulatan)";
} else {

    $hasil = round($hasil);
    echo "<br>Hasil pembulatan: ".$hasil;
}
?>
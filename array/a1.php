<!-- 1. Dari bilangan berikut, kelompokan nilai-nilai tersebut menjadi kelompok kompeten (lebih dari atau sama dengan 75) dan
 belum kompeten (selain dari itu). Lalu tampilkan berdasarkan kelompok tersebut.
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66]; -->

<?php

$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];


echo "Kelompok Kompeten: ";
foreach ($bilangan as $value) {
    if ($value >= 75) {
        echo $value .",";
    }
}
echo "</br>";

echo "Kelompok Belum Kompeten:";

foreach ($bilangan as $value) {
    if ($value < 75) {
        echo $value.",";
    }
}



?>

<?php
function hitungLembarRupiah($jumlah)
{
    $angka = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];

    $hasil = [];

    foreach ($angka as $nilai) {
        $lembar = floor($jumlah / $nilai);
        $jumlah %= $nilai;

        if ($lembar > 0) {
            $hasil["$nilai"] = $lembar;
        }
    }
     
    return $hasil;
}
$uang = 150000;
echo "Nilai uang " .$uang. " Dan Jika Dipecah:";
echo "<br>";
$lembarRupiah = hitungLembarRupiah($uang);

foreach ($lembarRupiah as $nilai => $lembar) {
    echo "Rp. $nilai : $lembar lembar ";
    
}


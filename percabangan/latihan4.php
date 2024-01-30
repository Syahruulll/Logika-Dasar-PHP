<?php
//mengecek ktp dan mencari umur
$tahunLahir = 2008;
$tahun_ayeuna = 2024;
$salisih_tahun = $tahun_ayeuna - $tahunLahir;

if ($salisih_tahun >= 17) {
    echo "Tahun kelahiran $tahunLahir sudah memiliki KTP. Usia sekarang = $salisih_tahun";
} else {
    echo "Tahun kelahiran $tahunLahir belum memiliki KTP. Usia sekarang = $salisih_tahun";
}


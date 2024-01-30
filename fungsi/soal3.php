<?php

function pembandingNama($nama1, $nama2){
    $pjgnm1 = strlen($nama1);
    $pjgnm2 = strlen($nama2);

    echo "Jumlah karakter $nama1: $pjgnm1 ";
    echo "<br>";
    echo "Jumlah karakter $nama2: $pjgnm2 ";

    if ($pjgnm1 > $pjgnm2) {
        $lbhBnyk = $nama1;
        $selisih = $pjgnm1 - $pjgnm2;
    } elseif ($pjgnm2 > $pjgnm1) {
        $lbhBnyk = $nama2;
        $selisih = $pjgnm2 - $pjgnm1;
    } else{
       
        $lbhBnyk = "kedua memiliki karakter yang sama";
        $selisih = 0;
    }

    echo "<br>";

    if ($lbhBnyk !== null) {
        echo "Nama yang memiliki jumlah karakter lebih banyak: $lbhBnyk ";
        echo "<br>";

        echo "Selisih jumlah karakter: $selisih ";
    } else {
        echo "Kedua nama memiliki jumlah karakter yang sama. ";
    }
}

pembandingNama("ucup", "udin");



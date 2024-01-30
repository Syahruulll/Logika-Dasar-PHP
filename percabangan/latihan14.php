<?php 
$bb = 44;
$tb = 148 /100;

$imt = $bb/($tb*$tb);

echo $imt;

if ($imt  <= 18.5 ) {
    echo "berat badan kurang ";
}
elseif($imt >= 18.5 && $imt < 22.9 ){
 echo "normal mereun ";
}
elseif($imt >= 22.9 && $imt < 24.9){
    echo "beranbadan leuwih ";
    
}elseif($imt >= 25 ){
    echo "obesitas ";;
}
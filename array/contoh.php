<?php 
$array = array(1,2);

var_dump($array);
echo "<br>";
print_r($array);
echo "<br>";


for ($i=0; $i <count($array) ; $i++) { 
    echo $array[$i];
}

echo "<br>";

foreach ($array as $key => $value) {
    echo "index ke-$key = " . $value . "<br>";
}

 
// dari array tersebut hitunglah jumlah rata-rata dari nilai tiap-tiap siswa. Lalu tampilkan seperti berikut :
// 1. Andi : 81.2

$student = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Dani',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

echo "<ol>";
foreach ($student as $item) {
    $sum = array_sum($item['nilai']) / count($item['nilai']);

    echo "<li>" . $item['nama'] . " = " . $sum . "</li>";
} 
echo "</ol>";


echo "<br>";

$barang = [
    [
        'nama' => 'Ban',
        'diskon' => 10,
    ],
    [
        'nama' => 'Oli Mesin',
        'diskon' => 0,
    ],
    [
        'nama' => 'Kampas Rem',
        'diskon' => 0,
    ],
    [
        'nama' => 'Busi',
        'diskon' => 9,
    ],
    [
        'nama' => 'Akumulator',
        'diskon' => 7,
    ],
]; 

foreach ($barang as $item) {
    if($item['diskon'] > 0) {
        echo $item['nama'];
        echo '<br>';
    }
}
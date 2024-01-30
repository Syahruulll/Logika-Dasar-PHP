<?php 

$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 5,
    ],

    
];

$total_pembayaran = 0;
foreach ($barang as $value) {
    $total_pembayaran += $value['harga_barang'] * $value['jumlah_beli'];

}
echo 'Total pembayaran yang perlu Anda bayar: ' . $total_pembayaran . ' rupiah';

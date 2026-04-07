<?php
$nama_barang = "Keyboard";

$harga_barang = array(
    "Keyboard" => 150000,
    "Mouse" => 50000,
    "Monitor" => 2000000,
    "Laptop" => 7000000,
    "Flashdisk" => 75000
);

$jumlah = 2;
$pajak = 0.1;

$harga = $harga_barang[$nama_barang];

$total = $harga * $jumlah;
$pajak_harga = $total * $pajak;
$total_bayar = $total + $pajak_harga;

echo "Nama Barang : " . $nama_barang . "<br>";
echo "Harga Satuan : Rp " . $harga . "<br>";
echo "Jumlah Beli : " . $jumlah . "<br>";
echo "Total Harga (Sebelum Pajak) : Rp " . $total . "<br>";
echo "Pajak (10%) : Rp " . $pajak_harga . "<br>";
echo "<b>Total Bayar : Rp " . $total_bayar . "</b><br>";
?>
<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = (int) $_POST['ID'];
    $judul = $_POST['Judul'];
    $penulis = $_POST['Penulis'];
    $tahun = $_POST['Tahun_terbit'];
    $harga = $_POST['Harga'];
    $stok = $_POST['Stok'];

    $sql = "UPDATE buku SET 
                Judul = '$judul',
                Penulis = '$penulis',
                Tahun_terbit = '$tahun',
                Harga = '$harga',
                Stok = '$stok'
            WHERE ID = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal update: " . $conn->error;
    }
}

$conn->close();
?>
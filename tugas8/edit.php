<?php
require 'koneksi.php';

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan");
}

$id = (int) $_GET['id'];

$result = $conn->query("SELECT * FROM buku WHERE ID = $id");

if ($result->num_rows === 0) {
    die("Data tidak ditemukan");
}

$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit dulu Minn</title>
</head>
<body>
    <div>        
        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="ID" value="<?= $data['ID']; ?>">

            Judul: <input type="text" name="Judul" value="<?= $data['Judul']; ?>"><br><br>
            Penulis: <input type="text" name="Penulis" value="<?= $data['Penulis']; ?>"><br><br>
            Tahun Terbit: <input type="text" name="Tahun_terbit" value="<?= $data['Tahun_terbit']; ?>"><br><br>
            Harga: <input type="text" name="Harga" value="<?= $data['Harga']; ?>"><br><br>
            Stok: <input type="text" name="Stok" value="<?= $data['Stok']; ?>"><br><br>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>berhasil</title>
</head>
<body>
    <?php
    require 'koneksi.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Judul = $_POST['Judul'];
        $Penulis = $_POST['Penulis'];
        $Tahun_terbit = $_POST['Tahun Terbit'];
        $Harga = $_POST['Harga'];
        $Stok = $_POST['Stok'];

        $stmt = $conn->prepare(
            "INSERT INTO buku (Judul, Penulis, Tahun Terbit, Harga, Stok)
            VALUES (?,?,?,?,?)"
        );
        $stmt->bind_param("ssidi",
            $Judul,$Penulis,$Tahun_terbit,$Harga,$Stok);
        $stmt->execute();
        }

    ?>
    <h1>Data Berhasil di Tambahkan</h1>
    <button><a href="index.php">kembali ke halaman</a></button>
</body>
</html>
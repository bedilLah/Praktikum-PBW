<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data min</title>
</head>
<body>
    <div>
        <form action="proses_tambah.php" method="post">
            <label for="">Judul</label> 
            <input type="text" name="Judul" id="">
            <br> <br>
            <label for="">Penulis</label>
            <input type="text" name="Penulis" id="">
            <br> <br>
            <label for="">Tahun Terbit</label>
            <input type="number" name="Tahun_terbit" id="">
            <br> <br>
            <label for="">Harga</label>
            <input type="number" name="Harga" id="">
            <br> <br>
            <label for="">Stok</label>
            <input type="number" name="Stok" id="">
            <br> <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Diskon UKT Mahasiswa</title>
</head>
<body>

<h2>Menu Diskon Pembayaran Mahasiswa</h2>

<form method="post">
    NPM: <input type="text" name="npm"><br><br>
    Nama: <input type="text" name="nama"><br><br>
    Prodi: <input type="text" name="prodi"><br><br>
    Semester: <input type="number" name="semester"><br><br>
    Biaya UKT: <input type="number" name="ukt"><br><br>

    <input type="submit" name="submit" value="Proses">
</form>

<?php
if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $ukt = $_POST['ukt'];

    $diskon = 0;
    
    if ($ukt >= 5000000) {
        $diskon = 10;

        if ($semester > 8) {
            $diskon = 15;
        }
    }

    $potongan = ($diskon / 100) * $ukt;
    $bayar = $ukt - $potongan;

    echo "<h3>Hasil</h3>";
    echo "NPM : $npm <br>";
    echo "Nama : $nama <br>";
    echo "Prodi : $prodi <br>";
    echo "Semester : $semester <br>";
    echo "Biaya UKT : Rp $ukt <br>";
    echo "Diskon : $diskon% <br>";
    echo "<b>Yang Harus Dibayar : Rp $bayar </b><br>";
}
?>

</body>
</html>
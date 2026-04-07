<!DOCTYPE html>
<html>
<head>
    <title>Latihan Nilai</title>
</head>
<body>

<h2>Input Nilai Mahasiswa</h2>

<form method="post">
    Nama: <input type="text" name="nama"><br><br>
    Nilai: <input type="number" name="nilai"><br><br>
    <input type="submit" name="submit" value="Proses">
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama']);  
    $nilai = htmlspecialchars($_POST['nilai']);

    if ($nilai >= 80) {
        $predikat = "A";
        $status = "Lulus";
    } elseif ($nilai >= 70) {
        $predikat = "B";
        $status = "Lulus";
    } elseif ($nilai >= 60) {
        $predikat = "C";
        $status = "Lulus";
    } else {
        $predikat = "D";
        $status = "Tidak Lulus";
    }

    echo "<br>Nama : $nama";
    echo "<br>Nilai : $nilai";
    echo "<br>Predikat : $predikat";
    echo "<br>Status : $status";
}
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 4</title>
</head>
<body>
    <div>
        <form method="post">
            <label>Masukkan angka</label><br>
            <input type="number" name="angka" required>
            <button type="submit">Cek</button>
        </form>

        <?php
        if (isset($_POST['angka'])) {
            $angka = $_POST['angka'];

            $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";

            echo "Angka $angka adalah $hasil";
        }
        ?>
    </div>
</body>
</html>
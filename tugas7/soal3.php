<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 3</title>
</head>
<body>
    <div>
        <form method="post">
            <label for="">Ketik 1 untuk melihat daftar Hewan</label>
            <br>
            <input type="text" name="nama" id="">
            <button type="submit">Submit</button>
        </form>

        <?php
        if (isset($_POST['nama'])) {
            $nama = $_POST['nama'];
            $hewan = ["Kucing", "Anjing", "Kelinci", "Sapi", "Gajah"];

            echo "Daftar hewan:<br>";

                foreach ($hewan as $h) {
                    echo $h . "<br>";
                }
            }
        ?>
    </div>
</body>
</html>
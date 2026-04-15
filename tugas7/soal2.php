<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
</head>
<body>
    <div>
        <form method="post">
            <label for="">Bilangan Genap</label>
            <br>
            <input type="number" name="bilangan" id="">
            <button type="submit">Submit</button>
        </form>

        <?php
        if (isset($_POST['bilangan'])) {
            $bilangan = $_POST['bilangan'];

            echo "Bilangan genap dari 2 sampai 10:<br>";

            for ($i = 2; $i <= 10; $i += 2) {
                echo $i . "<br>";
            }
        }
        ?>
    </div>
</body>
</html>
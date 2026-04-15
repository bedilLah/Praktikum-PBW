<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 1</title>
</head>
<body>
    <div>
        <form method="post">
            <label for="">Roda Berapa??</label>
            <br>
            <input type="text" name="jumlah" id="">
            <Button type="submit">Submit</Button>
        </form>

        <?php
        if (isset($_POST['jumlah'])) {
        $jumlah = $_POST['jumlah'];

        
        $dua = "motor";
        $tiga = "becak";
        $empat = "mobil";

        switch($jumlah){
            case "2":
                echo $dua;
                break;
            case "3":
                echo $tiga;
                break;
            case "4":
                echo $empat;
                break;
            default:
                echo"Gada bg";
        }

        }
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PERTEMUAN 10</title>
</head>
<body>
    <div>
        <a href="tambah.php">klik disini untuk menambahkan data</a>
    </div>
    <?php
    require 'koneksi.php';

    $sql = "SELECT * FROM buku";
    $result = $conn->query($sql);

    if(!$result) {
        die("Query Gagal : " . $conn->error);
    }

    while ($row = $result->fetch_assoc()) {
    foreach ($row as $key => $value) {
        echo $key . " : " . htmlspecialchars($value) . "<br>";
    }

    echo '<a href="edit.php?id=' . $row['ID'] . '">Edit</a> | ';
    echo '<a href="hapus.php?id=' . $row['ID'] . '" onclick="return confirm(\'Yakin mau hapus?\')">Delete</a>';
        
    echo "<hr>";
    }
    $conn->
    close()  
    ?>
</body>
</html>
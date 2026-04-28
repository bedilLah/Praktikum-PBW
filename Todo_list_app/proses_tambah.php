<?php
    require 'koneksi.php';

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: tambah.php");
        exit;
    }

    $Title = $_POST['title'] ?? '';
    $Description = $_POST['description'] ?? '';
    $Deadline = $_POST['deadline'] ?? '';

    $stmt = $conn->prepare(
        "INSERT INTO tasks (title, description, deadline)
        VALUES (?,?,?)"
    );

    $stmt->bind_param("sss", $Title, $Description, $Deadline);

    if ($stmt->execute()) {
        echo "Data berhasil ditambahkan! <br>";
    } else {
        echo "Gagal: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
?>
<a href="index.php">kembali</a>
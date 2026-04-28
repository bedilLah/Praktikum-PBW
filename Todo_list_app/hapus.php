<?php
require 'koneksi.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id']; 

    $sql = "DELETE FROM tasks WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); 
        exit;
    } else {
        echo "Gagal menghapus data: " . $conn->error;
    }
} else {
    echo "ID tidak ditemukan!";
}

$conn->close();
?>
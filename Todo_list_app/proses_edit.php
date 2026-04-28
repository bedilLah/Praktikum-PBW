<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];
    $Title = $_POST['title'];
    $Description = $_POST['description'];
    $Status = $_POST['status'];

    $stmt = $conn->prepare(
        "UPDATE tasks SET 
            title = ?, 
            description = ?, 
            status = ?
         WHERE id = ?"
    );

    $stmt->bind_param("sssi", $Title, $Description, $Status, $id);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal update: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
<?php
    require 'koneksi.php';

    if (!isset($_GET['id'])) {
        die("ID tidak ditemukan");
    }

    $id = (int) $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        die("Data tidak ditemukan");
    }

    $data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U DOIN SOMETHIN?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h3 class="mb-4">Edit Tasknya king</h3>
            <form action="proses_edit.php" method="POST">
            <input type="hidden" name="id" value="<?= $data['id']; ?>">
            Title:
            <input type="text" name="title" value="<?= $data['title']; ?>" class="form-control"><br><br>
            Deskripsi:
            <input type="text" name="description" value="<?= $data['description']; ?>" class="form-control"><br><br>
            Status:
            <select name="status" class="form-control">
                <option value="pending" <?= $data['status'] == 'pending' ? 'selected' : '' ?>>Pending</option>
                <option value="done" <?= $data['status'] == 'done' ? 'selected' : '' ?>>Done</option>
            </select>
            <br><br>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
        </div>
    </div>
</body>
</html>
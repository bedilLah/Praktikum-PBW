<?php
require 'koneksi.php';

$result = $conn->query("SELECT * FROM tasks");

if (!$result) {
    die("Query error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUST DO IT!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>TO DO LIST</h1>
            <a href="tambah.php" class="btn btn-primary">+ Add Task</a>
        </div>
        <table class="table table-hover shadow">
            <thead class="table-dark">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Deadline</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php if ($result->num_rows > 0) { ?>
                <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['title']; ?></td>
                    <td><?= $row['description']; ?></td>
                    <td>
                        <?php if ($row['status'] == 'pending') { ?>
                            <span class="badge bg-warning text-dark">Pending</span>
                        <?php } else { ?>
                            <span class="badge bg-success">Done</span>
                        <?php } ?>
                    </td>
                    <td><?= $row['deadline']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapus.php?id=<?= $row['id']; ?>" 
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin mau hapus?')">
                        Delete
                        </a>
                    </td>
                </tr>
                <?php } ?>
            <?php } else { ?>
                <tr>
                    <td colspan="5" class="text-center">Belum ada data</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
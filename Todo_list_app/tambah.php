<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DO IT.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
    <div class="card shadow p-4">
        <h3 class="mb-4">Tambah Task</h3>
        <form action="proses_tambah.php" method="POST">
            <div class="mb-3">
                <label>Title</label> 
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Description</label>
                <input type="text" name="description" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Deadline</label>
                <input type="date" name="deadline" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
</body>
</html>
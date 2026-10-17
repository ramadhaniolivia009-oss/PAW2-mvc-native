<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Film</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Edit Film</h2>
        <form method="post" action="index.php?page=film&action=update">
            <input type="hidden" name="id" value="<?= $film['id'] ?>">
            <div class="form-group">
                <label>Judul Film</label>
                <input type="text" name="judul" value="<?= htmlspecialchars($film['judul']) ?>" required>
            </div>
            <div class="form-group">
                <label>Genre</label>
                <input type="text" name="genre" value="<?= htmlspecialchars($film['genre']) ?>" required>
            </div>
            <div class="form-group">
                <label>Tahun Rilis</label>
                <input type="number" name="tahun_rilis" value="<?= htmlspecialchars($film['tahun_rilis']) ?>" required>
            </div>
            <div class="form-group">
                <label>Sutradara</label>
                <input type="text" name="sutradara" value="<?= htmlspecialchars($film['sutradara']) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php?page=film" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
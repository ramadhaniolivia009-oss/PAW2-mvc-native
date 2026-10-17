<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Film</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Film</h2>
        <form method="post" action="index.php?page=film&action=store">
            <div class="form-group">
                <label>Judul Film</label>
                <input type="text" name="judul" required>
            </div>
            <div class="form-group">
                <label>Genre</label>
                <input type="text" name="genre" required>
            </div>
            <div class="form-group">
                <label>Tahun Rilis</label>
                <input type="number" name="tahun_rilis" required>
            </div>
            <div class="form-group">
                <label>Sutradara</label>
                <input type="text" name="sutradara" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="index.php?page=film" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>
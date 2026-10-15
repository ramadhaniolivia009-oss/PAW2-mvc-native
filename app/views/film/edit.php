<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Film</title>
</head>
<body>
    <h2>Edit Data Film</h2>
    <form method="post" action="index.php?page=film&action=update">
        <input type="hidden" name="id" value="<?= $film['id'] ?>">
        
        <label>Judul Film</label><br>
        <input type="text" name="judul" value="<?= htmlspecialchars($film['judul']) ?>" required><br><br>

        <label>Sutradara</label><br>
        <input type="text" name="sutradara" value="<?= htmlspecialchars($film['sutradara']) ?>" required><br><br>

        <label>Tahun Rilis</label><br>
        <input type="number" name="tahun" value="<?= htmlspecialchars($film['tahun']) ?>" required><br><br>

        <label>Genre</label><br>
        <input type="text" name="genre" value="<?= htmlspecialchars($film['genre']) ?>" required><br><br>

        <label>Rating (Contoh: 8.5)</label><br>
        <input type="number" step="0.1" name="rating" value="<?= htmlspecialchars($film['rating']) ?>" required><br><br>

        <button type="submit">Update</button>
        <a href="index.php?page=film">Kembali</a>
    </form>
</body>
</html>
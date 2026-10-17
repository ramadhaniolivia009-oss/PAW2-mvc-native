<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Film</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Film</h2>
        <a href="index.php?page=film&action=create" class="btn btn-primary">Tambah Film</a>
        <table>
            <thead>
                <tr>
                    <th>Judul Film</th>
                    <th>Genre</th>
                    <th>Tahun Rilis</th>
                    <th>Sutradara</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($film as $f): ?>
                <tr>
                    <td><?= htmlspecialchars($f['judul']) ?></td>
                    <td><?= htmlspecialchars($f['genre']) ?></td>
                    <td><?= htmlspecialchars($f['tahun']) ?></td>
                    <td><?= htmlspecialchars($f['sutradara']) ?></td>
                    <td>
                        <a href="index.php?page=film&action=edit&id=<?= $f['id'] ?>" class="btn btn-edit">Edit</a>
                        <form method="post" action="index.php?page=film&action=delete" style="display:inline" onsubmit="return confirm('Hapus data film ini?')">
                            <input type="hidden" name="id" value="<?= $f['id'] ?>">
                            <button type="submit" class="btn btn-delete">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
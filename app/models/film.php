<?php
class Film
{
    public function __construct(private PDO $db) {}

    public function getAll(): array
    {
        $stmt = $this->db->query(
            'SELECT id, judul, sutradara, tahun, genre, rating FROM film ORDER BY judul'
        );
        return $stmt->fetchAll();
    }

    public function findById(int $id): array | false
    {
        $stmt = $this->db->prepare(
            'SELECT id, judul, sutradara, tahun, genre, rating FROM film WHERE id = :id'
        );
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }

    public function insert(array $data): bool
    {
        $sql = 'INSERT INTO film (judul, sutradara, tahun, genre, rating) VALUES (:judul, :sutradara, :tahun, :genre, :rating)';
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':judul' => $data['judul'],
            ':sutradara' => $data['sutradara'],
            ':tahun' => $data['tahun'],
            ':genre' => $data['genre'],
            ':rating' => $data['rating']
        ]);
    }

    public function update(int $id, array $data): bool
    {
        $sql = 'UPDATE film SET judul = :judul, sutradara = :sutradara, tahun = :tahun, genre = :genre, rating = :rating WHERE id = :id';
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'id' => $id,
            ':judul' => $data['judul'],
            ':sutradara' => $data['sutradara'],
            ':tahun' => $data['tahun'],
            ':genre' => $data['genre'],
            ':rating' => $data['rating']
        ]);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare(
            'DELETE FROM film WHERE id = :id'
        );
        return $stmt->execute(['id' => $id]);
    }
}
?>
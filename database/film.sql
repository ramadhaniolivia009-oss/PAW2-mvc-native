CREATE DATABASE IF NOT EXISTS data_film
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE data_film;

CREATE TABLE IF NOT EXISTS film (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(150) NOT NULL,
    sutradara VARCHAR(100) NOT NULL,
    tahun INT NOT NULL,
    genre VARCHAR(50) NOT NULL,
    rating DECIMAL(3,1) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
INSERT INTO film (judul, sutradara, tahun, genre, rating) VALUES
('Interstellar', 'Christopher Nolan', 2014, 'Sci-Fi', 8.6),
('Laskar Pelangi', 'Riri Riza', 2008, 'Drama', 7.9),
('The Avengers', 'Joss Whedon', 2012, 'Action', 8.0),
('Pengabdi Setan', 'Joko Anwar', 2017, 'horor', 6.5);

# MVC PHP Native - Data Film

Aplikasi CRUD sederhana untuk mempelajari pola Model-View-Controller pada PHP Native dengan tema pengelolaan Data Film.

## Kebutuhan
- PHP 8.0 atau lebih baru
- MySQL/MariaDB
- Web server lokal seperti XAMPP atau Laragon
- Git

## Instalasi
1. Clone atau salin project ke folder web server (`htdocs`).
2. Import file database `database/film.sql` (atau jalankan skrip SQL tabel `film`).
3. Sesuaikan konfigurasi koneksi database pada file `config/database.php`.
4. Buka browser dan akses `http://localhost/mvc-native/public/index.php`.

## Struktur MVC
- `app/models/` : Akses dan operasi data film (`Film.php`).
- `app/controllers/` : Alur request dan pemanggilan Model/View (`FilmController.php`).
- `app/views/film/` : Tampilan HTML (`index.php`, `create.php`, `edit.php`).
- `config/` : Konfigurasi koneksi database PDO (`database.php`).
- `database/` : Skema dan data awal SQL tabel film.
- `public/` : Entry point dan router aplikasi (`index.php`).

## Fitur
- Menampilkan daftar film (Judul, Sutradara, Tahun, Genre, Rating)
- Menambah data film baru
- Mengubah data film berdasarkan ID
- Menghapus data film berdasarkan ID

## Histori Git
Gunakan `git log --oneline --graph --decorate` untuk melihat tahapan pengembangan.
-- =========================================================
-- Database: wisata_jabar
-- Project : Wisata Alam Jawa Barat (Tugas KK-RPL)
-- =========================================================

CREATE DATABASE IF NOT EXISTS wisata_jabar;
USE wisata_jabar;

-- ---------------------------------------------------------
-- Tabel kategori
-- ---------------------------------------------------------
CREATE TABLE kategori (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    icon VARCHAR(50) DEFAULT 'tree'
) ENGINE=InnoDB;

INSERT INTO kategori (nama, icon) VALUES
('Gunung', 'bi-triangle-fill'),
('Kawah', 'bi-fire'),
('Air Terjun', 'bi-droplet-fill'),
('Pantai', 'bi-water'),
('Danau / Situ', 'bi-moon-stars-fill'),
('Hutan / Taman', 'bi-tree-fill');

-- ---------------------------------------------------------
-- Tabel users (untuk login admin & user biasa)
-- ---------------------------------------------------------
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','user') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

-- CATATAN PENTING soal akun admin:
-- Jangan masukkan password hash manual di sini (riskan salah/tidak valid).
-- Cara bikin akun admin yang BENAR:
--   1. Jalankan aplikasi, buka halaman /auth/register, daftar akun biasa.
--   2. Buka tabel `users` di phpMyAdmin, cari akun yang baru didaftarkan,
--      ubah kolom `role` dari 'user' menjadi 'admin'.
--   3. Login ulang -> otomatis masuk ke Admin Dashboard (CRUD destinasi).

-- ---------------------------------------------------------
-- Tabel destinasi
-- ---------------------------------------------------------
CREATE TABLE destinasi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(150) NOT NULL,
    kategori_id INT,
    kabupaten VARCHAR(100),
    deskripsi TEXT,
    harga_tiket VARCHAR(50) DEFAULT 'Gratis',
    jam_buka VARCHAR(100) DEFAULT '08.00 - 17.00',
    foto VARCHAR(255),
    maps_query VARCHAR(255),
    is_deleted TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (kategori_id) REFERENCES kategori(id)
) ENGINE=InnoDB;

INSERT INTO destinasi (nama, kategori_id, kabupaten, deskripsi, harga_tiket, foto, maps_query) VALUES
('Kawah Putih', 2, 'Bandung', 'Danau kawah vulkanik berwarna putih kehijauan di lereng Gunung Patuha, salah satu ikon wisata Bandung Selatan.', 'Rp 30.000', 'https://picsum.photos/seed/kawahputih/700/500', 'Kawah Putih Bandung'),
('Situ Patenggang', 5, 'Bandung', 'Danau alami dikelilingi kebun teh dengan legenda Batu Cinta, cocok untuk naik perahu dan menikmati udara sejuk.', 'Rp 25.000', 'https://picsum.photos/seed/situpatenggang/700/500', 'Situ Patenggang Bandung'),
('Gunung Papandayan', 1, 'Garut', 'Gunung api aktif dengan jalur pendakian ramah pemula, kawah belerang, dan hamparan Tegal Alun yang ikonik.', 'Rp 20.000', 'https://picsum.photos/seed/papandayan/700/500', 'Gunung Papandayan Garut'),
('Tangkuban Perahu', 2, 'Bandung Barat', 'Gunung berapi legendaris berbentuk perahu terbalik dengan kawah utama Kawah Ratu yang bisa dilihat dari dekat.', 'Rp 35.000', 'https://picsum.photos/seed/tangkubanperahu/700/500', 'Tangkuban Perahu Bandung Barat'),
('Green Canyon (Cukang Taneuh)', 3, 'Pangandaran', 'Ngarai hijau dengan sungai jernih yang diapit tebing batu, dijelajahi menggunakan perahu lalu body rafting.', 'Rp 150.000', 'https://picsum.photos/seed/greencanyon/700/500', 'Green Canyon Pangandaran'),
('Curug Cimahi (Pelangi)', 3, 'Cimahi', 'Air terjun setinggi 87 meter yang dihiasi lampu warna-warni di malam hari, terletak di kawasan Kota Bunga.', 'Rp 25.000', 'https://picsum.photos/seed/curugcimahi/700/500', 'Curug Cimahi Pelangi'),
('Pantai Pangandaran', 4, 'Pangandaran', 'Pantai populer dengan dua sisi: ombak tenang di barat dan ombak besar di timur, lengkap dengan Cagar Alam.', 'Rp 20.000', 'https://picsum.photos/seed/pangandaran/700/500', 'Pantai Pangandaran'),
('Ranca Upas', 6, 'Bandung', 'Area camping ground dan hutan pinus yang juga menjadi penangkaran rusa, favorit untuk kemah keluarga.', 'Rp 25.000', 'https://picsum.photos/seed/rancaupas/700/500', 'Ranca Upas Bandung'),
('Gunung Guntur', 1, 'Garut', 'Gunung dengan jalur pendakian terjal namun pemandangan savana dan sungai jernih di kaki gunungnya.', 'Rp 15.000', 'https://picsum.photos/seed/gununggguntur/700/500', 'Gunung Guntur Garut'),
('Situ Cileunca', 5, 'Bandung', 'Danau buatan era kolonial dikelilingi perkebunan teh Pangalengan, cocok untuk outbound dan river tubing.', 'Rp 20.000', 'https://picsum.photos/seed/situcileunca/700/500', 'Situ Cileunca Pangalengan');

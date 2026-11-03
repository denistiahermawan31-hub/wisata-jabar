# WisataJabar — Wisata Alam Jawa Barat
Tugas KK-RPL — Aplikasi Fullstack dengan konsep **MVC PHP Native**

## 🧱 Stack
- Front-End: HTML, CSS, JavaScript, Bootstrap 5 (CDN)
- Back-End: PHP Native (MVC: Model-View-Controller)
- Database: MySQL via phpMyAdmin
- Server lokal: Laragon

## 📁 Struktur Folder
```
WisataJabar/
├── app/
│   ├── core/          -> Router.php, Controller.php, Database.php
│   ├── controllers/   -> HomeController, DestinasiController, AuthController, AdminController
│   ├── models/        -> Destinasi.php, Kategori.php, User.php
│   └── views/         -> layouts/, home/, destinasi/, auth/, admin/
├── config/config.php  -> koneksi database & helper (base_url, asset, dll)
├── database/wisata_jabar.sql -> struktur tabel + data dummy 10 destinasi
├── public/            -> index.php (entry point) + assets (css, js, img)
├── .htaccess          -> redirect root ke /public
└── README.md
```

## Cara Install di Laragon

1. **Copy folder** `WisataJabar` ke `C:\laragon\www\`
2. **Jalankan Laragon**, klik Start All (Apache + MySQL)
3. **Import Database**
   - Buka `http://localhost/phpmyadmin`
   - Buat database baru atau langsung import file `database/wisata_jabar.sql`
     (klik tab *Import* → pilih file → Go)
4. **Akses aplikasi** lewat salah satu cara:
   - `http://localhost/WisataJabar/public/`
   - **Atau** pakai Laragon Pretty URL: klik kanan Laragon tray icon → `www` →
     klik kanan folder `WisataJabar` → `Auto Virtual Host` → akses
     `http://wisatajabar.test/public/`
5. Cek `config/config.php` kalau user/password MySQL kamu beda dari default
   Laragon (default: user `root`, password kosong).

## Bikin Akun Admin
Supaya aman, hash password admin TIDAK ditanam manual di SQL. Caranya:
1. Buka `/auth/register`, daftar akun biasa (nama, email, password)
2. Buka tabel `users` di phpMyAdmin → cari akun itu → ubah kolom `role`
   dari `user` jadi `admin`
3. Login lagi → otomatis diarahkan ke **Admin Dashboard** (`/admin`)
   untuk CRUD data destinasi

## Fitur
- **Publik**: lihat daftar destinasi, search by nama/kabupaten, filter kategori,
  halaman detail (galeri foto + info + Google Maps)
- **Auth**: register, login, logout (password di-hash pakai `password_hash()`)
- **Admin**: dashboard tabel, tambah/edit/hapus (soft delete) destinasi,
  pulihkan data yang terhapus

## Routing (konsep MVC)
Semua request masuk lewat `public/index.php`, di-parse oleh `Router.php`
berdasarkan pola `controller/method/param`. Contoh:
| URL                         | Controller@Method                  |
|------------------------------|-------------------------------------|
| `/`                          | `HomeController@index`              |
| `/destinasi/detail/3`        | `DestinasiController@detail(3)`     |
| `/auth/login`                | `AuthController@login`              |
| `/admin`                     | `AdminController@index`             |
| `/admin/edit/3`              | `AdminController@edit(3)`           |

## Pembagian Tugas (contoh, sesuaikan kelompok)
- **Database & Model**: `database/wisata_jabar.sql`, `app/models/`
- **Backend/Controller**: `app/controllers/`, `app/core/`
- **Frontend/View**: `app/views/`, `public/assets/`

## Ide Pengembangan Lanjutan (opsional, kalau waktu masih ada)
- Upload foto langsung (bukan cuma URL)
- Rating & komentar dari user
- Halaman khusus per kabupaten
- Pagination di halaman beranda

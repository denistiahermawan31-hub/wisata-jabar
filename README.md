# 🏞️ WisataJabar — Wisata Alam Jawa Barat

![PHP Native](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap 5](https://img.shields.io/badge/Bootstrap_5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![MVC Architecture](https://img.shields.io/badge/Architecture-MVC_Pattern-orange?style=for-the-badge)

> **Tugas KK-RPL:** Aplikasi *Fullstack* berbasis Web untuk eksplorasi wisata alam Jawa Barat dengan arsitektur **MVC PHP Native**.

---

## Tech Stack & Requirements

| Layer | Teknologi / Tools |
| :--- | :--- |
| **Front-End** | HTML5, CSS3, JavaScript, Bootstrap 5 (CDN) |
| **Back-End** | PHP Native (MVC: Model-View-Controller) |
| **Database** | MySQL via phpMyAdmin |
| **Server Lokal** | Laragon / XAMPP |

---

## 📂 Struktur Folder Project

<details>
<summary>📂 Klik untuk melihat hirarki direktori project</summary>

```text
WisataJabar/
├── app/
│   ├── core/           -> Router.php, Controller.php, Database.php
│   ├── controllers/    -> HomeController, DestinasiController, AuthController, AdminController
│   ├── models/         -> Destinasi.php, Kategori.php, User.php
│   └── views/          -> layouts/, home/, destinasi/, auth/, admin/
├── config/
│   └── config.php      -> Koneksi database & helper (base_url, asset, dll)
├── database/
│   └── wisata_jabar.sql -> Struktur tabel + data dummy 10 destinasi
├── public/             -> Entry point (index.php) + assets (css, js, img)
├── .htaccess           -> Redirect request ke folder /public
└── README.md

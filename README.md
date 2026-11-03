<div align="center">

  # WisataJabar — Wisata Alam Jawa Barat
  **Aplikasi Fullstack Web Eksplorasi Wisata Alam berbasis MVC PHP Native**

  [![PHP Native](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
  [![Bootstrap 5](https://img.shields.io/badge/Bootstrap_5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
  [![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
  [![Laragon](https://img.shields.io/badge/Laragon-0E83CD?style=for-the-badge&logo=laragon&logoColor=white)](https://laragon.org/)
  [![Architecture](https://img.shields.io/badge/Architecture-MVC_Pattern-orange?style=for-the-badge)](#)

</div>

---

## Deskripsi Project

**WisataJabar** adalah tugas besar mata pelajaran **KK-RPL**. Aplikasi ini dirancang untuk memudahkan pengguna dalam menjelajahi keindahan wisata alam di Jawa Barat. Dibangun menggunakan arsitektur **MVC (Model-View-Controller)** murni dengan **PHP Native** untuk memahami alur kerja backend modern secara mendalam.

---

## Tech Stack & Requirements

| Layer | Teknologi / Tools | Deskripsi |
| :--- | :--- | :--- |
| **Front-End** | <img src="https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white"/> <img src="https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white"/> <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black"/> <img src="https://img.shields.io/badge/Bootstrap_5-7952B3?style=flat&logo=bootstrap&logoColor=white"/> | Layout responsif & komponen UI |
| **Back-End** | <img src="https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white"/> | Arsitektur MVC Native tanpa framework |
| **Database** | <img src="https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white"/> | Manajemen data relational via phpMyAdmin |
| **Environment**| <img src="https://img.shields.io/badge/Laragon-0E83CD?style=flat&logo=laragon&logoColor=white"/> | Local Web Server (Apache + MySQL) |

---

## Struktur Folder Project

<details>
<summary><b>Klik untuk melihat struktur direktori lengkap</b></summary>

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

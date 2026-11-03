// =========================================================
// script.js — interaksi kecil di sisi client
// =========================================================
document.addEventListener('DOMContentLoaded', function () {
  // Navbar berubah warna saat scroll
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 40) {
        navbar.classList.add('shadow-sm');
      } else {
        navbar.classList.remove('shadow-sm');
      }
    });
  }

  // Konfirmasi sebelum hapus data di admin
  document.querySelectorAll('.btn-delete-confirm').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      if (!confirm('Yakin mau hapus destinasi ini?')) {
        e.preventDefault();
      }
    });
  });

  // Auto-submit form filter kategori saat dropdown diubah
  const filterKategori = document.getElementById('filterKategori');
  if (filterKategori) {
    filterKategori.addEventListener('change', function () {
      filterKategori.form.submit();
    });
  }
});

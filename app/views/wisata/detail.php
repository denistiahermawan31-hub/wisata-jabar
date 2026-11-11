<?php require_once __DIR__ . '/../templates/header.php'; ?>

<main class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <!-- Tombol Kembali -->
            <a href="http://localhost/wisata-jabar/public/" class="btn btn-secondary mb-3">&larr; Kembali ke Beranda</a>
            
            <!-- Judul & Lokasi -->
            <h1 class="fw-bold mb-2"><?= htmlspecialchars($data['nama'] ?? 'Detail Wisata'); ?></h1>
            <p class="text-muted"><i class="fa-solid fa-location-dot"></i> <?= htmlspecialchars($data['lokasi'] ?? 'Jawa Barat'); ?></p>
            
            <!-- Gambar Utama -->
            <img src="<?= htmlspecialchars($data['gambar'] ?? 'https://via.placeholder.com/800x400'); ?>" class="img-fluid rounded shadow-sm mb-4" alt="Gambar Wisata">
            
            <!-- Harga & Rating -->
            <div class="d-flex justify-content-between align-items-center bg-light p-3 rounded mb-4">
                <span class="fs-5 fw-bold text-success">Harga Tiket: <?= htmlspecialchars($data['harga'] ?? 'Rp 20.000'); ?></span>
                <span class="badge bg-warning text-dark fs-6"><i class="fa-solid fa-star"></i> <?= htmlspecialchars($data['rating'] ?? '4.8'); ?></span>
            </div>
            
            <!-- Deskripsi Lengkap -->
            <h4 class="fw-bold mb-3">Tentang Destinasi Ini</h4>
            <p class="fs-6 lh-lg text-secondary">
                <?= nl2br(htmlspecialchars($data['deskripsi'] ?? 'Informasi lengkap mengenai destinasi wisata ini akan segera diperbarui. Nikmati keindahan alam dan suasana khas Jawa Barat yang menenangkan.')); ?>
            </p>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>
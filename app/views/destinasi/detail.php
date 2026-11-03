<div class="container py-4">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= base_url('') ?>">Beranda</a></li>
      <li class="breadcrumb-item active"><?= htmlspecialchars($d['nama']) ?></li>
    </ol>
  </nav>

  <div class="detail-hero mb-4">
    <img src="<?= htmlspecialchars($d['foto']) ?>" alt="<?= htmlspecialchars($d['nama']) ?>">
  </div>

  <div class="row g-4">
    <div class="col-lg-8">
      <span class="badge badge-kategori mb-2"><?= htmlspecialchars($d['kategori_nama'] ?? '-') ?></span>
      <h2><?= htmlspecialchars($d['nama']) ?></h2>
      <p class="text-muted"><i class="bi bi-geo-alt-fill"></i> <?= htmlspecialchars($d['kabupaten']) ?>, Jawa Barat</p>
      <p><?= nl2br(htmlspecialchars($d['deskripsi'])) ?></p>

      <h5 class="mt-4">Lokasi</h5>
      <iframe class="maps-frame"
        src="https://www.google.com/maps?q=<?= urlencode($d['maps_query']) ?>&output=embed"
        loading="lazy"></iframe>
    </div>

    <div class="col-lg-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Info Wisata</h5>
          <ul class="list-unstyled small">
            <li class="mb-2"><i class="bi bi-ticket-perforated text-success"></i> <strong>Harga Tiket:</strong><br><?= htmlspecialchars($d['harga_tiket']) ?></li>
            <li class="mb-2"><i class="bi bi-clock text-success"></i> <strong>Jam Buka:</strong><br><?= htmlspecialchars($d['jam_buka']) ?></li>
            <li class="mb-2"><i class="bi bi-signpost-2 text-success"></i> <strong>Kabupaten/Kota:</strong><br><?= htmlspecialchars($d['kabupaten']) ?></li>
          </ul>
          <a href="<?= base_url('') ?>" class="btn btn-outline-success w-100 mt-2"><i class="bi bi-arrow-left"></i> Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>

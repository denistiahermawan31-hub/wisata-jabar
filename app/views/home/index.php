<section class="hero">
  <div class="container text-center">
    <h1 class="display-5">Jelajahi Keindahan Alam Jawa Barat</h1>
    <p class="lead mb-4">Gunung, kawah, curug, pantai, sampai situ — semua destinasi wisata alam terbaik ada di sini.</p>

    <form action="<?= base_url('') ?>" method="GET" class="search-box row g-2 justify-content-center text-start">
      <div class="col-12 col-md-5">
        <label class="form-label text-dark small mb-1">Cari destinasi</label>
        <input type="text" name="q" class="form-control" placeholder="Nama destinasi atau kabupaten..." value="<?= htmlspecialchars($keyword) ?>">
      </div>
      <div class="col-8 col-md-4">
        <label class="form-label text-dark small mb-1">Kategori</label>
        <select name="kategori" class="form-select">
          <option value="0">Semua Kategori</option>
          <?php foreach ($kategori as $k): ?>
            <option value="<?= $k['id'] ?>" <?= $kategoriId == $k['id'] ? 'selected' : '' ?>><?= htmlspecialchars($k['nama']) ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="col-4 col-md-3 d-flex align-items-end">
        <button type="submit" class="btn btn-success w-100"><i class="bi bi-search"></i> Cari</button>
      </div>
    </form>
  </div>
</section>

<div class="container pb-5">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">
      <?= $keyword || $kategoriId ? 'Hasil Pencarian' : 'Destinasi Pilihan' ?>
      <span class="text-muted fs-6">(<?= count($destinasi) ?> tempat)</span>
    </h4>
    <?php if ($keyword || $kategoriId): ?>
      <a href="<?= base_url('') ?>" class="btn btn-sm btn-outline-secondary">Reset filter</a>
    <?php endif; ?>
  </div>

  <?php if (empty($destinasi)): ?>
    <div class="alert alert-warning">Belum ada destinasi yang cocok dengan pencarianmu.</div>
  <?php else: ?>
    <div class="row g-4">
      <?php foreach ($destinasi as $d): ?>
        <div class="col-sm-6 col-lg-4">
          <div class="card card-destinasi">
            <img src="<?= htmlspecialchars($d['foto']) ?>" alt="<?= htmlspecialchars($d['nama']) ?>">
            <div class="card-body">
              <span class="badge badge-kategori mb-2"><i class="bi <?= htmlspecialchars($d['kategori_icon'] ?? 'bi-geo-alt') ?>"></i> <?= htmlspecialchars($d['kategori_nama'] ?? '-') ?></span>
              <h5 class="card-title"><?= htmlspecialchars($d['nama']) ?></h5>
              <p class="text-muted small mb-2"><i class="bi bi-geo-alt-fill"></i> <?= htmlspecialchars($d['kabupaten']) ?></p>
              <p class="card-text small text-truncate"><?= htmlspecialchars($d['deskripsi']) ?></p>
              <div class="d-flex justify-content-between align-items-center mt-3">
                <strong class="text-success"><?= htmlspecialchars($d['harga_tiket']) ?></strong>
                <a href="<?= base_url('destinasi/detail/' . $d['id']) ?>" class="btn btn-sm btn-success">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</div>

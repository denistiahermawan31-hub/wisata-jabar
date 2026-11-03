<?php $isEdit = $d !== null; ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 admin-sidebar py-4 px-3">
      <h6 class="text-uppercase text-light-emphasis small mb-3">Admin Panel</h6>
      <a href="<?= base_url('admin') ?>" class="d-block mb-2"><i class="bi bi-grid"></i> Dashboard</a>
      <a href="<?= base_url('admin/create') ?>" class="d-block mb-2 active"><i class="bi bi-plus-circle"></i> Tambah Destinasi</a>
      <a href="<?= base_url('') ?>" class="d-block mb-2"><i class="bi bi-house"></i> Lihat Website</a>
    </div>

    <div class="col-md-10 py-4">
      <h3 class="mb-4"><?= $isEdit ? 'Edit Destinasi' : 'Tambah Destinasi Baru' ?></h3>

      <form method="POST"
            action="<?= $isEdit ? base_url('admin/update/' . $d['id']) : base_url('admin/store') ?>"
            class="bg-white p-4 rounded shadow-sm">

        <div class="row g-3">
          <div class="col-md-8">
            <label class="form-label">Nama Destinasi</label>
            <input type="text" name="nama" class="form-control" required value="<?= htmlspecialchars($d['nama'] ?? '') ?>">
          </div>
          <div class="col-md-4">
            <label class="form-label">Kategori</label>
            <select name="kategori_id" class="form-select" required>
              <option value="">-- Pilih Kategori --</option>
              <?php foreach ($kategori as $k): ?>
                <option value="<?= $k['id'] ?>" <?= (isset($d['kategori_id']) && $d['kategori_id'] == $k['id']) ? 'selected' : '' ?>>
                  <?= htmlspecialchars($k['nama']) ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="col-md-6">
            <label class="form-label">Kabupaten/Kota</label>
            <input type="text" name="kabupaten" class="form-control" required value="<?= htmlspecialchars($d['kabupaten'] ?? '') ?>">
          </div>
          <div class="col-md-3">
            <label class="form-label">Harga Tiket</label>
            <input type="text" name="harga_tiket" class="form-control" value="<?= htmlspecialchars($d['harga_tiket'] ?? 'Gratis') ?>">
          </div>
          <div class="col-md-3">
            <label class="form-label">Jam Buka</label>
            <input type="text" name="jam_buka" class="form-control" value="<?= htmlspecialchars($d['jam_buka'] ?? '08.00 - 17.00') ?>">
          </div>

          <div class="col-12">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="form-control" required><?= htmlspecialchars($d['deskripsi'] ?? '') ?></textarea>
          </div>

          <div class="col-md-6">
            <label class="form-label">URL Foto</label>
            <input type="text" name="foto" class="form-control" placeholder="https://..." value="<?= htmlspecialchars($d['foto'] ?? '') ?>">
            <div class="form-text">Bisa pakai link gambar bebas, atau https://picsum.photos/seed/nama/700/500 untuk placeholder.</div>
          </div>
          <div class="col-md-6">
            <label class="form-label">Kata kunci lokasi (untuk Google Maps)</label>
            <input type="text" name="maps_query" class="form-control" placeholder="Contoh: Kawah Putih Bandung" value="<?= htmlspecialchars($d['maps_query'] ?? '') ?>">
          </div>
        </div>

        <div class="mt-4 d-flex gap-2">
          <button type="submit" class="btn btn-success"><i class="bi bi-check-lg"></i> Simpan</button>
          <a href="<?= base_url('admin') ?>" class="btn btn-outline-secondary">Batal</a>
        </div>
      </form>
    </div>
  </div>
</div>

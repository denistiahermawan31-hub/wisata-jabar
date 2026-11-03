<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 admin-sidebar py-4 px-3">
      <h6 class="text-uppercase text-light-emphasis small mb-3">Admin Panel</h6>
      <a href="<?= base_url('admin') ?>" class="d-block mb-2 active"><i class="bi bi-grid"></i> Dashboard</a>
      <a href="<?= base_url('admin/create') ?>" class="d-block mb-2"><i class="bi bi-plus-circle"></i> Tambah Destinasi</a>
      <a href="<?= base_url('') ?>" class="d-block mb-2"><i class="bi bi-house"></i> Lihat Website</a>
    </div>

    <div class="col-md-10 py-4">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Kelola Destinasi Wisata</h3>
        <a href="<?= base_url('admin/create') ?>" class="btn btn-success"><i class="bi bi-plus-lg"></i> Tambah Destinasi</a>
      </div>

      <div class="table-responsive bg-white rounded shadow-sm p-3">
        <table class="table table-hover align-middle">
          <thead>
            <tr>
              <th>#</th>
              <th>Foto</th>
              <th>Nama</th>
              <th>Kategori</th>
              <th>Kabupaten</th>
              <th>Status</th>
              <th class="text-end">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($destinasi as $i => $d): ?>
              <tr class="<?= $d['is_deleted'] ? 'table-secondary' : '' ?>">
                <td><?= $i + 1 ?></td>
                <td><img src="<?= htmlspecialchars($d['foto']) ?>" width="60" height="45" style="object-fit:cover;border-radius:6px;"></td>
                <td><?= htmlspecialchars($d['nama']) ?></td>
                <td><?= htmlspecialchars($d['kategori_nama'] ?? '-') ?></td>
                <td><?= htmlspecialchars($d['kabupaten']) ?></td>
                <td>
                  <?php if ($d['is_deleted']): ?>
                    <span class="badge bg-secondary">Terhapus</span>
                  <?php else: ?>
                    <span class="badge bg-success">Aktif</span>
                  <?php endif; ?>
                </td>
                <td class="text-end">
                  <a href="<?= base_url('destinasi/detail/' . $d['id']) ?>" class="btn btn-sm btn-outline-secondary" title="Lihat"><i class="bi bi-eye"></i></a>
                  <a href="<?= base_url('admin/edit/' . $d['id']) ?>" class="btn btn-sm btn-outline-primary" title="Edit"><i class="bi bi-pencil"></i></a>
                  <?php if ($d['is_deleted']): ?>
                    <a href="<?= base_url('admin/restore/' . $d['id']) ?>" class="btn btn-sm btn-outline-success" title="Pulihkan"><i class="bi bi-arrow-counterclockwise"></i></a>
                  <?php else: ?>
                    <a href="<?= base_url('admin/delete/' . $d['id']) ?>" class="btn btn-sm btn-outline-danger btn-delete-confirm" title="Hapus"><i class="bi bi-trash"></i></a>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="card auth-card">
    <div class="card-body p-4">
      <h3 class="text-center mb-4"><i class="bi bi-person-plus text-success"></i> Daftar Akun</h3>

      <?php if (!empty($error)): ?>
        <div class="alert alert-danger py-2 small"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      <form method="POST" action="<?= base_url('auth/register') ?>">
        <div class="mb-3">
          <label class="form-label">Nama Lengkap</label>
          <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" required minlength="6">
        </div>
        <button type="submit" class="btn btn-success w-100">Daftar</button>
      </form>

      <p class="text-center small mt-3 mb-0">
        Sudah punya akun? <a href="<?= base_url('auth/login') ?>">Login di sini</a>
      </p>
    </div>
  </div>
</div>

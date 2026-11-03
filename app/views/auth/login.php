<div class="container">
  <div class="card auth-card">
    <div class="card-body p-4">
      <h3 class="text-center mb-4"><i class="bi bi-box-arrow-in-right text-success"></i> Login</h3>

      <?php if (!empty($error)): ?>
        <div class="alert alert-danger py-2 small"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>

      <form method="POST" action="<?= base_url('auth/login') ?>">
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Login</button>
      </form>

      <p class="text-center small mt-3 mb-0">
        Belum punya akun? <a href="<?= base_url('auth/register') ?>">Daftar di sini</a>
      </p>
    </div>
  </div>
</div>

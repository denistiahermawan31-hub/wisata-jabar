<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Wisata Jabar' ?> | Wisata Alam Jawa Barat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="<?= asset('css/style.css') ?>" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#1b4332;">
  <div class="container">
    <a class="navbar-brand" href="<?= base_url('') ?>"><i class="bi bi-tree-fill"></i> WisataJabar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMain">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item"><a class="nav-link" href="<?= base_url('') ?>">Beranda</a></li>
        <?php if (is_admin()): ?>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('admin') ?>"><i class="bi bi-speedometer2"></i> Dashboard Admin</a></li>
        <?php endif; ?>
        <?php if (is_logged_in()): ?>
          <li class="nav-item"><span class="nav-link text-light">Halo, <?= htmlspecialchars($_SESSION['nama']) ?></span></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('auth/logout') ?>"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('auth/login') ?>">Login</a></li>
          <li class="nav-item"><a class="btn btn-sm btn-light ms-2" href="<?= base_url('auth/register') ?>">Daftar</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekrutmen BLUD Kebumen 2026</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Rekrutmen BLUD Kebumen</a>
            <div class="ms-auto">
                <?php if (auth()->loggedIn()): ?>
                    <a href="<?= site_url('dashboard') ?>" class="btn btn-light me-2">Dashboard</a>
                    <a href="<?= site_url('logout') ?>" class="btn btn-outline-light">Logout</a>
                <?php else: ?>
                    <a href="<?= site_url('login') ?>" class="btn btn-outline-light me-2">Masuk</a>
                    <a href="<?= site_url('register') ?>" class="btn btn-warning fw-bold">Daftar Akun</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container text-center py-5">
        <h1 class="display-5 fw-bold text-dark mb-3">Penerimaan Pegawai BLUD Kebumen 2026</h1>
        <p class="lead text-muted mb-4">Sistem Pendaftaran Resmi Tenaga Non-ASN Badan Layanan Umum Daerah Kabupaten Kebumen.</p>

        <?php if (! auth()->loggedIn()): ?>
            <a href="<?= site_url('register') ?>" class="btn btn-primary btn-lg px-4 me-2">Buat Akun Pendaftar</a>
            <a href="<?= site_url('login') ?>" class="btn btn-outline-secondary btn-lg px-4">Masuk ke Sistem</a>
        <?php endif; ?>
    </div>

</body>

</html>
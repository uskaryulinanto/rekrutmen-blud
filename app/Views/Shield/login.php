<?= $this->extend('layouts/auth') ?>

<?= $this->section('title') ?>Masuk Akun<?= $this->endSection() ?>

<?= $this->section('main') ?>

<h5 class="fw-bold mb-3 text-center">Silakan Masuk</h5>

<!-- Alert Notifikasi Error / Sukses -->
<?php if (session('error') !== null) : ?>
    <div class="alert alert-danger text-small role=" alert"><?= session('error') ?></div>
<?php elseif (session('errors') !== null) : ?>
    <div class="alert alert-danger text-small" role="alert">
        <?php if (is_array(session('errors'))) : ?>
            <?php foreach (session('errors') as $error) : ?>
                <?= $error ?><br>
            <?php endforeach ?>
        <?php else : ?>
            <?= session('errors') ?>
        <?php endif ?>
    </div>
<?php endif ?>

<?php if (session('message') !== null) : ?>
    <div class="alert alert-success text-small" role="alert"><?= session('message') ?></div>
<?php endif ?>

<form action="<?= url_to('login') ?>" method="post">
    <?= csrf_field() ?>

    <!-- Email Input -->
    <div class="mb-3">
        <label for="email" class="form-label small font-weight-bold">Alamat Email</label>
        <div class="input-group">
            <span class="input-group-text bg-light"><i class="fa-solid fa-envelope text-muted"></i></span>
            <input type="email" class="form-control" name="email" id="email" autocomplete="email" placeholder="nama@email.com" value="<?= old('email') ?>" required>
        </div>
    </div>

    <!-- Password Input -->
    <div class="mb-3">
        <div class="d-flex justify-content-between align-items-center mb-1">
            <label for="password" class="form-label small font-weight-bold mb-0">Password</label>
            <?php if (setting('Auth.allowMagicLinkLogins')) : ?>
                <a href="<?= url_to('magic-link') ?>" class="small text-decoration-none">Lupa Password?</a>
            <?php endif ?>
        </div>
        <div class="input-group">
            <span class="input-group-text bg-light"><i class="fa-solid fa-lock text-muted"></i></span>
            <input type="password" class="form-control" name="password" id="password" autocomplete="current-password" placeholder="••••••••" required>
        </div>
    </div>

    <!-- Remember me -->
    <?php if (setting('Auth.sessionConfig')['allowRemembering']): ?>
        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php if (old('remember')): ?> checked<?php endif ?>>
            <label class="form-check-label small" for="remember">
                Ingat Saya di Perangkat Ini
            </label>
        </div>
    <?php endif; ?>

    <!-- Submit Button -->
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary rounded-3">Masuk Sekarang</button>
    </div>
</form>

<hr class="my-4 text-muted">

<p class="text-center small mb-0">
    Belum punya akun? <a href="<?= url_to('register') ?>" class="fw-bold text-decoration-none">Daftar Akun Baru</a>
</p>

<?= $this->endSection() ?>
<?= $this->extend('layouts/auth') ?>

<?= $this->section('title') ?>Daftar Akun Baru<?= $this->endSection() ?>

<?= $this->section('main') ?>

<h5 class="fw-bold mb-3 text-center">Pendaftaran Akun</h5>

<!-- Alert Error -->
<?php if (session('error') !== null) : ?>
    <div class="alert alert-danger text-small" role="alert"><?= session('error') ?></div>
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

<form action="<?= url_to('register') ?>" method="post">
    <?= csrf_field() ?>

    <!-- Username -->
    <div class="mb-3">
        <label for="username" class="form-label small font-weight-bold">Username</label>
        <div class="input-group">
            <span class="input-group-text bg-light"><i class="fa-solid fa-user text-muted"></i></span>
            <input type="text" class="form-control" name="username" id="username" inputmode="text" autocomplete="username" placeholder="Username Anda" value="<?= old('username') ?>" required>
        </div>
    </div>

    <!-- Email -->
    <div class="mb-3">
        <label for="email" class="form-label small font-weight-bold">Alamat Email</label>
        <div class="input-group">
            <span class="input-group-text bg-light"><i class="fa-solid fa-envelope text-muted"></i></span>
            <input type="email" class="form-control" name="email" id="email" inputmode="email" autocomplete="email" placeholder="nama@email.com" value="<?= old('email') ?>" required>
        </div>
        <small class="text-muted" style="font-size: 11px;">Kode verifikasi OTP akan dikirim ke email ini.</small>
    </div>

    <!-- Password -->
    <div class="mb-3">
        <label for="password" class="form-label small font-weight-bold">Password</label>
        <div class="input-group">
            <span class="input-group-text bg-light"><i class="fa-solid fa-lock text-muted"></i></span>
            <input type="password" class="form-control" name="password" id="password" autocomplete="new-password" placeholder="••••••••" required>
        </div>
    </div>

    <!-- Password Confirmation -->
    <div class="mb-4">
        <label for="password_confirm" class="form-label small font-weight-bold">Konfirmasi Password</label>
        <div class="input-group">
            <span class="input-group-text bg-light"><i class="fa-solid fa-shield-halved text-muted"></i></span>
            <input type="password" class="form-control" name="password_confirm" id="password_confirm" autocomplete="new-password" placeholder="••••••••" required>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary rounded-3">Daftar Sekarang</button>
    </div>
</form>

<hr class="my-4 text-muted">

<p class="text-center small mb-0">
    Sudah memiliki akun? <a href="<?= url_to('login') ?>" class="fw-bold text-decoration-none">Masuk di sini</a>
</p>

<?= $this->endSection() ?>
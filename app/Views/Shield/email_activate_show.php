<?= $this->extend('layouts/auth') ?>

<?= $this->section('title') ?>Verifikasi Email<?= $this->endSection() ?>

<?= $this->section('main') ?>

<div class="text-center mb-4">
    <i class="fa-solid fa-envelope-circle-check fa-3x text-success mb-2"></i>
    <h5 class="fw-bold">Verifikasi Email Anda</h5>
    <p class="small text-muted mb-0">
        Kami telah mengirimkan kode OTP ke alamat email Anda. Silakan periksa kotak masuk atau folder spam.
    </p>
</div>

<!-- Alert Notifikasi Error / Sukses -->
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

<?php if (session('message') !== null) : ?>
    <div class="alert alert-success text-small" role="alert"><?= session('message') ?></div>
<?php endif ?>

<form action="<?= url_to('auth-action-handle') ?>" method="post">
    <?= csrf_field() ?>

    <div class="mb-4">
        <label for="token" class="form-label small font-weight-bold">Masukkan Kode Token / OTP</label>
        <div class="input-group">
            <span class="input-group-text bg-light"><i class="fa-solid fa-key text-muted"></i></span>
            <input type="text" class="form-control text-center fw-bold fs-5" name="token" id="token" placeholder="123456" value="<?= old('token') ?>" required autofocus>
        </div>
    </div>

    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary rounded-3">Verifikasi Akun</button>
    </div>
</form>

<?= $this->endSection() ?>
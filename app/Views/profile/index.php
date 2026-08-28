<?= $this->extend('layouts/app') ?>

<?= $this->section('title') ?><?= $title ?><?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-header bg-white py-3">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="fw-bold mb-0"><i class="fa-solid fa-user-gear me-2"></i>Data Profil Pelamar</h5>
                        <a href="<?= base_url('dashboard') ?>" class="btn btn-outline-secondary btn-sm"><i class="fa-solid fa-arrow-left me-1"></i> Kembali</a>
                    </div>
                </div>
                <div class="card-body p-4">

                    <?php if (session('message') !== null) : ?>
                        <div class="alert alert-success"><?= session('message') ?></div>
                    <?php endif ?>

                    <form action="<?= base_url('profile/update') ?>" method="post">
                        <?= csrf_field() ?>

                        <h6 class="fw-bold text-primary mb-3">Informasi Akun</h6>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Username</label>
                                <input type="text" class="form-control bg-light" value="<?= esc($user->username) ?>" readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-bold">Email</label>
                                <input type="email" class="form-control bg-light" value="<?= esc($user->email) ?>" readonly>
                            </div>
                        </div>

                        <hr class="my-4">

                        <h6 class="fw-bold text-primary mb-3">Data Pribadi Pelamar</h6>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="nik" class="form-label small fw-bold">NIK (Nomor Induk Kependudukan)</label>
                                <input type="text" class="form-control" name="nik" id="nik" placeholder="3578xxxxxxxxxxxx" required>
                            </div>
                            <div class="col-md-6">
                                <label for="full_name" class="form-label small fw-bold">Nama Lengkap (Sesuai Ijazah)</label>
                                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Nama lengkap Anda" required>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="phone" class="form-label small fw-bold">Nomor WhatsApp / HP</label>
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="08123456789" required>
                            </div>
                            <div class="col-md-6">
                                <label for="gender" class="form-label small fw-bold">Jenis Kelamin</label>
                                <select name="gender" id="gender" class="form-select" required>
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="address" class="form-label small fw-bold">Alamat Lengkap (KTP)</label>
                            <textarea name="address" id="address" class="form-control" rows="3" placeholder="Jl. Raya No. 123, RT/RW, Kelurahan, Kecamatan"></textarea>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary px-4"><i class="fa-solid fa-floppy-disk me-1"></i> Simpan Profil</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
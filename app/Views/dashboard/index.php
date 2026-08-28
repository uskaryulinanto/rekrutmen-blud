<?= $this->extend('layouts/app') ?>

<?= $this->section('title') ?><?= $title ?><?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="container py-4">
    <!-- Header Selamat Datang -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card bg-primary text-white border-0 shadow-sm rounded-3">
                <div class="card-body p-4">
                    <h4 class="fw-bold mb-1">Selamat Datang, <?= esc($user->username) ?>! 👋</h4>
                    <p class="mb-0 text-white-50">Lengkapi data diri dan berkas Anda untuk mulai melamar pekerjaan.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Status & Info Card -->
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-primary-subtle text-primary p-3 rounded-circle me-3">
                        <i class="fa-solid fa-id-card fa-2x"></i>
                    </div>
                    <div>
                        <small class="text-muted d-block">Kelengkapan Profil</small>
                        <span class="fw-bold text-dark fs-5">50%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-warning-subtle text-warning p-3 rounded-circle me-3">
                        <i class="fa-solid fa-paper-plane fa-2x"></i>
                    </div>
                    <div>
                        <small class="text-muted d-block">Lamaran Terkirim</small>
                        <span class="fw-bold text-dark fs-5">0 Lowongan</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex align-items-center">
                    <div class="bg-success-subtle text-success p-3 rounded-circle me-3">
                        <i class="fa-solid fa-user-check fa-2x"></i>
                    </div>
                    <div>
                        <small class="text-muted d-block">Status Akun</small>
                        <span class="badge bg-success">Aktif</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Action / Menu Cepat -->
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3">
                    <h6 class="fw-bold mb-0"><i class="fa-solid fa-list-check me-2"></i>Langkah Pendaftaran</h6>
                </div>
                <div class="card-body">
                    <div class="list-group list-group-flush">
                        <a href="<?= base_url('profile') ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                            <div>
                                <h6 class="mb-1 text-dark fw-semibold">1. Lengkapi Data Diri & Kontak</h6>
                                <small class="text-muted">Isi nama lengkap, NIK, tempat tanggal lahir, dan nomor WhatsApp.</small>
                            </div>
                            <i class="fa-solid fa-chevron-right text-muted"></i>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                            <div>
                                <h6 class="mb-1 text-dark fw-semibold">2. Unggah Berkas & Dokumen</h6>
                                <small class="text-muted">Upload KTP, Ijazah, Transkrip Nilai, dan Pass Foto.</small>
                            </div>
                            <i class="fa-solid fa-chevron-right text-muted"></i>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                            <div>
                                <h6 class="mb-1 text-dark fw-semibold">3. Cari & Pilih Lowongan</h6>
                                <small class="text-muted">Pilih posisi formasi yang sesuai dengan kualifikasi Anda.</small>
                            </div>
                            <i class="fa-solid fa-chevron-right text-muted"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
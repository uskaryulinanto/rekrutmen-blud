<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?> - Rekrutmen BLUD</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icon CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .auth-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
            padding: 10px;
            font-weight: 600;
        }
    </style>
</head>

<body class="d-flex align-items-center min-vh-100 py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="text-center mb-4">
                    <i class="fa-solid fa-hospital-user fa-3x text-primary mb-2"></i>
                    <h4 class="fw-bold mb-0">REKRUTMEN BLUD</h4>
                    <small class="text-muted">Sistem Pendaftaran Pegawai Non-ASN</small>
                </div>

                <div class="card auth-card p-4 p-md-5 bg-white">
                    <?= $this->renderSection('main') ?>
                </div>

                <div class="text-center mt-4">
                    <small class="text-muted">&copy; <?= date('Y') ?> Panitia Seleksi Rekrutmen BLUD</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Helpdesk | Masuk Ke Sistem</title>
    <link rel="icon" href="<?= base_url('assets/icon.png') ?>" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.all.min.js"></script>
</head>

<body class="hold-transition login-page" style="background-color: #B0D9B1;">
    <div class="login-box shadow">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h1><b>Helpdesk</b></h1>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Masuk untuk mulai kerja!</p>

                <form action="initialize" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control <?= session('validation.email') ? 'is-invalid' : '' ?>" placeholder="E-mail" autocomplete="off" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <?php if (session('validation.email')) : ?>
                            <div class="invalid-feedback"><?= session('validation.email') ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control <?= session('validation.password') ? 'is-invalid' : '' ?>" placeholder="Kata sandi" autocomplete="off" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <?php if (session('validation.password')) : ?>
                            <div class="invalid-feedback"><?= session('validation.password') ?></div>
                        <?php endif; ?>
                    </div>
                    <!-- /.col -->
                    <div class="col-mb-12">
                        <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                    </div>
                    <!-- /.col -->
                </form>

                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Masuk dengan Google
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1">
                    <a href="lupa_password">Lupa kata sandi?</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script> <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Cek apakah ada pesan error
            <?php if (session()->getFlashdata('errors')) : ?>
                const errorMessage = <?= json_encode(session()->getFlashdata('errors')) ?>;
                Swal.fire({
                    position: 'top-end', // posisi di pojok kanan atas
                    icon: 'error',
                    toast: true,
                    title: 'Gagal',
                    text: errorMessage, // pesan error dari session
                    showConfirmButton: false,
                    timerProgressBar: true,
                    timer: 3000 // pesan hilang setelah 3 detik
                });
            <?php endif; ?>

            // Cek apakah ada pesan sukses
            <?php if (session()->getFlashdata('success')) : ?>
                const successMessage = <?= json_encode(session()->getFlashdata('success')) ?>;
                Swal.fire({
                    position: 'top-end', // posisi di pojok kanan atas
                    icon: 'success',
                    title: 'Sukses',
                    text: successMessage, // pesan sukses dari session
                    toast: true,
                    timerProgressBar: true,
                    showConfirmButton: false,
                    timer: 3000 // pesan hilang setelah 3 detik
                });
            <?php endif; ?>
        });
    </script>

</body>


</html>
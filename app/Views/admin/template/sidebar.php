<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <a class="d-block text-white">Halo, <?= session()->get('nama_admin') ?></a>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li id="realtime-clock" class="d-block text-white"></li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed; top:0;">
            <!-- Brand Logo -->
            <a class="brand-link mb-2">
                <img src="<?= base_url('assets/icon.png') ?>" alt="HelpDesk" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">HelpDesk</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <?php
                        $levelAkun = session()->get('level_akun');
                        $iconClass = ''; // Inisialisasi variabel untuk class ikon
                        $badgeClass = 'badge-'; // Dasar class untuk badge

                        // Tentukan ikon dan badge class berdasarkan level akun
                        switch ($levelAkun) {
                            case 'Superadmin':
                                $iconClass = 'fas fa-user-shield';
                                $badgeClass .= 'danger';
                                break;
                            case 'Admin':
                                $iconClass = 'fas fa-user';
                                $badgeClass .= 'primary';
                                break;
                        }
                        ?>

                        <!-- Tampilkan ikon dan level akun dengan badge -->
                        <i class="<?= $iconClass ?>"></i>
                        <span class="badge <?= $badgeClass ?>"><?= ucwords($levelAkun) ?></span>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <!-- Dashboard menu item -->
                        <li class="nav-item">
                            <a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
                                <i class="nav-icon fas fa-house"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <!-- Pengguna menu item -->
                        <li class="nav-item">
                            <a href="<?= base_url('admin/pengguna') ?>" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Pengguna
                                </p>
                            </a>
                        </li>
                        <!-- Keluar menu item -->
                        <li class="nav-item">
                            <a href="<?= base_url('admin/myinfo') ?>" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Profile Saya
                                </p>
                            </a>
                        </li>
                        <!-- Keluar menu item -->
                        <li class="nav-item">
                            <?php if (session()->get('Authorized')) : ?>
                                <a href="javascript:void(0);" class="nav-link" onclick="logoutConfirmation();">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                    <p>Keluar</p>
                                </a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- SweetAlert Logout 1 -->
        <script>
            function logoutConfirmation() {
                Swal.fire({
                    title: 'Sudah selesai?',
                    text: "Anda akan keluar dari halaman ini.",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Keluar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "<?= base_url('/logout') ?>";
                    }
                })
            }
        </script>

</body>
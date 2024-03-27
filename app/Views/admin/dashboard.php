<!-- Header -->
<title><?= $title ?></title>
<?= view('admin/template/header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li id="realtime-clock" class="breadcrumb-item"></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Total Pengguna -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-users"></i> Total Pengguna</h3>
                        </div>
                        <div class="card-body">
                            <!-- Konten Total Pengguna -->
                            <span>Total pengguna saat ini sekitar</span>
                        </div>
                    </div>
                </div>
                <!-- Laporan Baru -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-file"></i> Laporan Baru</h3>
                        </div>
                        <div class="card-body">
                            <!-- Konten Laporan Baru -->
                        </div>
                    </div>
                </div>
                <!-- Laporan Selesai -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-check"></i> Laporan Selesai</h3>
                        </div>
                        <div class="card-body">
                            <!-- Konten Laporan Selesai -->
                        </div>
                    </div>
                </div>
                <!-- Laporan Ditolak -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-times"></i> Laporan Ditolak</h3>
                        </div>
                        <div class="card-body">
                            <!-- Konten Laporan Ditolak -->
                        </div>
                    </div>
                </div>
                <!-- Grafik Laporan Diterima -->
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><i class="fas fa-chart-bar"></i> Grafik Laporan Diterima</h3>
                        </div>
                        <div class="card-body">
                            <!-- Konten Grafik Laporan Diterima -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
<!-- /.content-wrapper -->
<!-- login sukses -->


<?= view('admin/template/footer') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Buku' ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Pilihan Buku</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Daftar Buku -->
                        <li class="nav-item">
                            <a href="/buku/index" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>Buku</p>
                            </a>
                        </li>
                        <!-- Peminjaman -->
                        <li class="nav-item">
                            <a href="/peminjaman/index" class="nav-link">
                                <i class="nav-icon fas fa-exchange-alt"></i>
                                <p>Peminjaman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pengembalian" class="nav-link">
                                <i class="nav-icon fas fa-exchange-alt"></i>
                                <p>Pengembalian</p>
                            </a>
                        </li>
                        </li>
                        <!-- Peminjaman -->
                        <li class="nav-item">
                            <a href="/user/index" class="nav-link">
                                <i class="nav-icon fas fa-exchange-alt"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <!-- Ulasan Buku -->
                        <li class="nav-item">
                            <a href="ulasanbuku/index" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Ulasan Buku</p>
                            </a>
                        </li>
                        <!-- Kategori -->
                        <li class="nav-item">
                            <a href="/kategori" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
                        <!-- Koleksi Pribadi -->
                        <li class="nav-item">
                            <a href="/koleksipribadi" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Koleksi Pribadi</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <?= $this->renderSection('content') ?>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- AdminLTE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
</body>
</html>

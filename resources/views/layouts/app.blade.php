<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Font Awesome Icons (via CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- AdminLTE CSS (via CDN) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <!-- Bootstrap CSS (via CDN) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="hold-transition {{ isset($hideSidebar) && $hideSidebar ? 'layout-top-nav' : 'sidebar-mini' }}">
    <div class="wrapper">
        <!-- Navbar (Hanya ditampilkan jika bukan halaman login) -->
        @if (!isset($hideSidebar) || !$hideSidebar)
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Bagian kanan navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Tombol Logout -->
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        @endif

        <!-- Sidebar (Hanya ditampilkan jika bukan halaman login) -->
        @if (!isset($hideSidebar) || !$hideSidebar)
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('/dashboard') }}" class="brand-link text-center">
                <span class="brand-text">Manajemen Zakat</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <!-- Dashboard -->
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <!-- Muzaki -->
                        <li class="nav-item">
                            <a href="{{ route('orangberzakat.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-donate"></i>
                                <p>Muzakki</p>
                            </a>
                        </li>
                        
                         <!-- Jenis Zakat -->
                        <li class="nav-item">
                            <a href="{{ route('jeniszakat.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-donate"></i>
                                <p>Jenis Zakat</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('penerimazakat.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-hand-holding-usd"></i>
                                <p>Mustahiq</p>
                            </a>
                        </li>

                        <li class="nav-header">LAPORAN</li>
                        <li class="nav-item">
                            <a href="{{ route('laporan.orang_berzakat') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Laporan Muzakki</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('laporan.penerima_zakat') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Laporan Mustahiq</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('laporan.rincian_zakat') }}" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Rincian Zakat</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        @endif

        <!-- Konten Utama -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <h1 class="m-0">@yield('title')</h1>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2025 Panitia Zakat.</strong>
        </footer>
    </div>

    <!-- jQuery (via CDN) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS (via CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AdminLTE JS (via CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    <!-- DataTables & Plugins -->
    <script src="https://adminlte.io/themes/v3/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/jszip/jszip.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="https://adminlte.io/themes/v3/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>
</html>
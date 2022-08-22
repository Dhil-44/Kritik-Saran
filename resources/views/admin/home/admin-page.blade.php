<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('dist/img/image/icon-logo.jpg') }}" type="image/x-icon" />
    <title>Admin</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}">
    @livewireStyles
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-success navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link  active text-white" data-widget="control-sidebar" data-slide="true"
                        href="#" role="button">
                        <img src="{{ asset('dist/img/image/icon-logo.jpg') }}" class="img-circle mr-1"
                            style="width: 30px" alt="">
                        <b>Admin</b>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ route('home-page') }}" class="brand-link bg-success">
                <img src="http://cac.kalbis.ac.id/frontend/img/logos/kalbis_footer.png" class="img-fluid"
                    style="width:55%; margin-left:10%;" alt="" loading="lazy">
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('dist/img/image/icon-logo.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{ route('admin/home') }}#" class="d-block fs-2">Admin</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-item ">
                                    <a href="{{ route('user-tables') }}#"
                                        class="nav-link {{ request()->is('user-tables') ? 'active' : '' }}">
                                        <i class="far fa-user nav-icon"></i>

                                        <p>Users</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('submission-tables') }}#"
                                        class="nav-link {{ request()->is('submission-tables') ? 'active' : '' }}">
                                        <i class="far fa-comments nav-icon"></i>
                                        <p>Submission</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('news-tables') }}#"
                                        class="nav-link {{ request()->is('news-tables') ? 'active' : '' }}">
                                        <i class="far fa-newspaper nav-icon"></i>
                                        <p>News</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="">Admin <b></b></h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                </div><!-- /.container-fluid -->
            </div>

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <!-- /.row -->
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy;<a href="">Leaps</a>.</strong>
            All rights reserved.
        </footer>
    </div>

    <script src="admin/plugins/jquery/jquery.min.js"></script>
    <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="admin/dist/js/adminlte.js"></script>
    <script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"> </script>
{{--    <script src="admin/dist/js/pages/dashboard3.js"></script>--}}
    @stack('scripts')
    @livewireScripts
    <script>
        window.addEventListener("showToastr", function (event) {
            toastr.remove();
            if (event.detail.type === 'info') {
                toastr.info(event.detail.message)
            } else if (event.detail.type === 'success') {
                toastr.success(event.detail.message)
            } else if (event.detail.type === 'error') {
                toastr.error(event.detail.message)
            } else if (event.detail.type === 'warning') {
                toastr.warning(event.detail.message)
            } else {
                return false
            }
        })
    </script>
</body>

</html>

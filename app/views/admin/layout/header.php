<!DOCTYPE html>
<html lang="en">
<?php
ob_start();
if (!isset($_SESSION['login'])) {
    echo '<script>
    window.location.replace("login");
    </script>';
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Quản Trị</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/mvc/public/cssDashboard/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="/mvc/public/cssDashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/mvc/public/cssDashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/mvc/public/cssDashboard/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->

    <link rel="stylesheet" href="/mvc/public/cssDashboard/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/mvc/public/cssDashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/mvc/public/cssDashboard/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/mvc/public/cssDashboard/plugins/summernote/summernote-bs4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/mvc/public/cssDashboard/dist/img/AdminLTELogo.png" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="http://localhost/mvc/home/index" class="nav-link">Trang Chủ</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Liên Hệ</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item" role="button">
                    <a href="/mvc/admin/logout" class="nav-link">
                        <img src="/mvc/public/images/icon/log-out.svg" style="width: 15px;" alt="">
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="dashboard" class="brand-link">
                <!--<img src="../cssDashboard/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">-->

            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                       
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <?=
                            strtoupper($_SESSION['login'][1])
                            ?>
                        </a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->

                <nav class="mt-2">
                    <!--1-->
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->

                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <p>
                                    SẢN PHẨM
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/mvc/admin/listproduct" class="nav-link">
                                <p>
                                    Danh Sách Sản phẩm
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://localhost/mvc/admin/addProduct" class="nav-link">
                                <p>
                                    Thêm Sản phẩm
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                        </li>

                    </ul>
                    <!--2-->
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->

                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <p>
                                    TÀI KHOẢN
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="listUser" class="nav-link">
                                <p>
                                    Danh Sách Tài Khoản
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="addUser" class="nav-link">
                                <p>
                                    Thêm Tài Khoản
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                        </li>

                    </ul>
                    <!--danh sách đơn hàng-->
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                           with font-awesome or any other icon font library -->

                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <p>
                                    ĐƠN HÀNG
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="listOrder" class="nav-link">
                                <p>
                                    Danh Sách Đơn Hàng
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                        </li>


                    </ul>

                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
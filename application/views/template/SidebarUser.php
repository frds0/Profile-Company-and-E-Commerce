<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $judul; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>assets/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleUser.css">

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo/proton.png" />

    <title><?php echo $judul ?></title>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark bg-gradient sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center " href="<?php echo site_url('CTR_Pelanggan'); ?>">
                <div class="sidebar-brand-icon">
                    <i class="bi bi-bag-dash"></i>
                </div>
                <div class="sidebar-brand-text mx-3">
                    <i>Proton</i>Store
                </div>
                <!-- <div class="sidebar-brand-text mx-3">Hello <?php echo $user['username'] ?></div> -->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <li class="nav-item ">
                <a href="" class="nav-link">
                    <img class="img-profile " src="<?php echo base_url('assets/img/profile/' . $user['image']) ?>">
                    <span class="d-none d-lg-inline fs-6 ml-2"><?php echo $user['username'] ?></span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item
            <?php if ($this->uri->uri_string() == 'CTR_Pelanggan') {
                echo 'active';
            } ?>">
                <a class="nav-link" href="<?php echo site_url('CTR_Pelanggan'); ?> ">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Akun
            </div>

            <!-- Heading -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-user-tie "></i>&nbsp;
                    <span>Akun</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="nav-link text-dark" href="<?php echo site_url('CTR_Pelanggan/Profile/') ?>">
                            <i class="fas fa-user-tie text-dark"></i>
                            <span>Profile</span>
                        </a>
                        <a class="nav-link text-dark" href="<?php echo site_url('CTR_Pelanggan/Pesanan/') . $user['id'] ?>">
                            <i class="fas fa-store text-dark"></i>
                            <span>Pesanan Saya</span>
                        </a>
                        <!-- <a class="nav-link text-dark" href="<?php echo site_url('CTR_Pelanggan/History/') . $user['id'] ?>">
                            <i class="fas fa-history text-dark"></i>
                            <span>History</span>
                        </a> -->
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Store
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item 
            <?php if ($this->uri->uri_string() == 'CTR_Pelanggan/ServicesU') {
                echo 'active';
            } ?>">
                <a class="nav-link" href="<?php echo site_url('CTR_Pelanggan/ServicesU'); ?>">
                    <i class="fas fa-wrench"></i>&nbsp;
                    <span>Services</span></a>
            </li> -->
            <li class="nav-item 
            <?php if ($this->uri->uri_string() == 'CTR_Pelanggan/KomputerU') {
                echo 'active';
            } ?>">
                <a class="nav-link" href="<?php echo site_url('CTR_Pelanggan/KomputerU'); ?>">
                    <i class="fas fa-fw fa-desktop"></i>
                    <span>Komputer</span></a>
            </li>
            <li class="nav-item
            <?php if ($this->uri->uri_string() == 'CTR_Pelanggan/LaptopU') {
                echo 'active';
            } ?>">
                <a class="nav-link" href="<?php echo site_url('CTR_Pelanggan/LaptopU'); ?>">
                    <i class="fas fa-fw fa-laptop"></i>
                    <span>Laptop</span></a>
            </li>
            <li class="nav-item
            <?php if ($this->uri->uri_string() == 'CTR_Pelanggan/PrinterU') {
                echo 'active';
            } ?>">
                <a class="nav-link" href="<?php echo site_url('CTR_Pelanggan/PrinterU'); ?>">
                    <i class="bi bi-printer-fill"></i>
                    <span>Printer</span></a>
            </li>

            <!-- <li class="nav-item 
            <?php if ($this->uri->uri_string() == 'CTR_Pelanggan/Profile') {
                echo 'active';
            } ?>">
                <a class="nav-link" href="<?php echo site_url('CTR_Pelanggan/Profile/') ?>">
                    <i class="fas fa-user-tie"></i>
                    <span>Profile</span></a>
            </li>

            <li class="nav-item 
            <?php if ($this->uri->uri_string() == 'CTR_Pelanggan/Pesanan/' . $user['id']) {
                echo 'active';
            } ?>">
                <a class="nav-link" href="<?php echo site_url('CTR_Pelanggan/Pesanan/') . $user['id'] ?>">
                    <i class="fas fa-store"></i>
                    <span>Pesanan Saya</span></a>
            </li>

            <li class="nav-item 
            <?php if ($this->uri->uri_string() == 'CTR_Pelanggan/History/' . $user['id']) {
                echo 'active';
            } ?>">
                <a class="nav-link" href="<?php echo site_url('CTR_Pelanggan/History/') . $user['id'] ?>">
                    <i class="fas fa-history"></i>
                    <span>History</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
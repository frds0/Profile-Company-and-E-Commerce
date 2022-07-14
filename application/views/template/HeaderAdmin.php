<!DOCTYPE html>
<html lang="en">
<!-- link figma https://www.figma.com/file/GJIbo4UCnJgwGzWIGIwlWJ/Untitled?node-id=1%3A2 -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/css/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/css/bootstrap.min.css" />

    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />
    <link href="<?php echo base_url(); ?>assets/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Animasi AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/css/navbar.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo/proton.png" />

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugin/datatables-buttons/css/buttons.bootstrap4.min.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <title><?php echo $judul ?></title>
</head>

<body id="home">
    <nav class="navbar navbar-expand-lg navbar-static-top fixed-top navbar-dark bg-dark" aria-label="Seventh navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: white;">Hai <?php echo $user['username'] ?> Proton</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#togle" aria-controls="togle" aria-haspopup="true" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="togle">
                <ul class="navbar-nav mb-2 mb-xl-0" style="text-align: right;">
                    <?php if ($this->session->userdata('role') == 'Pemilik') { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('CTR_Pemilik'); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('CTR_Pemilik/Laporan'); ?>">Laporan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="<?php echo site_url('CTR_Login'); ?>" data-toggle="modal" data-target="#logoutModal"><b>Logout</b></a>
                        </li>
                    <?php } else { ?>
                        <div class="collapse navbar-collapse" id="togle">
                            <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('CTR_Admin'); ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('CTR_Admin/Information'); ?>">Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('CTR_Admin/About'); ?>">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('CTR_Admin/Visi'); ?>">Visi&nbsp;Misi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('CTR_Admin/Gallery'); ?>">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('CTR_Admin/Contact'); ?>">Contact&nbsp;Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('CTR_Admin/Barang'); ?>">Barang</a>
                                </li>
                                <!-- <li class="nav-item">
                            <a class="nav-link d-flex" href="#">Store <i class="bi bi-caret-down-fill"></i></a>
                            <ul class="dropdown-menu shadow-lg" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="<?php echo site_url('CTR_Admin/Komputer') ?>">Komputer</a></li>
                                <li><a class="dropdown-item" href="<?php echo site_url('CTR_Admin/Laptop') ?>">Laptop</a></li>
                                <li><a class="dropdown-item" href="<?php echo site_url('CTR_Admin/Printer') ?>">Printer</a></li>
                            </ul>
                        </li> -->
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="#">Pesanan <i class="bi bi-caret-down-fill"></i></a>
                                    <ul class="dropdown-menu shadow-lg" aria-labelledby="dropdownMenuLink">
                                        <!-- <li><a class="dropdown-item" href="<?php echo site_url('CTR_Admin/Services'); ?>">Services</a></li> -->
                                        <li><a class="dropdown-item" href="<?php echo site_url('CTR_Admin/Pesanan'); ?>">Pesanan</a></li>
                                        <li><a class="dropdown-item" href="<?php echo site_url('CTR_Admin/Dikirim') ?>">Dikirim</a></li>
                                        <li><a class="dropdown-item" href="<?php echo site_url('CTR_Admin/Terkirim') ?>">Terkirim</a></li>
                                    </ul>
                                </li>
                                <!-- <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('CTR_Admin/Pesanan'); ?>"><b>Pesanan</b></a>
                        </li> -->
                                <li class="nav-item">
                                    <a class="nav-link text-danger" href="<?php echo site_url('CTR_Login'); ?>" data-toggle="modal" data-target="#logoutModal"><b>Logout</b></a>
                                </li>
                            </ul>
                        </div>
                    <?php } ?>
            </div>
        </div>
    </nav>
    <!-- akhir Navbar -->
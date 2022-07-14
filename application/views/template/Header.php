<!DOCTYPE html>
<html lang="en">
<!-- link figma https://www.figma.com/file/GJIbo4UCnJgwGzWIGIwlWJ/Untitled?node-id=1%3A2 -->

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> Link online BS -->
  <link href="<?php echo base_url(); ?>assets/css/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/css/bootstrap.min.css" />

  <!-- <link href="<?php echo base_url(); ?>assets/css/css/sb-admin-2.css" rel="stylesheet"> -->

  <!-- Bootsrap Icons -->
  <!-- <link href="<?php echo base_url(); ?>assets/css/css/bootstrap.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />
  <link href="<?php echo base_url(); ?>assets/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Animasi AOS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <!-- My CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/css/navbar.css" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo/proton.png" />

  <title><?php echo $judul ?></title>
</head>

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-g navbar-expand-lg shadow fixed-top fw-bold" style="background: linear-gradient(#0084D3, #0000);">
    <div class="container">
      <a class="navbar-brand home text-center" href="#">
        <img src="<?php echo base_url(); ?>assets/img/logo/proton.png" alt="" width="55" class="d-inline-block align-text-bottom img-thumbnail" style="background-color: #ffffff00; border: none;" /> <br />
        Proton Techindo
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="bi bi-arrows-expand"></i></span>
      </button>
      <div class="collapse navbar-collapse fw-bold" id="navbarNav">
        <ul class="navbar-nav ms-auto fw-bold">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>#visi">Visi Misi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>#contact">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex" href="#">Store <i class="bi bi-caret-down-fill"></i></a>
            <ul class="dropdown-menu shadow-lg" aria-labelledby="dropdownMenuLink">
              <!-- <li><a class="dropdown-item" href="<?php echo site_url('CTR_Company/Services'); ?>">Services</a></li> -->
              <li><a class="dropdown-item" href="<?php echo site_url('CTR_Company/Komputer') ?>">Komputer</a></li>
              <li><a class="dropdown-item" href="<?php echo site_url('CTR_Company/Laptop') ?>">Laptop</a></li>
              <li><a class="dropdown-item" href="<?php echo site_url('CTR_Company/Printer') ?>">Printer</a></li>
            </ul>
          </li>
          <li class="login">
            <a class="nav-link" href="<?php echo site_url('CTR_Login'); ?>" style="margin-left: 4rem;"><i class="fas fa-user-tie"></i> Account</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir Navbar -->
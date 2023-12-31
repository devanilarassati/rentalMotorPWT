
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="../assets/image/logo.jpg">
    <title>Rental Motor PWT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/boostap-rmotor/style.css') ?>" />
</head>

<style>
    nav a.navbar-brand {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #000; /* Warna teks */
    }

    nav a.navbar-brand img {
    width: 40px; /* Sesuaikan ukuran logo */
    margin-right: 10px; /* Jarak antara logo dan nama website */
    }
</style>

<body id="home">
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top ">
        <div class="container">
            <a class="navbar-brand" href="">
            <img src="../assets/image/logo.jpg" alt="Logo" class="img-fluid">
            Rental Motor PWT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="<?php if (isset($active_home)) {
                        echo $active_home;
                      } ?> nav-item">
                        <a class="nav-link" href="<?php echo site_url('Rmotor_Controller') ?>">Home</a>
                    </li>
                    <li class="<?php if (isset($active_syarat)) {
                        echo $active_syarat;
                      } ?> nav-item">
                        <a class="nav-link" href="<?php echo site_url('Rmotor_Controller/syarat') ?>">Syarat</a>
                    </li>
                    <?php if ($this->session->userdata('LEVEL') == '') { ?>
                    <li class="<?php if (isset($active_login)) {
                          echo $active_login;
                        } ?>nav-item">
                        <a class="nav-link" href="<?php echo site_url('Login_Controller') ?>">Login</a>
                    </li>
                    <li class="<?php if (isset($active_daftar)) {
                          echo $active_daftar;
                        } ?>">
                        <a class="nav-link" href="<?php echo site_url('Login_Controller/daftar') ?>">Daftar</a>
                    </li>
                    <li class="<?php if (isset($active_contact)) {
                          echo $active_contact;
                        } ?>">
                        <a class="nav-link" href="<?php echo site_url('Rmotor_Controller/contact') ?>">Contact</a>
                    </li>
                    <?php }
          if ($this->session->userdata('LEVEL') == 'customer') { ?>

                    <li class="<?php if (isset($active_profil)) {
                          echo $active_profil;
                        } ?>">
                        <a class="nav-link" href="<?php echo site_url('Rmotor_Controller/profil') ?>">
                            Profil</a>
                    </li>
                    <li class="<?php if (isset($active_rpesanan)) {
                          echo $active_rpesanan;
                        } ?>">
                        <a class="nav-link" href="<?php echo site_url('Rmotor_Controller/rpesanan') ?>">
                            Pesanan </a>
                    </li>
                    <li class="<?php if (isset($active_pesanan)) {
                          echo $active_pesanan;
                        } ?>">
                        <a class="nav-link" href="<?php echo site_url('Rmotor_Controller/dataPesanan') ?>">
                            List Pesanan</a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo site_url('Login_Controller/logout') ?>">
                            <?php echo $this->session->userdata('NAME') ?>(Logout)
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mainTitle">
        <div class="container">
            <h1>Rental Motor PWT</h1>
            <h1> </h1>
        </div>
    </div>

    
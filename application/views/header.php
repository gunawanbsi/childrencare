<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>BSI Children Care - <?php echo $judul; ?></title>

    <!-- CSS FILES -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/bootstrap-icons.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/templatemo-kind-heart-charity.css" rel="stylesheet">
     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body id="section_1">


    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url().'tamu'?>">
                <img src="<?php echo base_url()?>assets/img/logo1.png" class="logo img-fluid" alt="Kind Heart Charity">
                <span>
                    BSI Children Care
                    <small>Kesehatan Anak</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'tamu'?>">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'tamu/artikel'?>">Artikel</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'tamu/konsul'?>">Konsultasi</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url().'tamu/about'?>">Tentang Kami</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link custom-btn custom-border-btn btn" href="<?php echo base_url().'auth'?>"><i class="fas fa-user"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
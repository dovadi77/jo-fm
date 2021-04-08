<?php require("config.php"); require("class.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>BizPage Bootstrap Template</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
  <link href="assets/vendor/font-awesome/fontawesome-all.min.css" rel="stylesheet" />
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="sticky-top header-white">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <a href="/" class="logo mr-auto">
            <div class="logo-img">
              <img src="assets/img/logo.svg" alt="" class="img-fluid d-inline-block" />
              <div class="logo-name d-inline-block">
                <p>First Media Reseller</p>
                <p>By JO - Executive</p>
                <p>Authorized Sales Agency First Media</p>
              </div>
            </div>
          </a>
          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="<?= $request == '/' ? '#intro' : '/'?>">Home</a></li>
              <li><a href="#about">Tentang Kami</a></li>
              <li><a href="#portfolio">Produk First Media</a></li>
              <li><a href="#call-to-action">Kontak Kami</a></li>
              <li><a href="<?= ($request == '/disclaimer' ? '#disclaimer' : '/disclaimer')?>">Legal Disclaimer</a>
              </li>
            </ul>
          </nav>
          <!-- .nav-menu -->
        </div>
      </div>
    </div>
  </header>
  <!-- End Header -->
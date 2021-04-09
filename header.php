<?php require("config.php"); require("class.php"); 
$contact = checkContact($con);
$chat = liveChat($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title><?=$url?> | Promo First Media <?=date('Y')?> Internet dan TV kabel kualitas TERBAIK</title>

  <!-- Meta for SEO -->
  <meta name="twitter:description" content="Wah!! Promo terbaru dari First Media di tahun <?=date('Y')?> nih, hanya dengan 249rb saja anda bisa
    menggunakan internet dengan kualitas terbaik dan UNLIMITED, juga dapat menikmati TV Kabel dengan kualitas 4K terbaik
    di kelasnya. Penasaran dengan promonya klik ...">
  <meta name="twitter:image" content="assets/img/fmx-circle.png">
  <meta property="og:title" content="Promo Terbaru First Media 2020">
  <meta property="og:type" content="website">
  <meta name="description" content="Wah!! Promo terbaru dari First Media di tahun <?=date('Y')?> nih, hanya dengan 249rb saja anda bisa
    menggunakan internet dengan kualitas terbaik dan UNLIMITED, juga dapat menikmati TV Kabel dengan kualitas 4K terbaik
    di kelasnya. Penasaran dengan promonya klik ...">
  <meta property="og:image" content="assets/img/logo.svg">
  <meta name="twitter:card" content="summary">

  <!-- Icon for SEO -->
  <link rel="icon" type="image/png" sizes="271x270" href="assets/img/fmx-circle.png">
  <link rel="icon" type="image/png" sizes="271x270" href="assets/img/fmx-circle.png">
  <link rel="icon" type="image/png" sizes="271x270" href="assets/img/fmx-circle.png">
  <link rel="icon" type="image/png" sizes="271x270" href="assets/img/fmx-circle.png">
  <link rel="icon" type="image/png" sizes="271x270" href="assets/img/fmx-circle.png">

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
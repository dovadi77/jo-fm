<?php
require("header.php");
$contact = checkContact($con);
$chat = liveChat($con);
?>
<!-- ======= Intro Section ======= -->
<section id="intro">
  <div class="intro-container">
    <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <div class="carousel-container">
            <img src="assets/img/banner1.jpeg" alt="Banner 1" class="img-fluid d-block w-100" />
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-container">
            <img src="assets/img/banner2.jpeg" alt="Banner 2" class="img-fluid d-block w-100" />
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-container">
            <img src="assets/img/banner3.jpeg" alt="Banner 3" class="img-fluid d-block w-100" />
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-container">
            <img src="assets/img/banner4.jpeg" alt="Banner 4" class="img-fluid d-block w-100" />
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
<!-- End Intro Section -->

<main id="main">
  <!-- ======= Featured Services Section Section ======= -->
  <section id="featured-services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 box">
          <i class="ion-android-star-outline"></i>
          <h4 class="title"><a href="">Best Choices</a></h4>
          <p class="description">
            Menyediakan internet dengan kualitas yang terbaik di kelasnya
          </p>
        </div>

        <div class="col-lg-4 box box-bg">
          <i class="ion-ios-telephone-outline"></i>
          <h4 class="title"><a href="">Fast Support</a></h4>
          <p class="description">
            24 jam customer support + teknisi yang cepat tanggap terhadap
            gangguan
          </p>
        </div>

        <div class="col-lg-4 box">
          <i class="ion-ios-infinite-outline"></i>
          <h4 class="title"><a href="">Full Unlimited</a></h4>
          <p class="description">
            Internet berkecepatan tinggi dikemas dalam paket full unlimited
            untuk semua pilihan paket
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Featured Services Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h3 class="my-3">Tentang Kami</h3>
        <img src="./assets/img/logo.svg" alt="Logo" class="img-fluid d-block mx-auto my-4" />
        <p>
          First Media adalah pemimpin pasar untuk Layanan broadband yang
          memberikan pengalaman tanpa batas untuk multimedia / hiburan dan
          internet cepat.
        </p>
      </header>

      <div class="row my-3" data-aos="fade-right">
        <div class="col-md-6 order-md-0">
          <img src="assets/img/komitmen.jpg" alt="" class="img-fluid rounded-lg" />
        </div>
        <div class="col-md-6 order-md-1 align-self-md-center text-justify">
          <h3 class="text-center font-weight-bold my-3">Komitmen Kami</h3>
          <p>
            Kami berkomitmen untuk memberikan layanan internet berkecepatan
            tinggi dan stabil untuk menunjang segala aktivitas Anda di
            rumah. Jadikan First Media sebagai pilihan internet Anda dan
            bebaskan kreasimu didunia maya!.
          </p>
        </div>
      </div>
      <div class="row my-3" data-aos="fade-left">
        <div class="col-md-6 order-md-3">
          <img src="assets/img/family.jpg" alt="" class="img-fluid rounded-lg" />
        </div>
        <div class="col-md-6 order-md-2 align-self-md-center text-justify">
          <h3 class="text-center font-weight-bold my-3">Layanan Kami</h3>
          <p>
            First Media FastNet memberikan Internet tanpa batas kuota, akses
            internet cepat tanpa hambatan dan jaringan koneksi yang lebih
            stabil dan lancar.
          </p>
          <p>
            First Media Homecable memberikan Hiburan tanpa batas dengan
            channel terlengkap, Tayangan berkualitas, jernih dengan resolusi
            4K dan Smartbox dengan Android TV
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End About Us Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="section-bg">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h3 class="section-title">Produk Kami</h3>
      </header>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php
        $data = showData($con, 'combo');
        while ($row = $data->fetch_assoc()) {
            if ($row['status'] == 'true') {
      ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <div class="portfolio-title">
              <h5 class="text-uppercase m-0 font-weight-bold" style="letter-spacing: 1px">
                <?=$row['nama-paket']?>
              </h5>
            </div>
            <figure>
              <img src="assets/img/<?=$row['image']?>" class="img-fluid" alt="" />
              <a href="#detail<?= $row['id'] ?>" class="link-preview venobox" data-gall="portfolioGallery"
                title="<?= $row['nama-paket'] ?>" data-vbtype="inline"><i class="ion ion-eye"></i></a>
              <a target="_blank"
                href="https://wa.me/<?= $contact['nowa'] ?>/?text=Halo%20Admin,%20saya%20ingin%20order%20paket%20First%20Media%20<?= urlencode($row['nama-paket']) ?>"
                class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="d-none" id="detail<?= $row['id'] ?>">
              <div class="container my-3">
                <h1 class="text-center font-weight-bold text-uppercase"><?= $row['nama-paket'] ?></h1>
                <img src="assets/img/<?=$row['image']?>" alt="<?= $row['nama-paket'] ?>"
                  class="d-block img-fluid mx-auto mb-3">
                <?= $row['desc-detail'] ?>
                <div class="my-3">
                  <a target="_blank"
                    href="https://wa.me/<?= $contact['nowa'] ?>/?text=Halo%20Admin,%20saya%20ingin%20order%20paket%20First%20Media%20<?= urlencode($row['nama-paket']) ?>"
                    class="btn btn-block rounded-pill primary">Order Sekarang</a>
                </div>
              </div>
            </div>

            <div class="portfolio-info">
              <i class="ion-ios-speedometer" style="color: #f3983e; font-size: 5em; line-height: normal"></i>
              <div>
                <div class="border-bottom p-1">
                  <p class="gray-text">Unlimited UP TO</p>
                  <h4 class="speed-info font-weight-bold m-0 mb-1">
                    <?= $row['kecepatan'] ?> Mbps
                  </h4>
                </div>
                <div class="border-bottom p-1">
                  <h4 class="speed-info font-weight-bold m-0 mb-1"><?= $row['channel'] ?></h4>
                  <p class="gray-text">Channel TV</p>
                  <span class="rounded-pill px-2 py-1"
                    style="background-color: #f3983e"><?= $row['channel-detail'] ?></span>
                </div>
                <div class="border-bottom p-1">
                  <p class="gray-text">Biaya Berlangganan</p>
                  <h5 class="pricing m-0">
                    <span>Rp.</span><strong><?= $row['harga'] ?></strong><span>/ bln</span>
                  </h5>
                </div>
                <div class="border-bottom p-1">
                  <p class="gray-text">PROMO</p>
                  <p>
                    <?= $row['desc-depan'] ?>
                  </p>
                </div>
              </div>
              <div class="border-bottom px-3 py-2">
                <a target="_blank"
                  href="https://wa.me/<?= $contact['nowa'] ?>/?text=Halo%20Admin,%20saya%20ingin%20order%20paket%20First%20Media%20<?= urlencode($row['nama-paket']) ?>"
                  class="btn btn-block rounded-pill primary">Order Sekarang</a>
              </div>
            </div>
          </div>
        </div>
        <?php }}?>
      </div>
    </div>
  </section>
  <!-- End Portfolio Section -->

  <!-- ======= Call To Action Section ======= -->
  <section id="call-to-action">
    <div class="container text-center" data-aos="zoom-in">
      <h3>Tunggu Apalagi ?</h3>
      <p>Apakah anda tertarik dengan produk kami ?</p>
      <a target="_blank"
        href="https://wa.me/<?= $contact['nowa'] ?>/?text=Halo%20saya%20ingin%20bertanya%20terkait%20dengan%20produk%20First%20Media"
        class="btn primary rounded-pill p-3">
        <h4 class="m-0">Pesan Sekarang!</h4>
      </a>
    </div>
  </section>
  <!-- End Call To Action Section -->
</main>
<!-- End #main -->
<?php require("footer.php") ?>
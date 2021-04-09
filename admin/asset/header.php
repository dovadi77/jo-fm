<?php include '../config.php';
session_start();
if (!isset($_SESSION['username'])) {

    header('location: login/index.html');
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Admin | JO - Executive First Media</title>
  <link href="<?= $base_url ?>admin/css/styles.css" rel="stylesheet">
  <link href="<?= $base_url ?>admin/css/switches.css" rel="stylesheet">
  <link href="<?= $base_url ?>assets/vendor/font-awesome/fontawesome-all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.3/cropper.css" />
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= $base_url ?>admin/main.php">Admin Panel</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
        class="fas fa-bars"></i></button>
    <!-- Navbar-->
    <ul class="navbar-nav d-none d-md-inline-block ml-auto md-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="changepasswd.php">Change Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="login/logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="<?= $base_url ?>admin/main.php">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCombo"
              aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
              Paket Combo
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseCombo" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <?php
                                $sql = "SELECT * FROM combo order by id ASC";
                                $query = mysqli_query($con, $sql);
                                while ($data = mysqli_fetch_array($query)) {
                                    echo '<a class="nav-link" href="edit.php?id=' . $data['id'] . '&db=combo">' . $data['nama-paket'] . '</a>';
                                }
                                ?>
                <!-- <a class="nav-link" href="layout-static.html">Family HD</a> -->
              </nav>
            </div>
            <a class="nav-link" href="<?= $base_url ?>admin/profile.php">
              <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
              Profile
            </a>
            <div class="sb-sidenav-menu-heading">Website</div>
            <a class="nav-link" href="<?= $base_url ?>" target="_blank">
              <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
              View
            </a>
            <a class="nav-link" href="livechat.php">
              <div class="sb-nav-link-icon"><i class="fas fa-comments"></i></div>
              Livechat
            </a>
            <div class="sb-sidenav-menu-heading">Access</div>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
              aria-expanded="false" aria-controls="collapsePages">
              <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
              Authentication
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingone" data-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="adduser.php">Add Admin</a>
                <a class="nav-link" href="deluser.php">Delete Admin</a>
                <a class="nav-link" href="changepasswd.php">Change Password</a>
              </nav>
            </div>
          </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Logged in as:</div>
          <?= $_SESSION['username']; ?>
        </div>
      </nav>
    </div>
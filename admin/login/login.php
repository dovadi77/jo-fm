<?php
include "../../config.php";
session_start();
//check if can login again
if (isset($_SESSION['attempt_again'])) {
	$now = time();
	if ($now >= $_SESSION['attempt_again']) {
		unset($_SESSION['attempt']);
		unset($_SESSION['attempt_again']);
	}
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Admin Panel - First Media Promo</title>
  <link href="<?= $base_url ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= $base_url ?>assets/vendor/font-awesome/fontawesome-all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="login.css">

</head>

<body>
  <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        <div class="d-flex justify-content-center">
          <div class="brand_logo_container">
            <img src="<?= $base_url ?>assets/img/logo.svg" class="brand_logo" alt="Logo">
          </div>
        </div>
        <div class="d-flex justify-content-center form_container" id="login_input">
          <form action="proses.php" method="POST" onsubmit="validasi()">
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
              </div>
              <input type="text" id="uname" name="uname" class="form-control input_user" value=""
                placeholder="Username">
            </div>
            <div class="input-group mb-2">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" id="pass" name="pass" class="form-control input_pass" value=""
                placeholder="Password">
            </div>
            <div class="d-flex justify-content-center mt-3 login_container">
              <button type="submit" id="submit" name="submit" class="btn login_btn">Login</button>
            </div>
          </form>
        </div>
        <?php
				if (isset($_SESSION['error'])) {
				?>
        <div class="alert alert-danger text-center" style="margin-top:20px;">
          <?php echo $_SESSION['error']; ?>
          <?php if ($_SESSION['attempt'] == 3) {
							echo ("Until ");
							date_default_timezone_set("Asia/Jakarta");
							$timestamp = $_SESSION['attempt_again'];
							echo (date("d F, Y h:i:s A", $timestamp));
						} else {
							echo ("<br>Attempt ");
							echo 3 - $_SESSION['attempt'];
						}
						?>
        </div>
        <?php

					unset($_SESSION['error']);
				}
				?>
      </div>
    </div>
  </div>
  <script>
    function validasi() {
      var username = document.getElementById("uname").value;
      var password = document.getElementById("pass").value;
      if (username != "" && password != "") {
        return true;
      } else {
        alert('Username dan Password harus di isi !');
        return false;
      }
    }
  </script>
  <script src="<?= $base_url ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= $base_url ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
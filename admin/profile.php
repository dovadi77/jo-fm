<?php include 'asset/header.php'; ?>
<div id="layoutSidenav_content">
  <div class="container">
    <h3 class="mt-4">Informasi Kontak</h3>
    <p class="mb-4">Ubah informasi kontak pada website</p>
    <form method="POST" action="profile/proses.php">
      <?php
            $sql = mysqli_query($con, "SELECT * from contact where id = 1");
            $data = mysqli_fetch_array($sql);
            ?>
      <div class="form-group">
        <label for="nohp">No HP Telepon (diawali dengan 62)</label>
        <input type="number" class="form-control" name="nohp" value="<?= $data['nohp']; ?>">
      </div>
      <div class="form-group">
        <label for="nohp">No HP Whatsapp (diawali dengan 62)</label>
        <input type="number" class="form-control" name="nowa" value="<?= $data['nowa']; ?>">
      </div>
      <div class="form-group">
        <label for="nohp">Email</label>
        <input type="email" class="form-control" name="email" value="<?= $data['email']; ?>">
      </div>
      <button class="btn btn-primary mt-2 btn-lg" type="submit" name="update">UPDATE</button>
    </form>
    <?php include 'asset/footer.php' ?>
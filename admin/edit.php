<?php include 'asset/header.php';
$id = $_GET['id'];
$db = $_GET['db'] ?>
<div id="layoutSidenav_content">
  <div class="container">
    <h4 class="mt-4">Edit Page</h4>

    <form action="proses.php?id=<?= $id . "&db=" . $db ?>" method="post">
      <?php
            $sql = "SELECT * FROM $db where id = $id";
            $query = $con->query($sql);
            if ($query->num_rows > 0) {
                $row = $query->fetch_array();
            ?>
      <div class="form-group">
        <label for="status-paket">Status Paket :</label>
        <div class="onoffswitch">
          <input type="checkbox" name="status-paket" class="onoffswitch-checkbox" id="myonoffswitch-paket"
            <?php if ($row['status'] == 'true') {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
          <label class="onoffswitch-label" for="myonoffswitch-paket">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
          </label>
        </div>
      </div>
      <div class="form-group">
        <label for="nama-paket">Nama Paket :</label>
        <input type="text" name="nama-paket" value="<?= $row['nama-paket'] ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="kecepatan">Kecepatan :</label>
        <input type="text" name="kecepatan" value="<?= $row['kecepatan'] ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="harga">Harga :</label>
        <input type="text" name="harga" value="<?= $row['harga'] ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="channel">Channel :</label>
        <input type="number" name="channel" value="<?= $row['channel'] ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="channel-detail">Channel Detail :</label>
        <input type="text" name="channel-detail" value="<?= $row['channel-detail'] ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="deskripsi-depan">Bagian Depan : </label>
        <textarea name="depan" id="depan">
            <?php
                echo $row['desc-depan'];
            ?>
            </textarea>
      </div>
      <div class="form-group">
        <label for="deskripsi-detail">Bagian Detail :</label>
        <textarea name="detail" id="detail">
            <?php
                echo $row['desc-detail'];
            } else {
                echo "ERROR";
            }
            ?>
            </textarea>
      </div>
      <button class="btn btn-lg btn-primary mt-2 btn-block" type="submit" name="update">SAVE</button>
    </form>


    <div class="container mt-3">
      <h3>Current Image</h3>
      <img src="<?=$base_url?>assets/img/<?=$row['image']?>" alt="<?=$row['image']?>" class="img-fluid">
      <h4>Click Button Below to Changing the Images</h4>
      <input type="file" id="fileInput" accept="image/*" />
      </p>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="photoModalLabel">Modal title</h5>
            <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div>
              <canvas id="canvas">
                Your browser does not support the HTML5 canvas element.
              </canvas>
            </div>
            <h3 class="text-center">Result</h3>
            <div id="result" class="mt-3"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary closeModal" data-dismiss="modal">Close</button>
            <button type="button" id="btnRestore" class="btn btn-secondary">Reset</button>
            <button type="button" id="btnCrop" class="btn btn-primary">Crop</button>
            <button type="button" id="btnSave" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
    <?php include 'asset/footer.php' ?>
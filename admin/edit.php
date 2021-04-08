<?php include 'asset/header.php';
$id = $_GET['id'];
$db = $_GET['db'] ?>
<div id="layoutSidenav_content">
    <div class="container">
        <h4 class="mt-4">Edit Page</h4>

        <form action="proses.php?id=<?php echo $id . "&db=" . $db ?>" method="post">
            <?php
            $sql = "SELECT * FROM $db where id = $id";
            $query = $con->query($sql);
            if ($query->num_rows > 0) {
                $row = $query->fetch_array();
            ?>
                <div class="form-group">
                    <label for="status-paket">Status Paket :</label>
                    <div class="onoffswitch">
                        <input type="checkbox" name="status-paket" class="onoffswitch-checkbox" id="myonoffswitch" <?php if ($row['status'] == 'true') {
                                                                                                                        echo "checked";
                                                                                                                    } ?>>
                        <label class="onoffswitch-label" for="myonoffswitch">
                            <span class="onoffswitch-inner"></span>
                            <span class="onoffswitch-switch"></span>
                        </label>
                    </div>
                </div>
                <script src="<?php echo $base_url ?>admin/js/paket.js"></script>
                <div class="form-group">
                    <label for="nama-paket">Nama Paket :</label>
                    <input type="text" name="nama-paket" value="<?php echo $row['nama-paket'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="harga">Harga :</label>
                    <input type="text" name="harga" value="<?php echo $row['harga'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="deskripsi-depan">Bagian Depan : </label>
                    <textarea name="depan">
            <?php
                echo $row['desc-depan'];
            ?>
            </textarea>
                </div>
                <div class="form-group">
                    <label for="deskripsi-detail">Bagian Detail :</label>
                    <textarea name="detail">
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
        <?php include 'asset/footer.php' ?>
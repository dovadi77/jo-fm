<?php
include '../config.php';
if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $db = $_GET['db'];
    $harga = $_POST['harga'];
    $detail =  $_POST['detail'];
    $depan = $_POST['depan'];
    $nama_paket = $_POST['nama-paket'];
    echo "<br>" . $db;
    if (!$con->query("UPDATE $db set `nama-paket` = '$nama_paket', `desc-depan` = '$depan', `desc-detail`='$detail', `harga` = '$harga' where $db.`id`='$id'")) {
        echo ("Error description: " . $con->error);
    }
    header("Location: edit.php?id=" . $id . "&db=" . $db);
}

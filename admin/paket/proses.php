<?php
include '../../config.php';
if (isset($_POST['status'])) {
    $status = $_POST['status'];
    $id = $_POST['id'];
    $db = $_POST['db'];
    if (!$data = mysqli_query($con, "UPDATE $db set `status` = '$status' where $db.id = '$id'")) {
        echo "Failed";
    } else {
        echo "Success";
    }
}
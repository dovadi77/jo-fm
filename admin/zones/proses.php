<?php
include '../../config.php';
if (isset($_POST['status'])) {
    $status = $_POST['status'];
    $zones = $_POST['zones'];
    if (!$data = mysqli_query($con, "UPDATE `zone` set $zones = '$status'")) {
        echo "Failed";
    } else {
        echo "Success";
    }
}
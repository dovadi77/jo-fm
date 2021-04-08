<?php
include '../../config.php';
if(isset($_POST['status'])){
    $status = $_POST['status'];
    $data = mysqli_query($con, "UPDATE livechat set `status` = '$status'");
}
<?php
include '../../config.php';
if (isset($_POST['update'])) {
    $nohp = $_POST['nohp'];
    $nowa = $_POST['nowa'];
    $email = $_POST['email'];
    // $telegram = $_POST['telegram'];
    $data = mysqli_query($con, "UPDATE contact set nohp = '$nohp', nowa = '$nowa', email = '$email'  where id = 1");
    header("Location: ../profile.php");
}
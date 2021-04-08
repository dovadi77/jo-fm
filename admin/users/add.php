<?php
include '../../config.php';
if (isset($_POST['add'])) {
    $uname = $_POST['uname'];
    $pass = md5($_POST['pass']);
    $cpass = md5($_POST['cpass']);
    if ($data = mysqli_query($con, "SELECT username from users where username = '$uname'")) {
        if ($data->num_rows > 0) {
            echo "<script>alert('User Exist')</script>";
            echo "<script>window.location='../adduser.php'</script>";
        } else {
            if ($pass == $cpass) {
                if (mysqli_query($con, "INSERT INTO `users`(`id`, `username`, `password`) VALUES (NULL,'$uname','$pass')")) {
                    echo "<script>alert('Success add USER with Username " . $uname . " into server')</script>";
                    echo "<script>window.location='../adduser.php'</script>";
                } else {
                    echo "<script>alert('Error !!!')</script>";
                    echo "<script>window.location='../adduser.php'</script>";
                }
            } else {
                echo "<script>alert('Password not match')</script>";
                echo "<script>window.location='../adduser.php'</script>";
            }
        }
    }
}

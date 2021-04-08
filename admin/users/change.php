<?php
include '../../config.php';
if(isset($_POST['change'])){
    $uname = $_POST['uname'];
    $pass = md5($_POST['pass']);
    $cpass = md5($_POST['cpass']);
    if($data = mysqli_query($con, "SELECT username from users where username = '$uname'")){
        if(!$data->num_rows > 0){
            echo "<script>alert('User Not Found !!')</script>";
            echo "<script>window.location='../changepasswd.php'</script>";
        }
        else{
            if($pass==$cpass){
                if(mysqli_query($con, "UPDATE `users` SET `password` = '$cpass' WHERE `users`.`username` = '$uname'")){
                    echo "<script>alert('Success Changing Password User ".$uname." into server')</script>";
                    echo "<script>window.location='../changepasswd.php'</script>";
                }
                else{
                    echo "<script>alert('Error !!!')</script>";
                    echo "<script>window.location='../changepasswd.php'</script>";
                }
            }
            else{
                echo "<script>alert('Password not match')</script>";
                echo "<script>window.location='../changepasswd.php'</script>";
            }
        }
    }
}
<?php
include '../../config.php';
if(isset($_POST['delete'])){
    $uname = $_POST['uname'];
    echo $uname;
    if($data = mysqli_query($con, "SELECT `username` from `users` where `username` = '$uname'")){
        if($data->num_rows > 0){
            if(mysqli_query($con, "DELETE FROM `users` WHERE `users`.`username` = '$uname'")){
                echo "<script>alert('User has been Deleted!!')</script>";
                echo "<script>window.location='../deluser.php'</script>";
            }
            else{
                echo "<script>alert('Error1 !!!')</script>";
                echo "<script>window.location='../deluser.php'</script>";
            }
            
        }
        else{
            echo "<script>alert('Error2 !!!')</script>";
            // echo "<script>window.location='../deluser.php'</script>";
        }
    }
}
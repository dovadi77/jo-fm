<?php
include '../../config.php';
if(isset($_POST['status'])){
    $status = $_POST['status'];
    if(!$data = mysqli_query($con, "UPDATE livechat set `status` = '$status'")){
      echo "Failed";
    }
    else{
      echo "Success";
    }
}
if(isset($_POST['syntax'])){
  $s = $_POST['syntax'];
  if(!$data = mysqli_query($con, "UPDATE livechat set `syntax` = '$s'")){
    echo 'alert("Something went wrong")';
  }
  header("Location: ../livechat.php");
  
}
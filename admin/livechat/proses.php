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
  $syntax = mysqli_real_escape_string($con,$_POST['syntax']);
  echo $syntax;
  if(!$data = mysqli_query($con, "UPDATE `livechat` set `syntax` = '$syntax'")){
    echo '<script>alert("Something went wrong")</script>';
  }
  header("Location: ../livechat.php");
  
}
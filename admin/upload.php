<?php
include '../config.php';
$path = "../assets/img/";
if(isset($_POST['image'])){
  try{
    $filename = $_POST["filename"];
    file_put_contents($path.$filename, file_get_contents($_POST['image']));
    $id = $_POST['id'];
    $db = $_POST['db'];
    if ($con->query("UPDATE $db set `image` = '$filename' where $db.`id`='$id'")) {
      echo "success";
    }
    else{
      echo $con->error;
    }
  }
  catch(Exception $err){
    echo $err;
  }
}
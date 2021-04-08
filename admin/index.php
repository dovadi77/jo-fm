<?php 
session_start();
include '../config.php';
    if(!isset($_SESSION['username'])){
        header('location: /admin/login/index.html');
    }
    else{
        header('location: main.php');
    }

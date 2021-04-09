<?php

$request = $_SERVER['REQUEST_URI'];
$url = '';

switch ($request) {
    case '/' :
      $url = "Home";
        require __DIR__ . '/main.php';
        break;
    case '' :
      $url = "Home";
        require __DIR__ . '/main.php';
        break;
    case '/disclaimer' :
      $url = "Disclaimer";
        require __DIR__ . '/disclaimer.php';
        break;
    default:
      $url = "404";
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}
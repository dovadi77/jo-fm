<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/main.php';
        break;
    case '' :
        require __DIR__ . '/main.php';
        break;
    case '/disclaimer' :
        require __DIR__ . '/disclaimer.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}
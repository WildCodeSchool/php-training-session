<?php

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($urlPath) {
    case '/':
        require_once __DIR__ . '/View/index.php';
        break;
    case '/login':
        require_once __DIR__ . '/View/login.php';
        break;
    case '/logout':
        require_once __DIR__ . '/View/logout.php';
        break;
    case '/profile':
        require_once __DIR__ . '/View/profile.php';
        break;
    default:
        header("HTTP/1.1 404 Not Found");
}

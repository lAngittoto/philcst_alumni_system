<?php

$page = $_GET['page'] ?? '';
if ($page === '') {
    header('Location: home');
    exit;
}

$publicPages = ['home', 'about', 'log-in', 'authenticate'];
$admin = [''];

if (in_array($page, $publicPages)) {
    
    switch ($page) {

        case 'home':
            include __DIR__ . '/../auth/views/home.php';
            break;
        case 'about':
            include __DIR__ . '/../auth/views/about.php';
            break;
        case 'authenticate':
            include __DIR__. '/../auth/controllers/authenticate-controller.php';
            break;
        case 'log-in':
            include __DIR__. '/../auth/views/log-in.php';
            break;
    }
} elseif (in_array($page, $admin)) {
    require_once __DIR__ . '/admin.php';
} elseif (in_array($page, $organizer)) {
    require_once __DIR__ . '/';

} else {

    http_response_code(404);
    echo "404 - Page not found.";
}
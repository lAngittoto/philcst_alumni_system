<?php

$page = $_GET['page'] ?? '';
if ($page === '') {
    header('Location: home');
    exit;
}

$publicPages = ['home', 'about', 'login',];
$admin       = ['dashboard'];
$organizer   = [''];
if (in_array($page, $publicPages)) {
    
    switch ($page) {

        case 'home':
            include __DIR__ . '/../auth/views/home.php';
            break;
        case 'about':
            include __DIR__ . '/../auth/views/about.php';
            break;
        case 'login':
            include __DIR__. '/../auth/views/login.php';


    }
} elseif (in_array($page, $admin)) {
    require_once __DIR__ . '/admin.php';
} elseif (in_array($page, $organizer)) {
    require_once __DIR__ . '/';

} else {

    http_response_code(404);
    echo "404 - Page not found.";
}
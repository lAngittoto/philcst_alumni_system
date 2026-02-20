<?php

$page = $_GET['page'] ?? '';
if ($page === '') {
    header('Location: home');
    exit;
}

$publicPages = ['home', 'about', 'news', 'login',];
$admin       = ['dashboard', 'audit-logs'];
$organizer   = [''];
if (in_array($page, $publicPages)) {
    
    switch ($page) {

        case 'home':
            include __DIR__ . '/../auth/views/home.php';
            break;
        case 'about':
            include __DIR__ . '/../auth/views/about.php';
            break;
        case 'news':
            include __DIR__. '/../auth/views/news.php';
            break;
        case 'login':
            include __DIR__. '/../auth/views/login.php';
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
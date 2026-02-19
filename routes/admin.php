<?php
if (session_status() === PHP_SESSION_NONE) session_start();

// 1. Check kung may nakalogin na 'role'
// 2. Check kung ang role ay 'admin'
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    // Kung hindi admin o hindi nakalogin, sipain pabalik sa login page
    header("Location: login");
    exit();
}

// Kapag nakalusot sa check, tsaka lang ilo-load ang routing ng admin
$page = $_GET['page'] ?? 'dashboard';

switch ($page) {
    case 'dashboard':
        include __DIR__.'/../app/admin/controllers/AdminController.php';
        break;

    default:
        http_response_code(404);
        echo "404 Page not found.";
        break;
}
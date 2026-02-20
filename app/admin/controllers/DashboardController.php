<?php

if (session_status() === PHP_SESSION_NONE) session_start();

// Baguhin ang check para tumugma sa AuthController session
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login');
    exit;
}


require_once __DIR__ . '/../views/admin-dashboard.php';
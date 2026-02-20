<?php
namespace Admin\Controllers;

use Config\Database;
use Admin\Models\AuditModel;
use PDO;

class AuditController {
    private $model;

    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        
        // Security Check
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            header('Location: login');
            exit;
        }

        // Gamitin ang Database class mo para makuha ang PDO instance
        $db = Database::getInstance();
        $this->model = new AuditModel($db);
    }

    public function index() {
        // 1. Pagination Logic
        $page       = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
        $perPage    = 100;
        $offset     = ($page - 1) * $perPage;

        // 2. Fetch Data
        $logs       = $this->model->getLogsWithAttempts($perPage, $offset);
        $total      = $this->model->getTotalCount();
        $stats      = $this->model->getAuditStats();
        $totalPages = (int)ceil($total / $perPage);

        // 3. Return data for extraction
        return compact('logs', 'total', 'stats', 'page', 'perPage', 'totalPages');
    }
}

// Execution part
$controller = new AuditController();
$data = $controller->index();

// I-extract para pumasok sa scope ng audit-logs.php
extract($data);

require_once __DIR__ . '/../views/audit-logs.php';
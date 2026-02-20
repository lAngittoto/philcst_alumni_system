<?php
namespace Admin\Models;

use PDO;

class AuditModel {
    private $db;

    public function __construct(PDO $db_conn) {
        $this->db = $db_conn;
    }

    public function getAuditStats(): array {
        $sql = "SELECT 
                    COUNT(*) as total,
                    SUM(CASE WHEN status = 'success' THEN 1 ELSE 0 END) as success,
                    SUM(CASE WHEN status IN ('invalid_password', 'account_not_found') THEN 1 ELSE 0 END) as failed,
                    SUM(CASE WHEN status = 'locked' THEN 1 ELSE 0 END) as locked
                FROM login_logs";
        $res = $this->db->query($sql)->fetch();
        
        return [
            'total'   => $res['total'] ?? 0,
            'success' => $res['success'] ?? 0,
            'failed'  => $res['failed'] ?? 0,
            'locked'  => $res['locked'] ?? 0
        ];
    }

    public function getLogsWithAttempts(int $limit, int $offset): array {
        $sql = "SELECT l.*, a.attempt_count, a.lock_until, a.last_attempt 
                FROM login_logs l 
                LEFT JOIN login_attempts a ON l.username = a.username AND l.ip_address = a.ip_address
                ORDER BY l.created_at DESC 
                LIMIT :limit OFFSET :offset";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

    public function getTotalCount(): int {
        return (int)$this->db->query("SELECT COUNT(*) FROM login_logs")->fetchColumn();
    }
}
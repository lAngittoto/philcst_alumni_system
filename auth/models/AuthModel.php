<?php
namespace Auth\Models;

use PDO;

class AuthModel {
    private $db;

    public function __construct(PDO $db_conn) {
        $this->db = $db_conn;
        // Siguraduhin na ang PHP ay naka-Manila time para mag-match sa MySQL NOW()
        date_default_timezone_set('Asia/Manila');
    }

    public function getUser($username) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE username = ? LIMIT 1");
        $stmt->execute([$username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function logLogin($username, $ip, $status) {
        $stmt = $this->db->prepare("INSERT INTO login_logs (username, ip_address, status) VALUES (?, ?, ?)");
        $stmt->execute([$username, $ip, $status]);
    }

    public function updateAttempts($username, $ip) {
        $stmt = $this->db->prepare("SELECT * FROM login_attempts WHERE username = ? AND ip_address = ?");
        $stmt->execute([$username, $ip]);
        $attempt = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($attempt) {
            $new_count = $attempt['attempt_count'] + 1;
            // Kung 5 o higit na ang mali, i-lock ng 15 minutes
            $lock_until = ($new_count >= 5) ? date('Y-m-d H:i:s', strtotime('+15 minutes')) : null;
            
            $stmt = $this->db->prepare("UPDATE login_attempts SET attempt_count = ?, last_attempt = NOW(), lock_until = ? WHERE id = ?");
            $stmt->execute([$new_count, $lock_until, $attempt['id']]);
        } else {
            // First time magkamali
            $stmt = $this->db->prepare("INSERT INTO login_attempts (username, ip_address, attempt_count) VALUES (?, ?, 1)");
            $stmt->execute([$username, $ip]);
        }
    }

    public function clearAttempts($username, $ip) {
        $stmt = $this->db->prepare("DELETE FROM login_attempts WHERE username = ? AND ip_address = ?");
        $stmt->execute([$username, $ip]);
    }

    public function isLocked($username, $ip) {
        // Chine-check kung may lock_until na mas malaki sa oras ngayon (NOW())
        $stmt = $this->db->prepare("SELECT lock_until FROM login_attempts WHERE username = ? AND ip_address = ? AND lock_until > NOW()");
        $stmt->execute([$username, $ip]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
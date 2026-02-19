<?php
namespace Auth\Controllers;

use Auth\Models\AuthModel;
use PDO;

class AuthController {
    private $model;

    public function __construct(PDO $db) {
        $this->model = new AuthModel($db);
    }

    public function login($username, $password) {
        if (session_status() === PHP_SESSION_NONE) session_start();

        $ip = $_SERVER['REMOTE_ADDR'];
        $username = trim($username);
        $password = trim($password);

        // 1. Check kung Locked ang User/IP
        if ($this->model->isLocked($username, $ip)) {
            $this->model->logLogin($username, $ip, 'locked');
            return "Too many failed attempts. Account locked for 15 mins.";
        }

        // 2. Hanapin ang User
        $user = $this->model->getUser($username);

        if (!$user) {
            // Kahit walang user, i-update ang attempts laban sa IP para iwas brute force
            $this->model->updateAttempts($username, $ip);
            $this->model->logLogin($username, $ip, 'account_not_found');
            return "Invalid username or password.";
        }

        // 3. Verify Password
        if (password_verify($password, $user['password'])) {
            // Success! Burahin ang attempts record
            $this->model->clearAttempts($username, $ip);
            $this->model->logLogin($username, $ip, 'success');

            // Set Session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            
            // Redirect sa dashboard gamit ang malinis na URL (.htaccess)
            header("Location: dashboard");
            exit();
        } else {
            // Mali ang password, dagdag sa attempt count
            $this->model->updateAttempts($username, $ip);
            $this->model->logLogin($username, $ip, 'invalid_password');
            return "Invalid username or password.";
        }
    }
}
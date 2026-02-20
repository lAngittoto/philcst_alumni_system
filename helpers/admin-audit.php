<?php
/**
 * Admin Pagination & Audit Helper
 */

if (!function_exists('h')) {
    function h(mixed $v): string {
        return htmlspecialchars((string)($v ?? ''), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}

/**
 * Generate URL for pagination preserving existing GET params
 */
function getPageUrl(int $p): string {
    return '?' . http_build_query(array_merge($_GET, ['page' => $p]));
}

/**
 * Get CSS mapping for status badges
 */
function getStatusBadge(string $status): array {
    $map = [
        'success'           => ['bg'=>'bg-green-100', 'text'=>'text-green-700', 'dot'=>'bg-green-500', 'label'=>'Success'],
        'invalid_password'  => ['bg'=>'bg-red-100',   'text'=>'text-red-700',   'dot'=>'bg-red-500',   'label'=>'Invalid Password'],
        'account_not_found' => ['bg'=>'bg-blue-100',  'text'=>'text-blue-700',  'dot'=>'bg-blue-500',  'label'=>'Not Found'],
        'locked'            => ['bg'=>'bg-[#7a3f91]/10', 'text'=>'text-[#7a3f91]', 'dot'=>'bg-[#7a3f91]', 'label'=>'Locked'],
    ];
    return $map[$status] ?? ['bg'=>'bg-gray-100', 'text'=>'text-gray-600', 'dot'=>'bg-gray-400', 'label'=>$status];
}

/**
 * Logic para sa Smart Ellipsis Pagination
 */
function getPaginationNumbers(int $currentPage, int $totalPages): array {
    $window = 2;
    $toShow = [];
    for ($p = 1; $p <= $totalPages; $p++) {
        if ($p === 1 || $p === $totalPages || abs($p - $currentPage) <= $window) {
            $toShow[] = $p;
        }
    }
    return $toShow;
}
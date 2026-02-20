<?php
// --- 1. LOGIC & AJAX HANDLER ---
$page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
$perPage = 100; // 100 per page gaya ng original mo
$offset = ($page - 1) * $perPage;

// Mapping para sa Status
$statusMap = [
    'success'           => ['bg' => 'bg-green-100', 'text' => 'text-green-700', 'label' => 'Success'],
    'invalid_password'  => ['bg' => 'bg-red-100',   'text' => 'text-red-700',   'label' => 'Invalid Password'],
    'account_not_found' => ['bg' => 'bg-blue-100',  'text' => 'text-blue-700',  'label' => 'Not Found'],
    'locked'            => ['bg' => 'bg-orange-100', 'text' => 'text-orange-700', 'label' => 'Temporary Lock'],
];

if (!function_exists('h')) {
    function h(mixed $v): string
    {
        return htmlspecialchars((string)($v ?? ''), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }
}

// AJAX Check
if (isset($_GET['ajax'])) {
    ob_clean();
    $rowsHtml = '';
    foreach ($logs as $index => $row) {
        $badge = $statusMap[$row['status']] ?? ['bg' => 'bg-gray-100', 'text' => 'text-gray-600', 'label' => $row['status']];
        $rowNum = $offset + $index + 1;
        $rowsHtml .= "
        <tr class='hover:bg-[#f2eaf7]/40 transition-colors'>
            <td class='px-6 py-4 text-gray-400 font-mono text-[10px]'>$rowNum</td>
            <td class='px-6 py-4 font-black text-xs uppercase text-gray-800'>" . h($row['username'] ?? '—') . "</td>
            <td class='px-6 py-4 font-mono text-xs text-gray-500'>" . h($row['ip_address']) . "</td>
            <td class='px-6 py-4 text-center font-bold text-xs'>" . ($row['attempt_count'] ?? 0) . "</td>
            <td class='px-6 py-4 font-mono text-[10px] text-gray-500 uppercase'>" . ($row['last_attempt'] ? date('M d, g:i A', strtotime($row['last_attempt'])) : '—') . "</td>
            <td class='px-6 py-4 font-black text-[10px] text-orange-600 uppercase'>" . ($row['lock_until'] ? 'LOCKED: ' . date('g:i A', strtotime($row['lock_until'])) : '—') . "</td>
            <td class='px-6 py-4 text-center'>
                <span class='px-3 py-1 rounded-full text-[9px] font-black uppercase {$badge['bg']} {$badge['text']}'>" . h($badge['label']) . "</span>
            </td>
            <td class='px-6 py-4 font-mono text-[10px] text-gray-400'>" . date('Y-m-d H:i', strtotime($row['created_at'])) . "</td>
        </tr>";
    }

    // Sliding Pagination Logic (Max 5 visible)
    $paginationHtml = '';
    $maxVisible = 5;
    $start = max(1, min($page - floor($maxVisible / 2), $totalPages - $maxVisible + 1));
    $end = min($totalPages, $start + $maxVisible - 1);
    if ($start < 1) $start = 1;

    for ($i = $start; $i <= $end; $i++) {
        $active = ($i == $page) ? 'bg-main-purple text-white' : 'text-gray-500 hover:bg-[#f2eaf7]';
        $paginationHtml .= "<button onclick='changePage($i)' class='w-8 h-8 flex items-center justify-center rounded-lg text-xs font-black transition-all $active'>$i</button>";
    }

    echo json_encode([
        'rows' => empty($rowsHtml) ? '<tr><td colspan="8" class="text-center py-16 text-gray-400 font-bold">No records found.</td></tr>' : $rowsHtml,
        'pagination' => $paginationHtml,
        'hasPrev' => ($page > 1),
        'hasNext' => ($page < $totalPages),
        'prevPage' => $page - 1,
        'nextPage' => $page + 1
    ]);
    exit;
}

ob_start();
require_once __DIR__ . '/../../../includes/sidebar.php';
?>

<style>
    html {
        scroll-behavior: smooth;
    }

    .custom-scrollbar::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: #f2eaf7;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #c59dd9;
        border-radius: 10px;
    }

    .bg-main-purple {
        background-color: #7a3f91;
    }

    .text-main-purple {
        color: #7a3f91;
    }
</style>

<main class="ml-72 p-10 bg-gray-50 min-h-screen">
    <div class="mb-8 flex items-center gap-4">
        <div class="p-3 bg-main-purple rounded-xl text-white shadow-lg">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.1" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            </svg>
        </div>
        <div>
            <h1 class="text-2xl font-black text-[#2b0d3e] tracking-tight">Security & Audit Logs</h1>
            <p class="text-gray-500 text-sm">Monitor system integrity and administrative activities</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-8">
        <div class="bg-white rounded-2xl border-l-4 border-main-purple shadow-sm p-5 flex items-center gap-4">
            <div class="w-12 h-12 rounded-lg bg-[#f2eaf7] grid place-items-center text-main-purple">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                    <circle cx="9" cy="7" r="4" />
                </svg>
            </div>
            <div>
                <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Total Events</p>
                <p class="text-2xl font-black text-[#2b0d3e] mt-1"><?= number_format($stats['total'] ?? 0) ?></p>
            </div>
        </div>
        <div class="bg-white rounded-2xl border-l-4 border-green-500 shadow-sm p-5 flex items-center gap-4">
            <div class="w-12 h-12 rounded-lg bg-green-50 grid place-items-center text-green-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <polyline points="20 6 9 17 4 12" />
                </svg>
            </div>
            <div>
                <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Successful</p>
                <p class="text-2xl font-black text-[#2b0d3e] mt-1"><?= number_format($stats['success'] ?? 0) ?></p>
            </div>
        </div>
        <div class="bg-white rounded-2xl border-l-4 border-red-500 shadow-sm p-5 flex items-center gap-4">
            <div class="w-12 h-12 rounded-lg bg-red-50 grid place-items-center text-red-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" />
                    <line x1="15" y1="9" x2="9" y2="15" />
                    <line x1="9" y1="9" x2="15" y2="15" />
                </svg>
            </div>
            <div>
                <p class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Failed / Locked</p>
                <p class="text-2xl font-black text-[#2b0d3e] mt-1"><?= number_format(($stats['failed'] ?? 0) + ($stats['locked'] ?? 0)) ?></p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-2xl border border-gray-200 shadow-lg flex flex-col overflow-hidden">
        <div class="px-6 py-5 bg-white border-b border-gray-100">
            <p class="font-black text-gray-800 text-base">Login Activity Log</p>
        </div>

        <div class="overflow-auto custom-scrollbar" style="max-height: 560px;">
            <table class="w-full text-sm border-collapse">
                <thead>
                    <tr class="sticky top-0 z-20 bg-[#f2eaf7]">
                        <th class="px-6 py-4 text-left text-[10px] font-black uppercase tracking-widest text-main-purple border-b border-[#c59dd9]">#</th>
                        <th class="px-6 py-4 text-left text-[10px] font-black uppercase tracking-widest text-main-purple border-b border-[#c59dd9]">User Identity</th>
                        <th class="px-6 py-4 text-left text-[10px] font-black uppercase tracking-widest text-main-purple border-b border-[#c59dd9]">IP Address</th>
                        <th class="px-6 py-4 text-center text-[10px] font-black uppercase tracking-widest text-main-purple border-b border-[#c59dd9]">Attempts</th>
                        <th class="px-6 py-4 text-left text-[10px] font-black uppercase tracking-widest text-main-purple border-b border-[#c59dd9]">Last Attempt</th>
                        <th class="px-6 py-4 text-left text-[10px] font-black uppercase tracking-widest text-main-purple border-b border-[#c59dd9]">Lock Until</th>
                        <th class="px-6 py-4 text-center text-[10px] font-black uppercase tracking-widest text-main-purple border-b border-[#c59dd9]">Status</th>
                        <th class="px-6 py-4 text-left text-[10px] font-black uppercase tracking-widest text-main-purple border-b border-[#c59dd9]">Created At</th>
                    </tr>
                </thead>
                <tbody id="logs-body" class="divide-y divide-gray-50 bg-white">
                    <?php if (empty($logs)): ?>
                        <tr>
                            <td colspan="8" class="text-center py-16 text-gray-400 font-bold">No records found.</td>
                        </tr>
                        <?php else:
                        foreach ($logs as $index => $row):
                            $badge = $statusMap[$row['status']] ?? ['bg' => 'bg-gray-100', 'text' => 'text-gray-600', 'label' => $row['status']];
                        ?>
                            <tr class="hover:bg-[#f2eaf7]/40 transition-colors">
                                <td class="px-6 py-4 text-gray-400 font-mono text-[10px]"><?= $offset + $index + 1 ?></td>
                                <td class="px-6 py-4 font-black text-xs uppercase text-gray-800"><?= h($row['username'] ?? '—') ?></td>
                                <td class="px-6 py-4 font-black text-xs text-gray-500"><?= h($row['ip_address']) ?></td>
                                <td class="px-6 py-4 text-center text-xs">
                                    <span class="<?= ($row['attempt_count'] >= 5) ? 'text-red-600 bg-red-100 px-2 py-1 rounded-md font-black' : 'font-bold text-gray-800' ?>">
                                        <?= $row['attempt_count'] ?? 0 ?>
                                    </span>
                                </td>
                                <td class="px-6 py-4 font-black text-[10px] text-gray-800 uppercase"><?= $row['last_attempt'] ? date('M d, g:i A', strtotime($row['last_attempt'])) : '—' ?></td>
                                <td class="px-6 py-4 font-black text-[10px] text-orange-600 uppercase"><?= $row['lock_until'] ? 'LOCKED: ' . date('g:i A', strtotime($row['lock_until'])) : '—' ?></td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 rounded-full text-[9px] font-black uppercase <?= $badge['bg'] ?> <?= $badge['text'] ?>"><?= h($badge['label']) ?></span>
                                </td>
                                <td class="px-6 py-4 font-black text-[10px] text-gray-800"><?= date('Y-m-d H:i', strtotime($row['created_at'])) ?></td>
                            </tr>
                    <?php endforeach;
                    endif; ?>
                </tbody>
            </table>
        </div>

        <div class="flex items-center justify-between px-6 py-4 bg-gray-50 border-t border-gray-100">
            <p class="text-[10px] font-black text-gray-400 uppercase tracking-widest italic">
                <span class="text-main-purple">●</span> See recent logs
            </p>

            <div id="pagination-container" class="flex items-center gap-2">
                <button type="button" id="btn-prev" onclick="changePage(currentPage - 1)" class="px-3 py-2 rounded-lg border border-[#c59dd9] text-main-purple text-[10px] font-black uppercase disabled:opacity-20 transition-all hover:bg-main-purple hover:text-white" <?= ($page <= 1) ? 'disabled' : '' ?>>
                    Prev
                </button>

                <div id="pagination-numbers" class="flex items-center gap-1">
                    <?php
                    $maxVisible = 5;
                    $start = max(1, min($page - floor($maxVisible / 2), $totalPages - $maxVisible + 1));
                    $end = min($totalPages, $start + $maxVisible - 1);
                    if ($start < 1) $start = 1;
                    for ($i = $start; $i <= $end; $i++): ?>
                        <button onclick="changePage(<?= $i ?>)" class="w-8 h-8 flex items-center justify-center rounded-lg text-xs font-black transition-all <?= $i == $page ? 'bg-main-purple text-white' : 'text-gray-500 hover:bg-[#f2eaf7]' ?>">
                            <?= $i ?>
                        </button>
                    <?php endfor; ?>
                </div>

                <button type="button" id="btn-next" onclick="changePage(currentPage + 1)" class="px-3 py-2 rounded-lg border border-[#c59dd9] text-main-purple text-[10px] font-black uppercase disabled:opacity-20 transition-all hover:bg-main-purple hover:text-white" <?= ($page >= $totalPages) ? 'disabled' : '' ?>>
                    Next
                </button>
            </div>
        </div>
    </div>
</main>

<script>
    let currentPage = <?= $page ?>;
    let totalPages = <?= $totalPages ?>;

    function changePage(page) {
        if (page < 1 || page > totalPages || page === currentPage) return;

        fetch(`?ajax=1&page=${page}`)
            .then(res => res.json())
            .then(data => {
                // Update table
                document.getElementById('logs-body').innerHTML = data.rows;
                // Update numbers (sliding 1-5, 2-6, etc.)
                document.getElementById('pagination-numbers').innerHTML = data.pagination;

                currentPage = page;

                // Update button states
                document.getElementById('btn-prev').disabled = !data.hasPrev;
                document.getElementById('btn-next').disabled = !data.hasNext;

                // Scroll table to top smoothly
                document.querySelector('.overflow-auto').scrollTop = 0;
            });
    }
</script>

<?php
$content = ob_get_clean();
include __DIR__ . '/../../../includes/structure.php';
?>
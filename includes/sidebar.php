<aside class="fixed left-0 top-0 h-screen w-72 bg-[#2b0d3e] flex flex-col z-50 shadow-2xl border-r border-white/5">
    <?php $current_uri = $_SERVER['REQUEST_URI']; ?>
    
    <div class="p-6 mb-4 flex flex-col items-center border-b border-white/5">
        <div class="w-16 h-16 bg-white/10 backdrop-blur-lg rounded-2xl p-2 mb-3 border border-white/20 shadow-inner flex items-center justify-center">
            <img src="/philcst-alumni-system/public/assets/images/logo.png" 
                 alt="PHILCST Logo" 
                 class="h-10 w-auto object-contain filter drop-shadow-md">
        </div>
        <div class="text-center">
            <h1 class="text-white font-black text-xs uppercase tracking-[0.2em]">Philcst Alumni Connect</h1>
            <p class="text-[#c59dd9] text-[9px] font-bold uppercase tracking-widest opacity-80 mt-1">Portal Administrator</p>
        </div>
    </div>

    <nav class="flex-1 px-4 space-y-2 overflow-y-auto">
        <a href="dashboard" class="group flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 
            <?= (strpos($current_uri, 'dashboard') !== false) ? 'bg-white/10 backdrop-blur-md text-white border border-white/10 shadow-lg' : 'text-white/70 hover:bg-white/5 hover:text-white' ?>">
            <div class="w-7 h-7 flex items-center justify-center rounded-lg <?= (strpos($current_uri, 'dashboard') !== false) ? 'bg-[#7a3f91] shadow-lg shadow-[#7a3f91]/30 text-white' : 'bg-white/5 group-hover:bg-[#7a3f91] group-hover:text-white' ?> transition-all">
                <i class="fa-solid fa-chart-pie text-xs"></i>
            </div>
            <span class="font-bold tracking-tight text-[13px]">Dashboard</span>
        </a>

        <a href="user-management" class="group flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 
            <?= (strpos($current_uri, 'user-management') !== false) ? 'bg-white/10 backdrop-blur-md text-white border border-white/10 shadow-lg' : 'text-white/70 hover:bg-white/5 hover:text-white' ?>">
            <div class="w-7 h-7 flex items-center justify-center rounded-lg <?= (strpos($current_uri, 'user-management') !== false) ? 'bg-[#7a3f91] shadow-lg shadow-[#7a3f91]/30 text-white' : 'bg-white/5 group-hover:bg-[#7a3f91] group-hover:text-white' ?> transition-all">
                <i class="fa-solid fa-user-shield text-xs"></i>
            </div>
            <span class="font-medium tracking-tight text-[13px]">Member Management</span>
        </a>

        <a href="employment-tracking" class="group flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 
            <?= (strpos($current_uri, 'employment-tracking') !== false) ? 'bg-white/10 backdrop-blur-md text-white border border-white/10 shadow-lg' : 'text-white/70 hover:bg-white/5 hover:text-white' ?>">
            <div class="w-7 h-7 flex items-center justify-center rounded-lg <?= (strpos($current_uri, 'employment-tracking') !== false) ? 'bg-[#7a3f91] shadow-lg shadow-[#7a3f91]/30 text-white' : 'bg-white/5 group-hover:bg-[#7a3f91] group-hover:text-white' ?> transition-all">
                <i class="fa-solid fa-briefcase-clock text-xs"></i>
            </div>
            <span class="font-medium tracking-tight text-[13px]">Employment Tracking</span>
        </a>

        <a href="events-jobs" class="group flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 
            <?= (strpos($current_uri, 'events-jobs') !== false) ? 'bg-white/10 backdrop-blur-md text-white border border-white/10 shadow-lg' : 'text-white/70 hover:bg-white/5 hover:text-white' ?>">
            <div class="w-7 h-7 flex items-center justify-center rounded-lg <?= (strpos($current_uri, 'events-jobs') !== false) ? 'bg-[#7a3f91] shadow-lg shadow-[#7a3f91]/30 text-white' : 'bg-white/5 group-hover:bg-[#7a3f91] group-hover:text-white' ?> transition-all">
                <i class="fa-solid fa-briefcase text-xs"></i>
            </div>
            <span class="font-medium tracking-tight text-[13px]">Careers & Engagements</span>
        </a>

        <a href="yearbook" class="group flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 
            <?= (strpos($current_uri, 'yearbook') !== false) ? 'bg-white/10 backdrop-blur-md text-white border border-white/10 shadow-lg' : 'text-white/70 hover:bg-white/5 hover:text-white' ?>">
            <div class="w-7 h-7 flex items-center justify-center rounded-lg <?= (strpos($current_uri, 'yearbook') !== false) ? 'bg-[#7a3f91] shadow-lg shadow-[#7a3f91]/30 text-white' : 'bg-white/5 group-hover:bg-[#7a3f91] group-hover:text-white' ?> transition-all">
                <i class="fa-solid fa-book-open text-xs"></i>
            </div>
            <span class="font-medium tracking-tight text-[13px]">Yearbook Repository</span>
        </a>

        <a href="reports" class="group flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 
            <?= (strpos($current_uri, 'reports') !== false) ? 'bg-white/10 backdrop-blur-md text-white border border-white/10 shadow-lg' : 'text-white/70 hover:bg-white/5 hover:text-white' ?>">
            <div class="w-7 h-7 flex items-center justify-center rounded-lg <?= (strpos($current_uri, 'reports') !== false) ? 'bg-[#7a3f91] shadow-lg shadow-[#7a3f91]/30 text-white' : 'bg-white/5 group-hover:bg-[#7a3f91] group-hover:text-white' ?> transition-all">
                <i class="fa-solid fa-file-export text-xs"></i>
            </div>
            <span class="font-medium tracking-tight text-[13px]">Generate Reports</span>
        </a>

        <a href="audit-logs" class="group flex items-center gap-3 px-4 py-3 rounded-xl transition-all duration-300 
            <?= (strpos($current_uri, 'audit-logs') !== false) ? 'bg-white/10 backdrop-blur-md text-white border border-white/10 shadow-lg' : 'text-white/70 hover:bg-white/5 hover:text-white' ?>">
            <div class="w-7 h-7 flex items-center justify-center rounded-lg <?= (strpos($current_uri, 'audit-logs') !== false) ? 'bg-[#7a3f91] shadow-lg shadow-[#7a3f91]/30 text-white' : 'bg-white/5 group-hover:bg-[#7a3f91] group-hover:text-white' ?> transition-all">
                <i class="fa-solid fa-database text-xs"></i>
            </div>
            <span class="font-medium tracking-tight text-[13px]">Audit Logs</span>
        </a>
    </nav>

    <div class="p-4 mb-10">
        <a href="/philcst-alumni-system/auth/controllers/logout.php" class="flex items-center justify-between gap-3 px-5 py-3 rounded-xl bg-[#7a3f91] border border-white/10 text-white/80 hover:bg-white/10 transition-all duration-300 group shadow-lg">
            <div class="flex items-center gap-3">
                <div class="w-7 h-7 flex items-center justify-center rounded-lg bg-white/5">
                    <i class="fa-solid fa-power-off text-xs group-hover:text-[#c59dd9] transition-colors"></i>
                </div>
                <span class="font-black uppercase tracking-[0.2em] text-[9px]">Logout</span>
            </div>
            <i class="fa-solid fa-chevron-right text-[8px] opacity-30 group-hover:translate-x-1 transition-transform"></i>
        </a>
    </div>
</aside>
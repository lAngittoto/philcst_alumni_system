<aside class="fixed left-0 top-0 h-screen w-72 bg-[#2b0d3e] flex flex-col z-50 shadow-2xl border-r border-white/5">
    
    <div class="p-8 mb-6 flex flex-col items-center border-b border-white/5">
        <div class="w-20 h-20 bg-white/10 backdrop-blur-lg rounded-2xl p-2 mb-4 border border-white/20 shadow-inner flex items-center justify-center">
            <img src="/philcst-alumni-system/public/assets/images/logo.png" 
                 alt="PHILCST Logo" 
                 class="h-12 w-auto object-contain filter drop-shadow-md">
        </div>
        <div class="text-center">
            <h1 class="text-white font-black text-sm uppercase tracking-[0.2em]">Philcst Alumni Connect</h1>
            <p class="text-[#7a3f91] text-[10px] font-bold uppercase tracking-widest opacity-80 mt-1">Portal Administrator</p>
        </div>
    </div>

<nav class="flex-1 px-4 space-y-3">
    <a href="dashboard" class="group flex items-center gap-4 px-4 py-4 rounded-2xl bg-white/10 backdrop-blur-md text-white border border-white/10 shadow-lg transition-all duration-300 hover:bg-white/20">
        <div class="w-8 h-8 flex items-center justify-center rounded-xl bg-[#7a3f91] shadow-lg shadow-[#7a3f91]/30 text-white">
            <i class="fa-solid fa-chart-pie text-sm"></i>
        </div>
        <span class="font-bold tracking-tight text-sm">Dashboard</span>
    </a>

    <a href="user-management" class="group flex items-center gap-4 px-4 py-4 rounded-2xl text-white/70 hover:bg-white/5 hover:text-white transition-all duration-300">
        <div class="w-8 h-8 flex items-center justify-center rounded-xl bg-white/5 group-hover:bg-[#7a3f91] group-hover:text-white transition-all">
            <i class="fa-solid fa-user-shield text-sm"></i>
        </div>
        <span class="font-medium tracking-tight text-sm">Member Management</span>
    </a>

    <a href="events-jobs" class="group flex items-center gap-4 px-4 py-4 rounded-2xl text-white/70 hover:bg-white/5 hover:text-white transition-all duration-300">
        <div class="w-8 h-8 flex items-center justify-center rounded-xl bg-white/5 group-hover:bg-[#7a3f91] group-hover:text-white transition-all">
            <i class="fa-solid fa-briefcase text-sm"></i>
        </div>
        <span class="font-medium tracking-tight text-sm">Careers & Engagements</span>
    </a>

    <a href="yearbook" class="group flex items-center gap-4 px-4 py-4 rounded-2xl text-white/70 hover:bg-white/5 hover:text-white transition-all duration-300">
        <div class="w-8 h-8 flex items-center justify-center rounded-xl bg-white/5 group-hover:bg-[#7a3f91] group-hover:text-white transition-all">
            <i class="fa-solid fa-book-open text-sm"></i>
        </div>
        <span class="font-medium tracking-tight text-sm">Yearbook Repository</span>
    </a>

    <a href="audit-logs" class="group flex items-center gap-4 px-4 py-4 rounded-2xl text-white/70 hover:bg-white/5 hover:text-white transition-all duration-300">
        <div class="w-8 h-8 flex items-center justify-center rounded-xl bg-white/5 group-hover:bg-[#7a3f91] group-hover:text-white transition-all">
            <i class="fa-solid fa-database text-sm"></i>
        </div>
        <span class="font-medium tracking-tight text-sm">Audit Logs</span>
    </a>
</nav>

    <div class="p-6">
        <a href="/philcst-alumni-system/auth/controllers/logout.php" class="flex items-center justify-between gap-4 px-6 py-4 rounded-2xl bg-white/[0.25] backdrop-blur-md border border-white/10 text-white/80 hover:bg-white/[0.35] transition-all duration-300 group shadow-lg">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 flex items-center justify-center rounded-lg bg-[#2b0d3e]/50">
                    <i class="fa-solid fa-power-off text-sm group-hover:text-[#c59dd9] transition-colors"></i>
                </div>
                <span class="font-black uppercase tracking-[0.2em] text-[10px]">Logout</span>
            </div>
            <i class="fa-solid fa-chevron-right text-[8px] opacity-30 group-hover:translate-x-1 transition-transform"></i>
        </a>
    </div>

</aside>
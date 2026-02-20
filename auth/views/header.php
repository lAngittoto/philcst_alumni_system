<nav id="navbar" class="fixed top-0 z-50 w-full px-6 py-4 bg-[#f2eaf7] shadow-sm transition-all duration-300">
    <div class="flex items-center justify-between max-w-7xl mx-auto">
        <div class="flex items-center space-x-3">
            <img src="/philcst-alumni-system/public/assets/images/logo.png" alt="logo" class="h-10 md:h-12 w-auto">
            <h1 class="text-lg md:text-xl font-black text-[#2b0d3e] uppercase tracking-tighter leading-none">
                PHILCST <span class="block text-xs text-[#7a3f91]">Alumni Connect</span>
            </h1>
        </div>

        <div class="hidden md:flex items-center space-x-8 font-bold text-xs uppercase tracking-widest text-[#2b0d3e]">
            <a href="home" class="hover:text-[#7a3f91] transition-all">Home</a>
            <a href="about" class="hover:text-[#7a3f91] transition-all">About</a>
            <a href="news" class="hover:text-[#7a3f91] transition-all">News</a>
            <a href="login" class="px-8 py-2 bg-[#2b0d3e] text-white rounded hover:bg-[#7a3f91] transition-all transform">Login</a>
        </div>

        <button id="menu-btn" class="md:hidden text-[#2b0d3e] p-2 focus:outline-none">
            <i class="fa-solid fa-bars text-2xl"></i>
        </button>
    </div>

    <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-[#f2eaf7] shadow-2xl p-6 flex flex-col space-y-4 md:hidden border-t border-[#c59dd9]/20">
        <a href="home" class="text-[#2b0d3e] font-bold uppercase text-sm">Home</a>
        <a href="about" class="text-[#2b0d3e] font-bold uppercase text-sm">About</a>
        <a href="news" class="text-[#2b0d3e] font-bold uppercase text-sm">News</a>
        <a href="login" class="text-[#2b0d3e] font-bold uppercase text-sm">Login</a>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        }
    });
</script>
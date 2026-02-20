<?php
ob_start();
require_once __DIR__ . '/header.php'; 
?>
<link rel="stylesheet" href="../public/assets/css/aos.css">

<style>
    /* Professional & Extra Smooth Scrollbar */
    ::-webkit-scrollbar { width: 10px; }
    ::-webkit-scrollbar-track { background: #fdfaff; }
    ::-webkit-scrollbar-thumb { 
        background: #7a3f91; 
        border-radius: 20px;
        border: 2px solid #fdfaff;
    }
    
    /* Global Smoothness */
    html { 
        scroll-behavior: smooth; 
        overflow-x: hidden;
    }

    /* Custom line-height and text clarity */
    .news-text {
        line-height: 1.8;
        color: #1a1a1a;
        font-size: 1.05rem;
    }

    .article-divider {
        height: 1px;
        background: linear-gradient(to right, transparent, #e9d5ff, transparent);
        margin: 80px 0;
    }

    /* Page Background */
    .bg-smooth-purple {
        background-color: #fcfaff;
    }
</style>

<div class="min-h-screen bg-smooth-purple pt-44 pb-20 px-4">
    <div class="max-w-3xl mx-auto">
        
        <header class="w-full mb-20 text-center" data-aos="fade-down">
            <h1 class="text-5xl md:text-6xl font-black uppercase tracking-tighter text-[#2b0d3e]">
                Latest <span class="text-[#7a3f91]">News</span>
            </h1>
            <div class="w-24 h-1.5 bg-[#c59dd9] mx-auto mt-4 rounded-full"></div>
        </header>

        <article data-aos="fade-up">
            <div class="flex items-center gap-4 mb-6">
                <span class="text-xs font-black uppercase tracking-widest text-[#7a3f91]">Anniversary Events</span>
                <div class="h-px bg-purple-200 flex-grow"></div>
            </div>

            <div class="mb-10 overflow-hidden rounded-sm">
                <img src="/philcst-alumni-system/public/assets/images/funrun.jpg" 
                     alt="PhilCST Fun Run" 
                     class="w-full h-auto shadow-md">
            </div>

            <h2 class="text-3xl font-black text-black leading-tight mb-4 tracking-tight">
                Thirty-two years of excellence and unstoppable growth! 🏃‍♂️💨
            </h2>

            <div class="flex items-center text-xs text-gray-400 mb-8 uppercase tracking-wider">
                <span>By admin@philcst.edu.ph</span>
                <span class="mx-3">•</span>
                <span>Feb 09, 2026</span>
            </div>

            <div class="news-text space-y-6">
                <p>
                    As we celebrate our <strong>32nd Founding Anniversary</strong>, we run not just for fun; but for legacy, strength, and the vibrant spirit of PhilCST.
                </p>

                <div class="bg-[#7a3f91] rounded-sm p-6 my-8 shadow-xl text-white transform transition hover:scale-[1.01]">
                    <p class="text-[10px] font-black uppercase tracking-[0.2em] mb-4 text-purple-200 text-center md:text-left">Event Schedule</p>
                    <ul class="space-y-3 text-sm font-medium">
                        <li class="flex items-center gap-3"><span>📅</span> February 09, 2026 (Monday)</li>
                        <li class="flex items-center gap-3"><span>⏰</span> 4:00 AM Call Time</li>
                        <li class="flex items-center gap-3"><span>📍</span> START: Bued Bypass Rd.</li>
                        <li class="flex items-center gap-3"><span>🏁</span> FINISH: PhilCST Grounds</li>
                    </ul>
                </div>

                <p>
                    Let the colors fly, the foam rise, and the celebration begin! It's time to show the community the energy of a true PhilCSTian.
                </p>

                <div class="pt-6 flex flex-wrap gap-4 font-bold text-[#7a3f91] italic text-xs uppercase tracking-tighter">
                    <span>#TatakPHILCST</span>
                    <span>#TatakUBE</span>
                    <span>#YourFutureStartsHere</span>
                </div>
            </div>
        </article>

        <div class="article-divider"></div>

        <article data-aos="fade-up">
            <div class="flex items-center gap-4 mb-6">
                <span class="text-xs font-black uppercase tracking-widest text-[#7a3f91]">Campus Events</span>
                <div class="h-px bg-purple-200 flex-grow"></div>
            </div>

            <div class="mb-10 overflow-hidden rounded-sm">
                <img src="/philcst-alumni-system/public/assets/images/rob.jpg" 
                     alt="Rob Deniel Concert" 
                     class="w-full h-auto shadow-md">
            </div>

            <h2 class="text-3xl font-black text-black leading-tight mb-4 tracking-tight">
                Brace yourselves for a night of heartfelt songs and kilig moments! 🌹
            </h2>

            <div class="flex items-center text-xs text-gray-400 mb-8 uppercase tracking-wider">
                <span>By admin@philcst.edu.ph</span>
                <span class="mx-3">•</span>
                <span>Feb 14, 2026</span>
            </div>

            <div class="news-text space-y-6">
                <p>
                    Get ready to fall in love with the music as <strong class="text-black">ROB DENIEL</strong> takes over our Students’ Night: Pre-Valentine Concert at the Calasiao Sports Complex!
                </p>

                <div class="bg-[#7a3f91] rounded-sm p-6 my-8 shadow-xl text-white transform transition hover:scale-[1.01]">
                    <p class="text-[10px] font-black uppercase tracking-[0.2em] mb-4 text-purple-200 text-center md:text-left">Entry Requirements</p>
                    <ul class="space-y-3 text-sm font-medium">
                        <li class="flex items-center gap-3"><span>🪪</span> Current School ID</li>
                        <li class="flex items-center gap-3"><span>🎫</span> Foundation 2026 Ticket</li>
                    </ul>
                    <p class="mt-4 text-[11px] italic text-purple-100 border-t border-purple-400/30 pt-3">Exclusive for currently-enrolled PHILCST students only.</p>
                </div>

                <p>
                    Sing your hearts out, feel every lyric, and let the music bring us all together because this is more than a concert — this is a night you don’t want to miss!
                </p>

                <div class="pt-6 flex flex-wrap gap-4 font-bold text-[#7a3f91] italic text-xs uppercase tracking-tighter">
                    <span>#TatakPHILCST</span>
                    <span>#TatakUBE</span>
                    <span>#YourFutureStartsHere</span>
                </div>
            </div>
        </article>

    </div>
</div>

<button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
        class="fixed bottom-8 right-8 bg-[#7a3f91] text-white p-4 rounded-full shadow-2xl hover:bg-[#5a2e6b] transition-all transform hover:-translate-y-1 z-50">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
    </svg>
</button>

<script src="/philcst-alumni-system/public/assets/js/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 80,
        easing: 'ease-in-out-cubic'
    });
</script>

<?php
$content = ob_get_clean();
include __DIR__ . '/../../includes/structure.php';
?>
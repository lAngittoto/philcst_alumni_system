<?php
ob_start();
?>
<link rel="stylesheet" href="../public/assets/css/aos.css">
<div class="overflow-x-hidden font-sans antialiased bg-[#f2eaf7]">
    <?php
    require_once __DIR__ . '/header.php';
    ?>

    <main>
        <section class="relative min-h-screen pt-20 flex items-center justify-center bg-[#2b0d3e] overflow-hidden">
            <img src="/philcst-alumni-system/public/assets/images/philcst-img.jpg" alt="philcst-img" class="absolute inset-0 w-full h-full object-contain opacity-50">

            <div class="relative z-10 px-6 w-full max-w-4xl mx-auto text-center">
                <div class="p-8 md:p-12 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 shadow-2xl">
                    <i class="fa-solid fa-graduation-cap text-5xl text-[#c59dd9] mb-4"></i>
                    <h1 class="text-xl md:text-2xl font-bold text-[#c59dd9] uppercase tracking-[0.3em] mb-4">Official Alumni Platform</h1>
                    <h2 class="text-3xl md:text-6xl font-black text-white leading-tight uppercase tracking-tighter mb-6">
                        Connecting Alumni<br>Building Community
                    </h2>
                    <p class="text-base md:text-lg text-white/90 font-medium max-w-2xl mx-auto leading-relaxed">
                        The Philippine College of Science and Technology’s digital home for alumni. Reconnect with batchmates, explore career opportunities, and stay connected with your alma mater.
                    </p>
                </div>
            </div>
        </section>
<section class="py-24 px-6 max-w-7xl mx-auto">
    <div class="text-center mb-20" data-aos="fade-up">
        <h2 class="text-4xl font-black text-[#2b0d3e] uppercase tracking-tight">Everything You Need to Stay Connected</h2>
        <p class="mt-4 text-[#7a3f91] font-medium text-lg italic">A digital hub to keep alumni connected, informed, and engaged.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-10">

        <div class="p-10 bg-white shadow-xl rounded-xl border-b-4 border-[#c59dd9] transition-all duration-300 hover:scale-110 cursor-pointer group"
             data-aos="fade-up" 
             data-aos-delay="100">
            <i class="fa-solid fa-id-badge text-4xl text-[#7a3f91] mb-6 group-hover:rotate-6 transition-transform"></i>
            <h3 class="text-2xl font-black text-[#2b0d3e] mb-4 uppercase">Alumni Profiles</h3>
            <p class="text-gray-500 font-medium leading-relaxed italic">Update your professional and academic journey with our secure alumni profiles.</p>
        </div>

        <div class="p-10 bg-white shadow-xl rounded-xl border-b-4 border-[#7a3f91] transition-all duration-300 hover:scale-110 cursor-pointer group"
             data-aos="fade-up" 
             data-aos-delay="300">
            <i class="fa-solid fa-calendar-check text-4xl text-[#7a3f91] mb-6 group-hover:rotate-6 transition-transform"></i>
            <h3 class="text-2xl font-black text-[#2b0d3e] mb-4 uppercase">Events & Reunions</h3>
            <p class="text-gray-500 font-medium leading-relaxed italic">Never miss campus events, batch reunions, and workshops.</p>
        </div>

        <div class="p-10 bg-white shadow-xl rounded-xl border-b-4 border-[#2b0d3e] transition-all duration-300 hover:scale-110 cursor-pointer group"
             data-aos="fade-up" 
             data-aos-delay="500">
            <i class="fa-solid fa-briefcase text-4xl text-[#7a3f91] mb-6 group-hover:rotate-6 transition-transform"></i>
            <h3 class="text-2xl font-black text-[#2b0d3e] mb-4 uppercase">Job Opportunities</h3>
            <p class="text-gray-500 font-medium leading-relaxed italic">Discover career opportunities posted by alumni and partner companies.</p>
        </div>

    </div>
</section>

<script src="/philcst-alumni-system/public/assets/js/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 1000,
            once: true,
            easing: 'ease-out-back' // Swabe ang "bounce" nito, PPT style!
        });
    });
</script>
    </main>

    <footer class="bg-[#2b0d3e] text-white pt-20 pb-10 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-12 border-b border-white/10 pb-12 mb-10 text-center md:text-left">
            <div class="space-y-4">
                <h3 class="text-2xl font-black text-[#c59dd9] uppercase italic">PHILCST Connect</h3>
                <p class="text-sm text-white/70 italic uppercase">Empowering alumni through technology.</p>
            </div>

            <div class="space-y-4">
                <p class="flex items-start justify-center md:justify-start gap-3 text-sm text-white/80 uppercase">
                    <i class="fa-solid fa-location-dot text-[#c59dd9] mt-1"></i>
                    <span>Old Nalsian Road, Nalsian, <br>Calasiao, Philippines, 2418</span>
                </p>

                <h4 class="text-[#c59dd9] font-bold uppercase text-xs tracking-widest">Contact Us</h4>
                <div class="space-y-3 text-sm italic text-white/80">
                    <p class="flex items-center justify-center md:justify-start gap-3 uppercase">
                        <i class="fa-solid fa-phone text-[#c59dd9]"></i>
                        (075) 522 8032
                    </p>
                    <p class="flex items-center justify-center md:justify-start gap-3">
                        <i class="fa-solid fa-envelope text-[#c59dd9]"></i>
                        philcstreg@yahoo.com
                    </p>
                </div>
            </div>

            <div class="space-y-4">
                <h4 class="text-[#c59dd9] font-bold uppercase text-xs tracking-widest">Social Connect</h4>
                <div class="flex items-center justify-center md:justify-start space-x-3 transition-all hover:text-[#c59dd9] group">
                    <i class="fa-brands fa-facebook text-3xl text-[#c59dd9] group-hover:scale-110 transition-transform"></i>
                    <span class="font-bold text-[10px] md:text-xs uppercase italic">Philippine College of Science and Technology</span>
                </div>
            </div>
        </div>
        <div class="text-center text-[10px] tracking-widest text-white/40 uppercase font-bold">
            © 2026 PHILCST. All Rights Reserved.
        </div>
    </footer>
</div>

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

<?php
$content = ob_get_clean();
include __DIR__ . '/../../includes/structure.php';
?>
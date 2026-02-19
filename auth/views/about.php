<?php
ob_start();
require_once __DIR__ . '/header.php';
?>
<link rel="stylesheet" href="../public/assets/css/aos.css">

<div class="pt-24 pb-20 px-6 max-w-7xl mx-auto font-sans antialiased text-[#2b0d3e]">

    <div class="w-full mb-20">
        <div class="text-center mb-10">
            <h1 class="text-5xl md:text-7xl font-black uppercase tracking-tighter" data-aos="fade-down">
                About <span class="text-[#7a3f91]">PHILCST</span>
            </h1>
            <div class="w-32 h-2 bg-[#c59dd9] mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="max-w-5xl mx-auto z-30 shadow-[0_20px_50px_rgba(0,0,0,0.3)] rounded-3xl overflow-hidden border-8 border-white transition-all duration-500 hover:scale-105" 
             data-aos="zoom-in" data-aos-duration="1000">
            <img src="assets/images/mission-vision.jpg" alt="mission-vision" class="w-full h-auto object-cover">
            <div class="bg-white p-6 text-center border-t border-gray-100">
                <h2 class="font-black text-[#7a3f91] uppercase tracking-[0.2em] text-xl">Mission & Vision</h2>
            </div>
        </div>
    </div>

    <div class="grid lg:grid-cols-2 gap-16 items-start">

        <div class="space-y-8" data-aos="fade-right" data-aos-delay="300">
            <div class="bg-white/80 backdrop-blur-md p-10 rounded-3xl border border-white shadow-2xl">
                <h3 class="text-2xl font-black uppercase text-[#7a3f91] mb-4 tracking-tight">History & Foundation</h3>
                <p class="text-xl leading-relaxed mb-6 font-medium">
                    The <span class="font-bold text-[#7a3f91]">Philippine College of Science and Technology (PHILCST)</span> is a private, non-sectarian institution of higher learning.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    It was established in 1994 by Mrs. Lourdes S. Fernandez as a response to the community’s need for quality education following the devastation of the 1990 Dagupan earthquake.
                </p>
                <div class="mt-8 p-6 bg-[#f2eaf7] rounded-2xl border-l-8 border-[#7a3f91]">
                    <p class="text-lg text-[#2b0d3e] leading-relaxed italic font-bold">
                        Since beginning formal operations in June 1994, PHILCST has expanded its facilities and academic offerings to develop globally competitive graduates.
                    </p>
                </div>
                <p class="text-lg text-gray-700 mt-6 leading-relaxed">
                    The institution continues to invest in modern classrooms, laboratories, and learning resources to support its students’ academic and professional growth.
                </p>
            </div>
        </div>

<div class="relative min-h-[700px] mt-10 lg:mt-0">
            
            <div class="absolute top-0 right-0 w-[75%] z-20 shadow-2xl rounded-3xl overflow-hidden border-4 border-white transition-all duration-500 hover:scale-105" 
                 data-aos="fade-left" data-aos-delay="500" data-aos-duration="1000">
                <img src="assets/images/school.jpg" alt="school" class="w-full h-[280px] object-cover">
            </div>

            <div class="absolute top-[320px] left-0 w-[75%] z-10 shadow-2xl rounded-3xl overflow-hidden border-4 border-white transition-all duration-700 hover:scale-110" 
                 data-aos="fade-up" data-aos-delay="700" data-aos-duration="1200">
                <img src="assets/images/school-1.jpg" alt="school-1" class="w-full h-[280px] object-cover">
            </div>
            
        </div>

<script src="/philcst-alumni-system/public/assets/js/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            once: true,
            easing: 'ease-out-back',
            duration: 1000
        });
    });
</script>

<?php
$content = ob_get_clean();
include __DIR__ . '/../../includes/structure.php';
?>
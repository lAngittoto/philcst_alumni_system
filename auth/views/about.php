<?php
ob_start();
require_once __DIR__ . '/header.php';

// Course Data Array
$courses = [
    ["title" => "Bachelor of Science in Information Technology", "desc" => "Covers networks, system administration, and software applications. Graduates can work as IT specialists, network administrators, or web developers."],
    ["title" => "Bachelor of Science in Marine Engineering", "desc" => "Trains students in ship engine systems and maritime operations. Graduates can work as marine engineers aboard ships or in shipyards."],
    ["title" => "Bachelor of Science in Marine Transportation", "desc" => "Focuses on navigation, seamanship, and ship operations. Graduates can work as ship deck officers or maritime logistics professionals."],
    ["title" => "Bachelor of Science in Mechanical Engineering", "desc" => "Covers design, manufacturing, and maintenance of machines and mechanical systems. Graduates can work in industries like automotive, manufacturing, or robotics."],
    ["title" => "Bachelor of Science in Elementary Education", "desc" => "Trains students to become effective primary school teachers. Focuses on pedagogy, child development, and curriculum design."],
    ["title" => "Bachelor of Science in Secondary Education", "desc" => "Prepares future high school teachers in specialized subjects. Emphasizes teaching methods, classroom management, and subject mastery."],
    ["title" => "Bachelor of Science in Accountancy", "desc" => "Develops skills in financial reporting, auditing, and taxation. Prepares students for the CPA licensure exam."],
    ["title" => "Bachelor of Science in Architecture", "desc" => "Trains students in building design, urban planning, and sustainable structures. Graduates can become licensed architects."],
    ["title" => "Bachelor of Science in Business Administration", "desc" => "Focuses on management, marketing, and entrepreneurship. Graduates can work in corporate management or startups."],
    ["title" => "Bachelor of Science in Civil Engineering", "desc" => "Teaches design, construction, and maintenance of infrastructure like roads, bridges, and buildings."],
    ["title" => "Bachelor of Science in Computer Engineering", "desc" => "Combines electronics and computing systems for hardware and software solutions."],
    ["title" => "Bachelor of Science in Computer Science", "desc" => "Focuses on programming, algorithms, software development, and computing theory."]
];
?>

<link rel="stylesheet" href="../public/assets/css/aos.css">

<style>
    html {
        scroll-behavior: smooth;
    }
    @keyframes bounce-subtle {
        0% { opacity: 0; transform: translateY(-8px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    .animate-dropdown {
        animation: bounce-subtle 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
    }
    /* Vertical Line Style */
    .mission-line {
        width: 4px;
        height: 100px;
        background: linear-gradient(to bottom, #7a3f91, transparent);
        margin: 40px auto;
        border-radius: 2px;
    }
</style>

<main class="pt-24 pb-20 px-6 max-w-7xl mx-auto font-sans antialiased text-[#2b0d3e]">

    <header class="w-full mb-16 text-center">
        <h1 class="text-5xl md:text-7xl font-black uppercase tracking-tighter">
            About <span class="text-[#7a3f91]">PHILCST</span>
        </h1>
        <div class="w-24 h-1.5 bg-[#c59dd9] mx-auto mt-4 rounded-full"></div>
    </header>

    <section class="mb-20">
        <div class="max-w-5xl mx-auto shadow-xl rounded-[2.5rem] overflow-hidden border-[6px] border-white">
            <figure class="m-0">
                <img src="assets/images/mission-vision.jpg" alt="Mission and Vision" class="w-full h-auto object-cover">
                <figcaption class="bg-white p-6 text-center border-t border-gray-50">
                    <h2 class="font-black text-[#7a3f91] uppercase tracking-[0.2em] text-xl">Mission & Vision</h2>
                </figcaption>
            </figure>
        </div>

        <div class="mission-line" aria-hidden="true"></div>
        
        </div>
    </section>

    <section class="grid lg:grid-cols-2 gap-16 items-start  mb-48">
        <article class="space-y-8" data-aos="fade-up" data-aos-duration="1000">
            <div class="bg-white/90 backdrop-blur-sm p-10 rounded-[2.5rem] border border-white shadow-xl">
                <h3 class="text-2xl font-black uppercase text-[#7a3f91] mb-6 tracking-tight flex items-center gap-3">
                    <i class="fa-solid fa-clock-rotate-left"></i> History & Foundation
                </h3>
                <div class="space-y-5 text-gray-700 leading-relaxed">
                    <p class="text-lg font-bold text-[#2b0d3e]">
                        The Philippine College of Science and Technology (PHILCST) is a private, non-sectarian institution of higher learning.
                    </p>
                    <p>
                        It was established in 1994 by Mrs. Lourdes S. Fernandez as a response to the community’s need for quality education following the devastation of the 1990 Dagupan earthquake.
                    </p>
                    <blockquote class="p-6 bg-[#f2eaf7] rounded-2xl border-l-8 border-[#7a3f91]">
                        <p class="text-md text-[#2b0d3e] italic font-black">
                            Since beginning formal operations in June 1994, PHILCST has expanded its facilities and academic offerings to develop globally competitive graduates.
                        </p>
                    </blockquote>
                    <p>
                        The institution continues to invest in modern classrooms, laboratories, and learning resources to support its students’ academic and professional growth.
                    </p>
                </div>
            </div>
        </article>

        <aside class="relative min-h-[750px] mt-10 lg:mt-0">
            <div class="absolute top-0 right-0 w-[80%] z-20 shadow-lg rounded-[2rem] overflow-hidden border-[6px] border-white"
                data-aos="zoom-in-left" data-aos-duration="1000" data-aos-easing="ease-out-back">
                <img src="assets/images/school.jpg" alt="Campus" class="w-full h-[320px] object-cover">
            </div>

            <div class="absolute top-[400px] left-0 w-[80%] z-10 shadow-lg rounded-[2rem] overflow-hidden border-[6px] border-white"
                data-aos="zoom-in-right" data-aos-delay="300" data-aos-duration="1000" data-aos-easing="ease-out-back">
                <img src="assets/images/school-1.jpg" alt="Facilities" class="w-full h-[320px] object-cover">
            </div>
        </aside>
    </section>

    <section class="border-t-2 border-gray-100 pt-20 mb-20">
        <header class="mb-12 text-center">
            <h2 class="text-4xl font-black uppercase tracking-tighter text-[#2b0d3e]">
                Available <span class="text-[#7a3f91]">Programs</span>
            </h2>
            <p class="text-[#7a3f91] font-black italic mt-1 uppercase tracking-widest text-xs">Empowering Your Future</p>
        </header>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($courses as $index => $course): ?>
                <article class="group cursor-pointer" 
                         data-aos="fade-up" 
                         data-aos-delay="<?php echo $index * 30; ?>" 
                         onclick="toggleCourse(<?php echo $index; ?>)">
                    
                    <div class="bg-white p-6 rounded-[1.5rem] border border-gray-100 shadow-sm hover:shadow-md hover:border-[#7a3f91] transition-all duration-300 h-full">
                        <header class="flex items-center justify-between mb-4">
                            <div class="w-10 h-10 bg-[#f2eaf7] rounded-xl flex items-center justify-center text-[#7a3f91] group-hover:bg-[#7a3f91] group-hover:text-white transition-colors">
                                <i class="fa-solid fa-graduation-cap text-sm"></i>
                            </div>
                            <i id="plus-<?php echo $index; ?>" class="fa-solid fa-plus text-[#c59dd9] text-[10px] transition-transform"></i>
                        </header>
                        
                        <h4 class="font-black text-xs uppercase leading-tight text-[#2b0d3e] group-hover:text-[#7a3f91]">
                            <?php echo $course['title']; ?>
                        </h4>

                        <div id="desc-<?php echo $index; ?>" class="hidden mt-4 pt-4 border-t border-gray-50 animate-dropdown">
                            <p class="text-[11px] font-medium text-gray-500 leading-relaxed italic">
                                <?php echo $course['desc']; ?>
                            </p>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

</main>

<script src="/philcst-alumni-system/public/assets/js/aos.js"></script>
<script>
    function toggleCourse(id) {
        const detail = document.getElementById('desc-' + id);
        const icon = document.getElementById('plus-' + id);
        
        if (detail.classList.contains('hidden')) {
            detail.classList.remove('hidden');
            icon.classList.replace('fa-plus', 'fa-minus');
            icon.style.transform = 'rotate(180deg)';
        } else {
            detail.classList.add('hidden');
            icon.classList.replace('fa-minus', 'fa-plus');
            icon.style.transform = 'rotate(0deg)';
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            once: true,
            easing: 'ease-out-back',
            duration: 800
        });
    });
</script>

<?php
$content = ob_get_clean();
include __DIR__ . '/../../includes/structure.php';
?>
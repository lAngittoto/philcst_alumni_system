<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Config\Database;
use Auth\Controllers\AuthController;

if (session_status() === PHP_SESSION_NONE) session_start();

$db = Database::getInstance();
$error = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : "";

unset($_SESSION['login_error']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $auth = new AuthController($db);
    $result = $auth->login($_POST['username'], $_POST['password']);
    
    if ($result) {
        $_SESSION['login_error'] = $result;
        header("Location: login"); 
        exit();
    }
}

ob_start();
?>

<div class="min-h-screen flex items-center justify-center bg-[#f2eaf7] px-6 py-12">
    
    <div class="w-full max-w-md bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-100">
        
        <div class="p-6 pb-0 flex items-center justify-between">
            <a href="home" class="w-10 h-10 flex items-center justify-center bg-[#f2eaf7] rounded-xl text-[#7a3f91] transition-colors hover:bg-[#e2d4ea]">
                <i class="fa-solid fa-house"></i>
            </a>
        </div>

        <div class="p-8 md:p-10 pt-4">
            <div class="text-center mb-10">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-[#f2eaf7] rounded-2xl mb-4">
                    <i class="fa-solid fa-graduation-cap text-3xl text-[#7a3f91]"></i>
                </div>
                <h1 class="text-3xl font-black text-[#2b0d3e] uppercase tracking-tighter">Welcome Alumni</h1>
                <p class="text-[#7a3f91] font-medium italic mt-2 text-sm">Enter your credentials to access your account.</p>
            </div>

            <form method="POST" class="space-y-6">
                
                <div class="space-y-2">
                    <label class="text-xs font-black uppercase tracking-widest text-[#2b0d3e] ml-1">Username</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-[#7a3f91]">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <input type="text" name="username" required
                            class="w-full pl-11 pr-4 py-4 bg-[#f2eaf7] border-2 border-transparent rounded-2xl focus:border-[#c59dd9] focus:bg-white outline-none transition-all font-medium text-[#2b0d3e]">
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-black uppercase tracking-widest text-[#2b0d3e] ml-1">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-[#7a3f91]">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" name="password" id="passwordField" required
                            class="w-full pl-11 pr-12 py-4 bg-[#f2eaf7] border-2 border-transparent rounded-2xl focus:border-[#c59dd9] focus:bg-white outline-none transition-all font-medium text-[#2b0d3e]">
                        
                        <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-4 flex items-center text-[#7a3f91] hover:text-[#2b0d3e]">
                            <i id="eyeIcon" class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                </div>

                <?php if ($error): ?>
                    <div class="bg-red-50 border-l-4 border-red-500 p-4 mt-2 rounded-r-xl">
                        <p class="text-red-700 text-xs font-bold text-center italic uppercase tracking-wider">
                             <i class="fa-solid fa-triangle-exclamation mr-1"></i> <?php echo $error; ?>
                        </p>
                    </div>
                <?php endif; ?>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-[#2b0d3e] text-white py-4 rounded-2xl font-black uppercase tracking-widest shadow-md hover:bg-[#3d1358] transition-all active:scale-95">
                        Sign In <i class="fa-solid fa-paper-plane ml-2"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        const passwordField = document.getElementById('passwordField');
        const eyeIcon = document.getElementById('eyeIcon');
        
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.classList.replace('fa-eye', 'fa-eye-slash');
        } else {
            passwordField.type = 'password';
            eyeIcon.classList.replace('fa-eye-slash', 'fa-eye');
        }
    }
</script>

<?php
$content = ob_get_clean();
include __DIR__ . '/../../includes/structure.php';
?>
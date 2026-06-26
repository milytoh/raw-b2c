<?php
$page_title = 'Admin Login | RAW B2C LTD';
include 'includes/header.php';
?>

<div class="flex-1 flex items-center justify-center p-6 bg-surface-container-low">
    <div class="w-full max-w-md bg-white rounded-[32px] shadow-premium p-10 border border-outline-variant/10">
        <div class="text-center mb-8">
            <h1 class="font-headline-md text-3xl font-bold text-primary mb-2">RAW ADMIN</h1>
            <p class="text-on-surface-variant text-sm">Sign in to access the dashboard</p>
        </div>
        <div class="text-center mb-8">
    ...
</div>

        <?php if(isset($_SESSION['error'])): ?>
        <div class="mb-4 bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-xl">
            <?= $_SESSION['error']; ?>
        </div>
        <?php unset($_SESSION['error']); ?>
        <?php endif; ?>


        <form action="auth.php" method="POST" class="space-y-6">
            <div>
                <label class="block text-sm font-bold text-primary mb-2">Email Address</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50">mail</span>
                    <input type="email" name="email" required class="w-full bg-surface border border-outline-variant/30 rounded-xl pl-12 pr-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="admin@rawb2c.com">
                </div>
            </div>
            
            <div>
    <label class="block text-sm font-bold text-primary mb-2">
        Password
    </label>

    <div class="relative">

        <!-- Lock Icon -->
        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50">
            lock
        </span>


        <input 
            type="password" 
            name="password"
            id="password"
            required
            class="w-full bg-surface border border-outline-variant/30 rounded-xl pl-12 pr-12 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all"
            placeholder="Enter your password"
        >


        <!-- Eye Icon -->
        <button 
            type="button"
            onclick="togglePassword()"
            class="absolute right-4 top-1/2 -translate-y-1/2 text-on-surface-variant/50 hover:text-primary transition"
        >

            <span 
                class="material-symbols-outlined"
                id="eyeIcon"
            >
                visibility
            </span>

        </button>

    </div>
</div>
            
            <div class="flex items-center justify-between">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" class="form-checkbox text-primary rounded focus:ring-primary">
                    <span class="text-sm text-on-surface-variant">Remember me</span>
                </label>
                <a href="#" class="text-sm font-bold text-primary hover:underline">Forgot password?</a>
            </div>
            
            <button type="submit" class="w-full bg-primary text-on-primary px-8 py-4 rounded-xl font-bold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all flex justify-center items-center gap-2">
                Sign In
                <span class="material-symbols-outlined text-sm">arrow_forward</span>
            </button>
        </form>
    </div>
</div>

<script>

function togglePassword(){

    const password = document.getElementById("password");
    const eyeIcon = document.getElementById("eyeIcon");


    if(password.type === "password"){

        password.type = "text";

        eyeIcon.textContent = "visibility_off";

    }else{

        password.type = "password";

        eyeIcon.textContent = "visibility";

    }

}

</script>
 
<?php include 'includes/footer.php'; ?>


<!-- $2y$10$dDZ0uBmInldLpghTvxVvXudsC9J4cgUXHKv7rxm5tKiOIni.qLVx6 -->


<!-- <?php
echo password_hash('rawb2c5555', PASSWORD_DEFAULT);
?>  -->


<!-- Email: admin@rawb2c.com
Password: rawb2c5555 -->
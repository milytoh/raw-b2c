<!-- Top Navbar -->
<header class="h-20 bg-white border-b border-outline-variant/20 flex items-center justify-between px-6 z-20 sticky top-0">
    
    <!-- Left side: Mobile menu toggle & Breadcrumb -->
    <div class="flex items-center gap-4">
        <button id="mobile-menu-btn" class="md:hidden text-on-surface hover:bg-surface-container rounded-full p-2 transition-colors">
            <span class="material-symbols-outlined">menu</span>
        </button>
        
        <div class="hidden sm:block">
            <h2 class="font-headline-md text-xl font-bold text-primary">
                <?php echo isset($page_title) ? str_replace(' | RAW B2C LTD', '', $page_title) : 'Dashboard'; ?>
            </h2>
        </div>
    </div>

    <!-- Right side: Profile & Notifications -->
    <div class="flex items-center gap-6">
        <!-- Notifications Placeholder -->
        <button class="relative text-on-surface-variant hover:text-primary transition-colors">
            <span class="material-symbols-outlined">notifications</span>
            <span class="absolute -top-1 -right-1 w-4 h-4 bg-error text-on-error rounded-full text-[10px] flex items-center justify-center font-bold">3</span>
        </button>
        
        <!-- Admin Profile Profile -->
        <div class="flex items-center gap-3 cursor-pointer">
            <div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-primary font-bold shadow-sm">
                AD
            </div>
            <div class="hidden md:block">
                <p class="text-sm font-bold text-on-surface">Admin User</p>
                <p class="text-xs text-on-surface-variant">System Administrator</p>
            </div>
        </div>
    </div>
</header>

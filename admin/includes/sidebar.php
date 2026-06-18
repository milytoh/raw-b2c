<!-- Sidebar Navigation -->
<aside id="sidebar" class="bg-primary text-on-primary w-64 flex-shrink-0 flex flex-col h-full sidebar-transition transform -translate-x-full md:translate-x-0 absolute md:relative z-40">
    
    <!-- Sidebar Header (Logo) -->
    <div class="h-20 flex items-center justify-center border-b border-on-primary/10">
        <h1 class="font-headline-md text-xl font-bold tracking-wider">RAW ADMIN</h1>
    </div>

    <!-- Navigation Links -->
    <nav class="flex-1 overflow-y-auto py-6 space-y-2 px-4">
        
        <?php 
            $current_page = basename($_SERVER['PHP_SELF']); 
            
            $nav_items = [
                ['file' => 'index.php', 'icon' => 'dashboard', 'label' => 'Dashboard'],
                ['file' => 'workers.php', 'icon' => 'badge', 'label' => 'Manage Workers'],
                ['file' => 'gallery.php', 'icon' => 'perm_media', 'label' => 'Manage Gallery'],
                ['file' => 'blog.php', 'icon' => 'article', 'label' => 'Manage Blog'],
                ['file' => 'products.php', 'icon' => 'inventory_2', 'label' => 'Manage Products'],
                ['file' => 'reviews.php', 'icon' => 'reviews', 'label' => 'Manage Reviews'],
                ['file' => 'rewards.php', 'icon' => 'stars', 'label' => 'Manage Rewards'],
            ];

            foreach ($nav_items as $item):
                $is_active = ($current_page == $item['file']);
                $active_classes = $is_active ? 'bg-primary-container text-on-primary-container font-semibold' : 'text-on-primary/80 hover:bg-primary-container/50 hover:text-white transition-colors';
        ?>
        <a href="<?php echo $item['file']; ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl <?php echo $active_classes; ?>">
            <span class="material-symbols-outlined <?php echo $is_active ? 'filled' : ''; ?>"><?php echo $item['icon']; ?></span>
            <span><?php echo $item['label']; ?></span>
        </a>
        <?php endforeach; ?>
        
    </nav>

    <!-- Sidebar Footer (Logout) -->
    <div class="p-4 border-t border-on-primary/10">
        <a href="logout.php" class="flex items-center gap-3 px-4 py-3 rounded-xl text-error-container hover:bg-error hover:text-on-error transition-colors">
            <span class="material-symbols-outlined">logout</span>
            <span class="font-semibold">Logout</span>
        </a>
    </div>

</aside>

<!-- Mobile Sidebar Overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-30 hidden md:hidden"></div>

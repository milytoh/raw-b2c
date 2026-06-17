<?php
$page_title = 'Manage Gallery | Admin | RAW B2C LTD';
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">
    <?php include 'includes/navbar.php'; ?>

    <main class="flex-1 overflow-y-auto p-6 md:p-10">
        <div class="max-w-7xl mx-auto">
            
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 gap-4">
                <div>
                    <h1 class="font-headline-md text-3xl font-bold text-primary mb-2">Manage Gallery</h1>
                    <p class="text-on-surface-variant">Upload and manage media for Projects, Workers, Products, and Community.</p>
                </div>
                <button class="bg-primary text-on-primary px-6 py-3 rounded-xl font-bold flex items-center gap-2 hover:bg-primary-container transition-colors shadow-md">
                    <span class="material-symbols-outlined">add_photo_alternate</span> Upload Media
                </button>
            </div>

            <!-- Filter Tabs -->
            <div class="flex gap-4 mb-8 overflow-x-auto pb-2">
                <button class="px-4 py-2 bg-primary text-white rounded-lg font-bold text-sm whitespace-nowrap">All Media</button>
                <button class="px-4 py-2 bg-white text-on-surface-variant border border-outline-variant/30 hover:border-primary hover:text-primary rounded-lg font-bold text-sm transition-colors whitespace-nowrap">Projects</button>
                <button class="px-4 py-2 bg-white text-on-surface-variant border border-outline-variant/30 hover:border-primary hover:text-primary rounded-lg font-bold text-sm transition-colors whitespace-nowrap">Workers</button>
                <button class="px-4 py-2 bg-white text-on-surface-variant border border-outline-variant/30 hover:border-primary hover:text-primary rounded-lg font-bold text-sm transition-colors whitespace-nowrap">Products</button>
                <button class="px-4 py-2 bg-white text-on-surface-variant border border-outline-variant/30 hover:border-primary hover:text-primary rounded-lg font-bold text-sm transition-colors whitespace-nowrap">Community</button>
            </div>

            <!-- Gallery Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Media Item 1 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-outline-variant/10 group relative">
                    <div class="h-40 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=600" alt="Media" class="w-full h-full object-cover">
                    </div>
                    <div class="p-3">
                        <p class="text-sm font-bold text-primary truncate">HQ Building Interior</p>
                        <p class="text-xs text-on-surface-variant">Projects • 2.4 MB</p>
                    </div>
                    <!-- Overlay Actions -->
                    <div class="absolute top-2 right-2 flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button class="bg-white text-primary p-1 rounded shadow-sm hover:bg-surface-container"><span class="material-symbols-outlined text-sm">edit</span></button>
                        <button class="bg-error text-white p-1 rounded shadow-sm hover:bg-error-container"><span class="material-symbols-outlined text-sm">delete</span></button>
                    </div>
                </div>

                <!-- Media Item 2 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-outline-variant/10 group relative">
                    <div class="h-40 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&q=80&w=600" alt="Media" class="w-full h-full object-cover">
                    </div>
                    <div class="p-3">
                        <p class="text-sm font-bold text-primary truncate">Mi Boo Shoes</p>
                        <p class="text-xs text-on-surface-variant">Products • 1.8 MB</p>
                    </div>
                    <!-- Overlay Actions -->
                    <div class="absolute top-2 right-2 flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button class="bg-white text-primary p-1 rounded shadow-sm hover:bg-surface-container"><span class="material-symbols-outlined text-sm">edit</span></button>
                        <button class="bg-error text-white p-1 rounded shadow-sm hover:bg-error-container"><span class="material-symbols-outlined text-sm">delete</span></button>
                    </div>
                </div>

                <!-- Media Item 3 -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-outline-variant/10 group relative">
                    <div class="h-40 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=600" alt="Media" class="w-full h-full object-cover">
                    </div>
                    <div class="p-3">
                        <p class="text-sm font-bold text-primary truncate">Team Meeting</p>
                        <p class="text-xs text-on-surface-variant">Workers • 3.1 MB</p>
                    </div>
                    <!-- Overlay Actions -->
                    <div class="absolute top-2 right-2 flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                        <button class="bg-white text-primary p-1 rounded shadow-sm hover:bg-surface-container"><span class="material-symbols-outlined text-sm">edit</span></button>
                        <button class="bg-error text-white p-1 rounded shadow-sm hover:bg-error-container"><span class="material-symbols-outlined text-sm">delete</span></button>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<?php include 'includes/footer.php'; ?>

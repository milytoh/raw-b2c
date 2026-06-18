<!-- <?php
include 'includes/protect.php';
$page_title = 'Dashboard | RAW B2C LTD';
include 'includes/header.php';
include 'includes/sidebar.php';

?> -->



<!-- Main Content Area -->
<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">
    <?php include 'includes/navbar.php'; ?>

    <!-- Scrollable Content -->
    <main class="flex-1 overflow-y-auto p-6 md:p-10">
        <div class="max-w-7xl mx-auto">
            
            <div class="mb-10">
                <h1 class="font-headline-md text-3xl font-bold text-primary mb-2">Welcome Back, Admin!</h1>
                <p class="text-on-surface-variant">Here is an overview of what's happening today across the ecosystem.</p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                <!-- Stat Card 1 -->
                <div class="bg-white p-6 rounded-[24px] shadow-premium border border-outline-variant/10 flex items-center gap-4">
                    <div class="w-14 h-14 bg-primary-fixed rounded-2xl flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-primary text-3xl">badge</span>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Total Workers</p>
                        <h3 class="font-headline-md text-3xl font-bold text-primary">1,245</h3>
                    </div>
                </div>
                
                <!-- Stat Card 2 -->
                <div class="bg-white p-6 rounded-[24px] shadow-premium border border-outline-variant/10 flex items-center gap-4">
                    <div class="w-14 h-14 bg-secondary-container rounded-2xl flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-secondary text-3xl">inventory_2</span>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Active Products</p>
                        <h3 class="font-headline-md text-3xl font-bold text-primary">86</h3>
                    </div>
                </div>
                
                <!-- Stat Card 3 -->
                <div class="bg-white p-6 rounded-[24px] shadow-premium border border-outline-variant/10 flex items-center gap-4">
                    <div class="w-14 h-14 bg-error-container rounded-2xl flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-error text-3xl">reviews</span>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Pending Reviews</p>
                        <h3 class="font-headline-md text-3xl font-bold text-primary">12</h3>
                    </div>
                </div>
                
                <!-- Stat Card 4 -->
                <div class="bg-white p-6 rounded-[24px] shadow-premium border border-outline-variant/10 flex items-center gap-4">
                    <div class="w-14 h-14 bg-tertiary-fixed rounded-2xl flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-tertiary text-3xl">stars</span>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-on-surface-variant uppercase tracking-wider">Reward Claims</p>
                        <h3 class="font-headline-md text-3xl font-bold text-primary">45</h3>
                    </div>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Recent Activity Feed -->
                <div class="lg:col-span-2 bg-white rounded-[32px] shadow-premium border border-outline-variant/10 p-8">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-headline-md text-xl font-bold text-primary">Recent Activity</h3>
                        <a href="#" class="text-sm font-bold text-primary hover:underline">View All</a>
                    </div>
                    
                    <div class="space-y-6">
                        <!-- Activity Item -->
                        <div class="flex gap-4">
                            <div class="w-10 h-10 bg-primary-fixed rounded-full flex items-center justify-center shrink-0 mt-1">
                                <span class="material-symbols-outlined text-primary text-sm">person_add</span>
                            </div>
                            <div>
                                <p class="text-sm text-on-surface"><strong>Sarah Okafor</strong> registered as a new worker (Fashion & Design).</p>
                                <p class="text-xs text-on-surface-variant mt-1">10 minutes ago</p>
                            </div>
                        </div>
                        <!-- Activity Item -->
                        <div class="flex gap-4">
                            <div class="w-10 h-10 bg-secondary-container rounded-full flex items-center justify-center shrink-0 mt-1">
                                <span class="material-symbols-outlined text-secondary text-sm">add_photo_alternate</span>
                            </div>
                            <div>
                                <p class="text-sm text-on-surface">New gallery images uploaded to <strong>Projects</strong> by Admin.</p>
                                <p class="text-xs text-on-surface-variant mt-1">1 hour ago</p>
                            </div>
                        </div>
                        <!-- Activity Item -->
                        <div class="flex gap-4">
                            <div class="w-10 h-10 bg-error-container rounded-full flex items-center justify-center shrink-0 mt-1">
                                <span class="material-symbols-outlined text-error text-sm">rate_review</span>
                            </div>
                            <div>
                                <p class="text-sm text-on-surface">New review submitted by <strong>John D.</strong> waiting for approval.</p>
                                <p class="text-xs text-on-surface-variant mt-1">3 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions Placeholder -->
                <div class="bg-primary text-on-primary rounded-[32px] shadow-premium p-8 relative overflow-hidden">
                    <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white opacity-10 rounded-full blur-2xl"></div>
                    <h3 class="font-headline-md text-xl font-bold mb-6">Quick Actions</h3>
                    
                    <div class="space-y-4">
                        <button class="w-full bg-white text-primary px-4 py-3 rounded-xl font-bold text-sm flex items-center gap-3 hover:bg-primary-fixed transition-colors">
                            <span class="material-symbols-outlined">add_circle</span> Add New Product
                        </button>
                        <button class="w-full bg-primary-container text-white px-4 py-3 rounded-xl font-bold text-sm flex items-center gap-3 border border-on-primary/20 hover:bg-primary-fixed hover:text-primary transition-colors">
                            <span class="material-symbols-outlined">edit_document</span> Draft Blog Post
                        </button>
                        <button class="w-full bg-primary-container text-white px-4 py-3 rounded-xl font-bold text-sm flex items-center gap-3 border border-on-primary/20 hover:bg-primary-fixed hover:text-primary transition-colors">
                            <span class="material-symbols-outlined">cloud_upload</span> Upload Media
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<?php include 'includes/footer.php'; ?>

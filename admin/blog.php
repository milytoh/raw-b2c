<?php
include 'includes/protect.php';
$page_title = 'Manage Blog | Admin | RAW B2C LTD';
include 'includes/header.php';
include 'includes/sidebar.php';

?>

<div class="flex-1 flex flex-col h-screen overflow-hidden bg-surface">
    <?php include 'includes/navbar.php'; ?>

    <main class="flex-1 overflow-y-auto p-6 md:p-10">
        <div class="max-w-7xl mx-auto">
            
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 gap-4">
                <div>
                    <h1 class="font-headline-md text-3xl font-bold text-primary mb-2">Manage Blog</h1>
                    <p class="text-on-surface-variant">Create and edit news, company updates, and success stories.</p>
                </div>
                <button class="bg-primary text-on-primary px-6 py-3 rounded-xl font-bold flex items-center gap-2 hover:bg-primary-container transition-colors shadow-md">
                    <span class="material-symbols-outlined">edit_document</span> New Post
                </button>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Blog Post 1 -->
                <div class="bg-white rounded-2xl shadow-premium border border-outline-variant/10 overflow-hidden flex flex-col">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&q=80&w=600" alt="Blog" class="w-full h-full object-cover">
                        <span class="absolute top-3 left-3 bg-white text-primary text-xs font-bold px-2 py-1 rounded">Published</span>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <span class="text-xs font-bold text-primary uppercase tracking-wider mb-2">Business</span>
                        <h3 class="font-headline-md text-xl font-bold text-primary mb-2">Future of B2C Markets in 2024</h3>
                        <p class="text-sm text-on-surface-variant mb-4 flex-1 line-clamp-2">Exploring the shift toward personalized consumer experiences and community-driven commerce models.</p>
                        <div class="flex items-center justify-between border-t border-outline-variant/20 pt-4 mt-auto">
                            <span class="text-xs text-on-surface-variant">Oct 25, 2026</span>
                            <div class="flex gap-2">
                                <button class="text-primary hover:text-primary-container"><span class="material-symbols-outlined text-sm">edit</span></button>
                                <button class="text-error hover:text-error-container"><span class="material-symbols-outlined text-sm">delete</span></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="bg-white rounded-2xl shadow-premium border border-outline-variant/10 overflow-hidden flex flex-col">
                    <div class="h-48 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?auto=format&fit=crop&q=80&w=600" alt="Blog" class="w-full h-full object-cover">
                        <span class="absolute top-3 left-3 bg-surface-container-high text-on-surface text-xs font-bold px-2 py-1 rounded">Draft</span>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <span class="text-xs font-bold text-primary uppercase tracking-wider mb-2">Sustainability</span>
                        <h3 class="font-headline-md text-xl font-bold text-primary mb-2">Building Sustainable Ecosystems</h3>
                        <p class="text-sm text-on-surface-variant mb-4 flex-1 line-clamp-2">How RAW HUB is pioneering sustainable workspace initiatives to reduce carbon footprint.</p>
                        <div class="flex items-center justify-between border-t border-outline-variant/20 pt-4 mt-auto">
                            <span class="text-xs text-on-surface-variant">Last edited: 2 hrs ago</span>
                            <div class="flex gap-2">
                                <button class="text-primary hover:text-primary-container"><span class="material-symbols-outlined text-sm">edit</span></button>
                                <button class="text-error hover:text-error-container"><span class="material-symbols-outlined text-sm">delete</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>

<?php include 'includes/footer.php'; ?>

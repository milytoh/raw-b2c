<?php
$page_title = 'Gallery | RAW B2C LTD';
$base_path = '../';
$home_link = '../index.php';
$about_link = 'about.php';
$products_link = 'product.php';
$gallery_link = '#';
$blog_link = 'blog.php';
$reviews_link = 'reviews.php';
$contact_link = 'contact.php';

$footer_home = '../index.php';
$footer_about = 'about.php';
$footer_products = 'product.php';
$footer_blog = 'blog.php';
$footer_contact = 'contact.php';

include '../includes/header.php';
include '../includes/navbar.php';
?>

<!-- Hero Section -->
<section class="relative pt-40 pb-32 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-primary/80 z-10 mix-blend-multiply"></div>
        <img alt="Hero Background" class="w-full h-full object-cover scale-105" src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=1920">
    </div>
    <div class="relative z-10 max-w-container-max mx-auto px-margin-desktop text-center">
        <h1 class="font-display-lg text-4xl md:text-5xl text-white font-bold mb-6 reveal active">Projects Gallery</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto reveal active delay-100">
            Visualizing our footprint across the continent. Explore our projects, people, and community impact.
        </p>
    </div>
</section>

<!-- Filter Buttons -->
<section class="py-12 bg-surface-container-low border-b border-outline-variant/20">
    <div class="max-w-container-max mx-auto px-margin-desktop text-center reveal">
        <div class="flex flex-wrap justify-center gap-4">
            <button class="bg-primary text-white px-6 py-2 rounded-full font-bold text-sm">All</button>
            <button class="bg-white text-on-surface-variant hover:text-primary px-6 py-2 rounded-full font-bold text-sm border border-outline-variant/30 hover:border-primary transition-colors">Projects</button>
            <button class="bg-white text-on-surface-variant hover:text-primary px-6 py-2 rounded-full font-bold text-sm border border-outline-variant/30 hover:border-primary transition-colors">Workers</button>
            <button class="bg-white text-on-surface-variant hover:text-primary px-6 py-2 rounded-full font-bold text-sm border border-outline-variant/30 hover:border-primary transition-colors">Products</button>
            <button class="bg-white text-on-surface-variant hover:text-primary px-6 py-2 rounded-full font-bold text-sm border border-outline-variant/30 hover:border-primary transition-colors">Community</button>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Item 1 -->
        <div class="reveal overflow-hidden rounded-3xl group shadow-premium border border-outline-variant/10">
            <div class="relative h-64 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=600" alt="Gallery Image" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white font-bold bg-primary/80 px-4 py-2 rounded-lg">Projects</span>
                </div>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="reveal delay-100 overflow-hidden rounded-3xl group shadow-premium border border-outline-variant/10">
            <div class="relative h-64 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&q=80&w=600" alt="Gallery Image" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white font-bold bg-secondary/80 px-4 py-2 rounded-lg">Products</span>
                </div>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="reveal delay-200 overflow-hidden rounded-3xl group shadow-premium border border-outline-variant/10">
            <div class="relative h-64 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=600" alt="Gallery Image" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white font-bold bg-tertiary/80 px-4 py-2 rounded-lg">Workers</span>
                </div>
            </div>
        </div>
        <!-- Item 4 -->
        <div class="reveal overflow-hidden rounded-3xl group shadow-premium border border-outline-variant/10 md:col-span-2">
            <div class="relative h-64 md:h-80 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?auto=format&fit=crop&q=80&w=1200" alt="Gallery Image" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white font-bold bg-primary/80 px-4 py-2 rounded-lg">Community</span>
                </div>
            </div>
        </div>
        <!-- Item 5 -->
        <div class="reveal delay-100 overflow-hidden rounded-3xl group shadow-premium border border-outline-variant/10">
            <div class="relative h-64 md:h-80 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&q=80&w=600" alt="Gallery Image" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white font-bold bg-secondary/80 px-4 py-2 rounded-lg">Products</span>
                </div>
            </div>
        </div>
        <!-- Item 6 -->
        <div class="reveal overflow-hidden rounded-3xl group shadow-premium border border-outline-variant/10">
            <div class="relative h-64 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&q=80&w=600" alt="Gallery Image" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white font-bold bg-primary/80 px-4 py-2 rounded-lg">Workers</span>
                </div>
            </div>
        </div>
        <!-- Item 7 -->
        <div class="reveal delay-100 overflow-hidden rounded-3xl group shadow-premium border border-outline-variant/10">
            <div class="relative h-64 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=600" alt="Gallery Image" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white font-bold bg-primary/80 px-4 py-2 rounded-lg">Projects</span>
                </div>
            </div>
        </div>
        <!-- Item 8 -->
        <div class="reveal delay-200 overflow-hidden rounded-3xl group shadow-premium border border-outline-variant/10">
            <div class="relative h-64 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=600" alt="Gallery Image" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                    <span class="text-white font-bold bg-tertiary/80 px-4 py-2 rounded-lg">Community</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

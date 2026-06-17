<?php
$page_title = 'Blog & Updates | RAW B2C LTD';
$base_path = '../';
$home_link = '../index.php';
$about_link = 'about.php';
$products_link = 'product.php';
$gallery_link = 'gallery.php';
$blog_link = '#';
$reviews_link = 'reviews.php';
$contact_link = 'contact.php';

$footer_home = '../index.php';
$footer_about = 'about.php';
$footer_products = 'product.php';
$footer_blog = '#';
$footer_contact = 'contact.php';

include '../includes/header.php';
include '../includes/navbar.php';
?>

<!-- Hero Section -->
<section class="relative pt-40 pb-32 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-primary/80 z-10 mix-blend-multiply"></div>
        <img alt="Hero Background" class="w-full h-full object-cover scale-105" src="https://images.unsplash.com/photo-1542838132-92c53300491e?auto=format&fit=crop&q=80&w=1920">
    </div>
    <div class="relative z-10 max-w-container-max mx-auto px-margin-desktop text-center">
        <h1 class="font-display-lg text-4xl md:text-5xl text-white font-bold mb-6 reveal active">Latest Updates & News</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto reveal active delay-100">
            Insights, success stories, and news from our corporate ecosystem.
        </p>
    </div>
</section>

<!-- Blog Grid -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Blog 1 -->
        <div class="reveal bg-white rounded-3xl overflow-hidden group shadow-premium transition-all duration-300 border border-outline-variant/10">
            <div class="h-56 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?auto=format&fit=crop&q=80&w=600" alt="Blog Image" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
            </div>
            <div class="p-8">
                <span class="text-primary font-bold text-xs uppercase tracking-widest">Business</span>
                <h4 class="font-bold text-xl my-4 text-primary group-hover:text-secondary transition-colors">Future of B2C Markets in 2024</h4>
                <p class="text-on-surface-variant text-sm mb-6">Exploring the shift toward personalized consumer experiences and community-driven commerce models.</p>
                <a href="#" class="text-primary font-bold inline-flex items-center gap-1 group/link">
                    Read Article <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
        </div>

        <!-- Blog 2 -->
        <div class="reveal delay-100 bg-white rounded-3xl overflow-hidden group shadow-premium transition-all duration-300 border border-outline-variant/10">
            <div class="h-56 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?auto=format&fit=crop&q=80&w=600" alt="Blog Image" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
            </div>
            <div class="p-8">
                <span class="text-primary font-bold text-xs uppercase tracking-widest">Sustainability</span>
                <h4 class="font-bold text-xl my-4 text-primary group-hover:text-secondary transition-colors">Building Sustainable Ecosystems</h4>
                <p class="text-on-surface-variant text-sm mb-6">How RAW HUB is pioneering sustainable workspace initiatives to reduce carbon footprint and increase productivity.</p>
                <a href="#" class="text-primary font-bold inline-flex items-center gap-1 group/link">
                    Read Article <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
        </div>

        <!-- Blog 3 -->
        <div class="reveal delay-200 bg-white rounded-3xl overflow-hidden group shadow-premium transition-all duration-300 border border-outline-variant/10">
            <div class="h-56 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=600" alt="Blog Image" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
            </div>
            <div class="p-8">
                <span class="text-primary font-bold text-xs uppercase tracking-widest">Community</span>
                <h4 class="font-bold text-xl my-4 text-primary group-hover:text-secondary transition-colors">Community Spotlight: Q3 Impact</h4>
                <p class="text-on-surface-variant text-sm mb-6">A deep dive into our latest community development projects and the lives they have touched across the region.</p>
                <a href="#" class="text-primary font-bold inline-flex items-center gap-1 group/link">
                    Read Article <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
        </div>
        
        <!-- Blog 4 -->
        <div class="reveal bg-white rounded-3xl overflow-hidden group shadow-premium transition-all duration-300 border border-outline-variant/10">
            <div class="h-56 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=600" alt="Blog Image" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
            </div>
            <div class="p-8">
                <span class="text-primary font-bold text-xs uppercase tracking-widest">Innovation</span>
                <h4 class="font-bold text-xl my-4 text-primary group-hover:text-secondary transition-colors">Tech Advancements at RAW HUB</h4>
                <p class="text-on-surface-variant text-sm mb-6">Learn how we are integrating the latest technologies to empower local businesses and startups.</p>
                <a href="#" class="text-primary font-bold inline-flex items-center gap-1 group/link">
                    Read Article <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
        </div>

        <!-- Blog 5 -->
        <div class="reveal delay-100 bg-white rounded-3xl overflow-hidden group shadow-premium transition-all duration-300 border border-outline-variant/10">
            <div class="h-56 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&q=80&w=600" alt="Blog Image" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
            </div>
            <div class="p-8">
                <span class="text-primary font-bold text-xs uppercase tracking-widest">Fashion</span>
                <h4 class="font-bold text-xl my-4 text-primary group-hover:text-secondary transition-colors">Mi Look's Summer Collection</h4>
                <p class="text-on-surface-variant text-sm mb-6">Discover the inspiration behind our latest collection, blending cultural heritage with futuristic African design.</p>
                <a href="#" class="text-primary font-bold inline-flex items-center gap-1 group/link">
                    Read Article <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
        </div>

        <!-- Blog 6 -->
        <div class="reveal delay-200 bg-white rounded-3xl overflow-hidden group shadow-premium transition-all duration-300 border border-outline-variant/10">
            <div class="h-56 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&q=80&w=600" alt="Blog Image" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
            </div>
            <div class="p-8">
                <span class="text-primary font-bold text-xs uppercase tracking-widest">Success Story</span>
                <h4 class="font-bold text-xl my-4 text-primary group-hover:text-secondary transition-colors">Empowering Local Artisans</h4>
                <p class="text-on-surface-variant text-sm mb-6">How our Mi Boo lifestyle brand is creating sustainable income streams for local craftspeople.</p>
                <a href="#" class="text-primary font-bold inline-flex items-center gap-1 group/link">
                    Read Article <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

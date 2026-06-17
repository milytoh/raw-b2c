<?php
$page_title = 'Our Ecosystem & Products | RAW B2C LTD';
$base_path = '../';
$home_link = '../index.php';
$about_link = 'about.php';
$products_link = '#';
$gallery_link = 'gallery.php';
$blog_link = 'blog.php';
$reviews_link = 'reviews.php';
$contact_link = 'contact.php';

$footer_home = '../index.php';
$footer_about = 'about.php';
$footer_products = '#';
$footer_blog = 'blog.php';
$footer_contact = 'contact.php';

include '../includes/header.php';
include '../includes/navbar.php';
?>

<!-- Hero Section -->
<section class="relative pt-40 pb-32 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-primary/80 z-10 mix-blend-multiply"></div>
        <img alt="Hero Background" class="w-full h-full object-cover scale-105" src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&q=80&w=1920">
    </div>
    <div class="relative z-10 max-w-container-max mx-auto px-margin-desktop text-center">
        <h1 class="font-display-lg text-4xl md:text-5xl text-white font-bold mb-6 reveal active">Our Ecosystem & Products</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto reveal active delay-100">
            Discover the specialized brands under RAW B2C LTD that drive innovation across diverse sectors.
        </p>
    </div>
</section>

<!-- Content Sections -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
    <!-- RAW HUB -->
    <div class="flex flex-col md:flex-row items-center gap-12 mb-24 reveal">
        <div class="w-full md:w-1/2 rounded-3xl overflow-hidden shadow-premium">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=800" alt="RAW HUB Workspace" class="w-full h-[400px] object-cover hover:scale-105 transition-transform duration-700">
        </div>
        <div class="w-full md:w-1/2">
            <span class="bg-primary-fixed/30 text-primary px-3 py-1 rounded-full text-xs font-bold mb-4 inline-block">TECH HUB</span>
            <h2 class="font-headline-md text-3xl text-primary mb-6">RAW HUB</h2>
            <p class="text-on-surface-variant font-body-lg mb-6 leading-relaxed">
                A dynamic environment for collaboration, innovation, and technological advancement in the heart of the business district.
            </p>
            <ul class="space-y-3 mb-8">
                <li class="flex items-center gap-2 text-on-surface-variant"><span class="material-symbols-outlined text-primary">check_circle</span> State-of-the-art co-working spaces</li>
                <li class="flex items-center gap-2 text-on-surface-variant"><span class="material-symbols-outlined text-primary">check_circle</span> Tech incubators for startups</li>
                <li class="flex items-center gap-2 text-on-surface-variant"><span class="material-symbols-outlined text-primary">check_circle</span> High-speed networking events</li>
            </ul>
            <a href="contact.php" class="bg-primary text-on-primary px-8 py-3 rounded-xl font-bold hover:bg-primary-container transition-all">Inquire Now</a>
        </div>
    </div>

    <!-- Mi Boo -->
    <div class="flex flex-col md:flex-row-reverse items-center gap-12 mb-24 reveal">
        <div class="w-full md:w-1/2 rounded-3xl overflow-hidden shadow-premium">
            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&q=80&w=800" alt="Mi Boo Lifestyle" class="w-full h-[400px] object-cover hover:scale-105 transition-transform duration-700">
        </div>
        <div class="w-full md:w-1/2">
            <span class="bg-secondary-container/30 text-secondary px-3 py-1 rounded-full text-xs font-bold mb-4 inline-block">LIFESTYLE</span>
            <h2 class="font-headline-md text-3xl text-primary mb-6">Mi Boo</h2>
            <p class="text-on-surface-variant font-body-lg mb-6 leading-relaxed">
                Premium lifestyle solutions that blend modern aesthetics with practical daily utility for the sophisticated consumer.
            </p>
            <ul class="space-y-3 mb-8">
                <li class="flex items-center gap-2 text-on-surface-variant"><span class="material-symbols-outlined text-secondary">check_circle</span> Sustainable materials</li>
                <li class="flex items-center gap-2 text-on-surface-variant"><span class="material-symbols-outlined text-secondary">check_circle</span> Award-winning designs</li>
                <li class="flex items-center gap-2 text-on-surface-variant"><span class="material-symbols-outlined text-secondary">check_circle</span> Exclusive member benefits</li>
            </ul>
            <a href="contact.php" class="bg-secondary text-on-secondary px-8 py-3 rounded-xl font-bold hover:bg-secondary-container hover:text-secondary transition-all">View Catalog</a>
        </div>
    </div>

    <!-- Mi Look -->
    <div class="flex flex-col md:flex-row items-center gap-12 reveal">
        <div class="w-full md:w-1/2 rounded-3xl overflow-hidden shadow-premium">
            <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&q=80&w=800" alt="Mi Look Fashion" class="w-full h-[400px] object-cover hover:scale-105 transition-transform duration-700">
        </div>
        <div class="w-full md:w-1/2">
            <span class="bg-tertiary-fixed/30 text-tertiary px-3 py-1 rounded-full text-xs font-bold mb-4 inline-block">FASHION</span>
            <h2 class="font-headline-md text-3xl text-primary mb-6">Mi Look</h2>
            <p class="text-on-surface-variant font-body-lg mb-6 leading-relaxed">
                Contemporary fashion and creative identity, bridging cultural heritage with futuristic African design concepts.
            </p>
            <ul class="space-y-3 mb-8">
                <li class="flex items-center gap-2 text-on-surface-variant"><span class="material-symbols-outlined text-tertiary">check_circle</span> Bespoke tailoring</li>
                <li class="flex items-center gap-2 text-on-surface-variant"><span class="material-symbols-outlined text-tertiary">check_circle</span> Seasonal collections</li>
                <li class="flex items-center gap-2 text-on-surface-variant"><span class="material-symbols-outlined text-tertiary">check_circle</span> Ethical sourcing</li>
            </ul>
            <a href="contact.php" class="bg-tertiary text-on-tertiary px-8 py-3 rounded-xl font-bold hover:bg-tertiary-container hover:text-tertiary transition-all">Explore Collection</a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

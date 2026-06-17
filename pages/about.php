<?php
$page_title = 'About Us | RAW B2C LTD';
$base_path = '../';
$home_link = '../index.php';
$about_link = '#';
$products_link = 'product.php';
$gallery_link = 'gallery.php';
$blog_link = 'blog.php';
$reviews_link = 'reviews.php';
$contact_link = 'contact.php';

$footer_home = '../index.php';
$footer_about = '#';
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
        <img alt="Hero Background" class="w-full h-full object-cover scale-105" src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=1920">
    </div>
    <div class="relative z-10 max-w-container-max mx-auto px-margin-desktop text-center">
        <h1 class="font-display-lg text-4xl md:text-5xl text-white font-bold mb-6 reveal active">About RAW B2C LTD</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto reveal active delay-100">
            Pioneering aspirational stability and empowering communities across the African corporate landscape.
        </p>
    </div>
</section>

<!-- Content Sections -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
    <div class="grid md:grid-cols-2 gap-12 items-center mb-24">
        <div class="reveal">
            <h2 class="font-headline-md text-3xl text-primary mb-6">Our Vision</h2>
            <p class="text-on-surface-variant font-body-lg mb-6 leading-relaxed">
                RAW B2C LTD is a pioneering force in the African corporate landscape. We bridge the gap between high-technology reliability and organic community growth. Our philosophy is rooted in "Aspirational Stability"—ensuring that every solution we build today serves as a foundation for a prosperous tomorrow.
            </p>
            <p class="text-on-surface-variant font-body-lg mb-6 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim.
            </p>
        </div>
        <div class="reveal delay-100 rounded-3xl overflow-hidden shadow-premium">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=800" alt="Team Collaboration" class="w-full h-[400px] object-cover">
        </div>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        <div class="p-8 bg-white rounded-3xl shadow-premium reveal border border-outline-variant/10">
            <div class="w-14 h-14 bg-primary-fixed rounded-2xl flex items-center justify-center mb-6">
                <span class="material-symbols-outlined text-primary text-3xl">verified_user</span>
            </div>
            <h3 class="font-bold text-xl mb-4 text-primary">Trust First</h3>
            <p class="text-on-surface-variant leading-relaxed">Building reliable systems for sustainable growth. We prioritize integrity and transparency in all our operations.</p>
        </div>
        <div class="p-8 bg-white rounded-3xl shadow-premium reveal delay-100 border border-outline-variant/10">
            <div class="w-14 h-14 bg-secondary-container rounded-2xl flex items-center justify-center mb-6">
                <span class="material-symbols-outlined text-secondary text-3xl">groups</span>
            </div>
            <h3 class="font-bold text-xl mb-4 text-primary">Community</h3>
            <p class="text-on-surface-variant leading-relaxed">Empowering individuals through shared value. We believe in lifting others as we climb towards success.</p>
        </div>
        <div class="p-8 bg-white rounded-3xl shadow-premium reveal delay-200 border border-outline-variant/10">
            <div class="w-14 h-14 bg-tertiary-fixed rounded-2xl flex items-center justify-center mb-6">
                <span class="material-symbols-outlined text-tertiary text-3xl">lightbulb</span>
            </div>
            <h3 class="font-bold text-xl mb-4 text-primary">Innovation</h3>
            <p class="text-on-surface-variant leading-relaxed">Pioneering new solutions for the African market. We embrace technology to solve complex challenges.</p>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

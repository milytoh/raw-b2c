<?php
$page_title = 'RAW B2C LTD | Building Solutions, Empowering People';

$base_path = '';

$home_link = '#';
$about_link = 'pages/about.php';
$products_link = 'pages/product.php';
$gallery_link = 'pages/gallery.php';
$blog_link = 'pages/blog.php';
$reviews_link = 'pages/reviews.php';
$contact_link = 'pages/contact.php';

$footer_home = '#';
$footer_about = 'pages/about.php';
$footer_products = 'pages/product.php';
$footer_blog = 'pages/blog.php';
$footer_contact = 'pages/contact.php';


// DATABASE FIRST
require 'config/database.php';


// FETCH BLOGS
$blogs = $pdo->query("
SELECT *
FROM blog_posts
ORDER BY created_at DESC
LIMIT 3
")->fetchAll();

// FETCH REVIEWS (ONLY APPROVED)
$reviews = $pdo->query("
    SELECT *
    FROM reviews
    WHERE status='Approved'
    ORDER BY created_at DESC
    LIMIT 3
")->fetchAll();

// LOAD UI
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero Section -->
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center overflow-hidden pt-28 md:pt-16 mt-10">

<div class="absolute inset-0 z-0">

<!-- overlay -->
<div class="absolute inset-0 bg-gradient-to-r from-primary/80 via-primary/50 to-transparent z-10"></div>


<img 
alt="RAW B2C LTD African business ecosystem"
class="w-full h-full object-cover scale-105 animate-[pulse_10s_ease-in-out_infinite]"
 src="assets/images/raw-ceo.jfif">

</div>



<div class="relative z-20 max-w-container-max mx-auto px-6 md:px-margin-desktop w-full">

<div class="max-w-3xl space-y-8">



<!-- <span 
class="inline-block bg-white/20 backdrop-blur-md text-white px-5 py-2 rounded-full font-bold text-sm hero-text-animate">

Building Africa's Future Ecosystem

</span> -->



<h1 
class="font-display-sm text-display-lg text-white drop-shadow-lg hero-text-animate"
style="animation-delay:.2s">


Building Solutions.<br>

Connecting People.<br>

<span class="text-secondary-fixed">
Creating Impact.
</span>


</h1>




<p 
class="font-body-lg text-white/90 max-w-2xl hero-text-animate"
style="animation-delay:.4s">


RAW B2C LTD is building innovative businesses that simplify everyday life — from technology and lifestyle solutions to trusted services, products, and community-driven platforms across Africa.


</p>




<div 
class="flex flex-wrap gap-4 hero-text-animate"
style="animation-delay:.6s;">



<a 
href="pages/product.php"
class="bg-white text-primary px-8 py-4 rounded-xl font-bold text-lg hover:scale-105 transition flex items-center gap-2">

Explore Our Ecosystem

<span class="material-symbols-outlined">
arrow_forward
</span>

</a>



<a 
href="pages/contact.php"
class="bg-white/10 backdrop-blur-md border-2 border-white text-white px-8 py-4 rounded-xl font-bold text-lg hover:bg-white hover:text-primary transition">

Partner With Us

</a>



</div>






<!-- small stats -->

<div class="grid grid-cols-3 gap-5 pt-8 max-w-xl hero-text-animate">


<div class="bg-white/10 backdrop-blur-md rounded-xl p-4">
<h3 class="text-white font-bold text-2xl">4+</h3>
<p class="text-white/70 text-sm">
States
</p>
</div>



<div class="bg-white/10 backdrop-blur-md rounded-xl p-4">
<h3 class="text-white font-bold text-2xl">5+</h3>
<p class="text-white/70 text-sm">
Brands
</p>
</div>



<div class="bg-white/10 backdrop-blur-md rounded-xl p-4">
<h3 class="text-white font-bold text-2xl">2023</h3>
<p class="text-white/70 text-sm">
Founded
</p>
</div>


</div>



</div>

</div>

</section>
<!-- Intro Section -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto" id="about">

<div class="grid md:grid-cols-2 gap-gutter items-center">


<!-- CONTENT -->

<div class="reveal">

<p class="text-secondary font-bold uppercase tracking-widest text-sm mb-4">
Our Story
</p>


<h2 class="font-headline-md text-headline-md text-primary mb-6">
Building Africa's Everyday Solutions
</h2>


<p class="text-on-surface-variant font-body-lg mb-8 leading-relaxed">

RAW B2C LTD is a Nigerian innovation company creating practical businesses
that improve everyday living. We build trusted solutions across technology,
lifestyle, services, and consumer experiences — connecting people with
products and platforms designed for convenience, growth, and impact.

</p>


<div class="grid grid-cols-2 gap-6">


<div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/30">

<span class="material-symbols-outlined text-primary text-4xl mb-2">
hub
</span>

<h4 class="font-bold text-primary">
Our Ecosystem
</h4>

<p class="text-sm opacity-80">
Multiple brands solving real-life problems.
</p>

</div>



<div class="p-6 bg-surface-container rounded-2xl border border-outline-variant/30">

<span class="material-symbols-outlined text-primary text-4xl mb-2">
rocket_launch
</span>

<h4 class="font-bold text-primary">
Innovation
</h4>

<p class="text-sm opacity-80">
Technology powered solutions for Africa.
</p>

</div>


</div>


</div>





<!-- IMAGE -->

<div class="relative reveal h-[500px]">

<div 
class="absolute -top-4 -left-4 w-2/3 h-2/3 bg-primary-fixed rounded-3xl -z-10 opacity-30">
</div>


<img 

alt="RAW B2C LTD ecosystem"

class="w-full h-full object-cover rounded-3xl shadow-2xl"

src="assets/images/raw-hero.jfif">

</div>


</div>

</section>
<!-- Brands Section (Bento Style) -->
<section class="py-section-gap bg-surface-container-low" id="products">
<div class="max-w-container-max mx-auto px-margin-desktop">
<div class="text-center mb-16 reveal active">
<h2 class="font-headline-md text-headline-md text-primary mb-4">Our Ecosystem</h2>
<p class="text-on-surface-variant max-w-2xl mx-auto">Discover the specialized brands under RAW B2C LTD that drive innovation across diverse sectors.</p>
</div>
<div class="grid md:grid-cols-3 gap-8">
<!-- RAW HUB -->
<div class="reveal group bg-white rounded-[24px] overflow-hidden shadow-premium shadow-premium-hover transition-all duration-500 active">
<div class="h-64 overflow-hidden">
<img alt="RAW HUB" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"  src="assets/images/rawhub.jfif">
</div>
<div class="p-8">
<div class="flex justify-between items-start mb-4">
<h3 class="font-headline-md text-primary">RAW HUB</h3>
<span class="bg-primary-fixed/30 text-primary px-3 py-1 rounded-full text-xs font-bold">TECH HUB</span>
</div>
<p class="text-on-surface-variant mb-6">A dynamic environment for collaboration, innovation, and technological advancement in the heart of the business district.</p>
 <a href="/raw-b2c/ecosystem/rawhub.php"
    class="flex items-center gap-2 text-primary font-bold group/btn">
        Learn More
        <span class="material-symbols-outlined group-hover/btn:translate-x-2 transition-transform">
            arrow_forward
        </span>
    </a>
</div>
</div>

<!-- Mi Boo -->
    <div class="reveal group bg-white rounded-[24px] overflow-hidden shadow-premium shadow-premium-hover transition-all duration-500 delay-100 active">
    <div class="h-64 overflow-hidden">
    <img alt="Mi Boo" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbS_XMmvx7NiwpLe3KHosLfWqyC0fZtQWMzN8YPiDyrz2zndqqqh7ng8qIpaW7VfnPOvP0G7LwSPy1pUEOsXxGrg7OwlsRX_wSIXeCcQOEiOteNsiUMldzf2rm11hJSl1ljmioX95RHOn733lcCOHFd1tz-1KvxChgrK96L3HksklpxHymnUqGo9QztnnaqKQLpLH4ZxtXuAQRIhlY3lrOe9lR_ViLyglNeF5GdAlN8yYTHShDygWjgf0-6y8h6FxHXEAQZtnu5Mw"/>
    </div>
    <div class="p-8">
    <div class="flex justify-between items-start mb-4">
    <h3 class="font-headline-md text-primary">Mi Boo</h3>
    <span class="bg-secondary-container/30 text-secondary px-3 py-1 rounded-full text-xs font-bold">LIFESTYLE</span>
    </div>
    <p class="text-on-surface-variant mb-6">
    Fresh fruit salads and daily fruit delivery services that promote healthy living, convenience, and meaningful relationships through thoughtful nutrition.
    </p>
    <a href="/raw-b2c/ecosystem/miboo.php"
    class="flex items-center gap-2 text-primary font-bold group/btn">
        Learn More
        <span class="material-symbols-outlined group-hover/btn:translate-x-2 transition-transform">
            arrow_forward
        </span>
    </a>
    </div>
</div>
<!-- Mi Look -->
    <div class="reveal group bg-white rounded-[24px] overflow-hidden shadow-premium shadow-premium-hover transition-all duration-500 delay-200 active">
    <div class="h-64 overflow-hidden">
    <img alt="Mi Look" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFdUeKCmaBD1_SxBpUNO3MAynd6UFBz0XEfV9JC6Z76PAcQe5TrHF-kfjF-VO8Gx5kRRSd-EgkSbmghAoYn6hOxwhI0nzmOuEz9iLtVl-v6vsyFihtSov56nOljhlO0cm85SFDTDJs-qSt061sjxXZiVuBhxx1Uq2zKAC0dPGefRA7-X4CNDh5v98WYghHGxSwvkQzjfZQydY2q0ZX32mzXrEdUrEYsD_YIUuBkpHIT5wtt_aF27O0TeXVLY_PLwEpE4b76C8rvDA">
    </div>
    <div class="p-8">
    <div class="flex justify-between items-start mb-4">
    <h3 class="font-headline-md text-primary">Mi Look</h3>
    <span class="bg-tertiary-fixed/30 text-tertiary px-3 py-1 rounded-full text-xs font-bold">FASHION</span>
    </div>
    <p class="text-on-surface-variant mb-6">
Professional beauty and grooming services delivered to your doorstep. Mi Look connects you with trusted beauty experts for barbing, hair styling, makeup, nails, lashes, and complete appearance care — anytime, anywhere.
</p>
    <a href="/raw-b2c/ecosystem/milook.php"
        class="flex items-center gap-2 text-primary font-bold group/btn">
            Learn More
            <span class="material-symbols-outlined group-hover/btn:translate-x-2 transition-transform">
                arrow_forward
            </span>
        </a>
    </div>
    </div>
    </div>
    </div>
</section>
<!-- Services Grid -->
<!-- Solutions Section -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto" id="services">

<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8 reveal active">

<div class="max-w-2xl">

<h2 class="font-headline-md text-headline-md text-primary mb-4">
Our Solutions
</h2>

<p class="text-on-surface-variant text-lg">
Practical solutions created to improve daily living through technology, lifestyle innovation, and trusted services.
</p>

</div>


<a 
class="border-2 border-primary text-primary px-8 py-3 rounded-xl font-bold hover:bg-primary hover:text-white transition-all"
href="#contact">

Partner With Us

</a>

</div>



<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">



<!-- Household Solutions -->
<div class="reveal p-8 rounded-3xl bg-white shadow-premium hover:bg-primary group transition-all duration-500 cursor-pointer border border-outline-variant/10 active">


<div class="w-14 h-14 bg-primary-fixed rounded-2xl flex items-center justify-center mb-6 group-hover:bg-white transition-colors">

<span class="material-symbols-outlined text-primary text-3xl">
home_repair_service
</span>

</div>


<h4 class="font-bold text-xl mb-4 text-primary group-hover:text-white">

Household Solutions

</h4>


<p class="text-sm text-on-surface-variant group-hover:text-white/80 leading-relaxed">

Connecting homes and businesses with reliable professionals, errands, logistics, repairs, and essential everyday services.

</p>


</div>






<!-- Lifestyle & Food -->
<div class="reveal p-8 rounded-3xl bg-white shadow-premium hover:bg-primary group transition-all duration-500 cursor-pointer border border-outline-variant/10 delay-100 active">


<div class="w-14 h-14 bg-secondary-container rounded-2xl flex items-center justify-center mb-6 group-hover:bg-white transition-colors">

<span class="material-symbols-outlined text-secondary text-3xl">
restaurant
</span>

</div>


<h4 class="font-bold text-xl mb-4 text-primary group-hover:text-white">

Lifestyle & Food Services

</h4>


<p class="text-sm text-on-surface-variant group-hover:text-white/80 leading-relaxed">

Creating convenient food experiences that encourage healthy habits, care, and better everyday living.

</p>


</div>






<!-- Beauty -->
<div class="reveal p-8 rounded-3xl bg-white shadow-premium hover:bg-primary group transition-all duration-500 cursor-pointer border border-outline-variant/10 delay-200 active">


<div class="w-14 h-14 bg-tertiary-fixed rounded-2xl flex items-center justify-center mb-6 group-hover:bg-white transition-colors">

<span class="material-symbols-outlined text-tertiary text-3xl">
face_retouching_natural
</span>

</div>


<h4 class="font-bold text-xl mb-4 text-primary group-hover:text-white">

Beauty & Personal Care

</h4>


<p class="text-sm text-on-surface-variant group-hover:text-white/80 leading-relaxed">

Delivering professional grooming and appearance services through trusted providers and convenient booking.

</p>


</div>







<!-- Digital -->
<div class="reveal p-8 rounded-3xl bg-white shadow-premium hover:bg-primary group transition-all duration-500 cursor-pointer border border-outline-variant/10 delay-300 active">


<div class="w-14 h-14 bg-surface-container rounded-2xl flex items-center justify-center mb-6 group-hover:bg-white transition-colors">


<span class="material-symbols-outlined text-primary text-3xl">

devices

</span>


</div>



<h4 class="font-bold text-xl mb-4 text-primary group-hover:text-white">

Digital Services

</h4>



<p class="text-sm text-on-surface-variant group-hover:text-white/80 leading-relaxed">

Building modern platforms, products, and services that connect people, businesses, and opportunities.

</p>



</div>



</div>


</section>
<!-- Impact Section (Stats) -->
<section class="py-section-gap bg-primary text-white relative overflow-hidden">
<div class="absolute inset-0 opacity-10">
<div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full blur-[120px]"></div>
<div class="absolute bottom-0 left-0 w-96 h-96 bg-secondary-fixed rounded-full blur-[120px]"></div>
</div>
<div class="max-w-container-max mx-auto px-margin-desktop relative z-10">
<div class="text-center mb-16 reveal active">
<h2 class="font-headline-md text-headline-md mb-4">Our Growing Impact</h2>
<p class="text-white/70 max-w-xl mx-auto">The numbers that tell our story of commitment and progress.</p>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-8">
<div class="text-center reveal active">
<div class="text-3xl sm:text-5xl font-extrabold mb-2" data-count="250">250+</div>
<p class="text-white/60 font-medium">Projects Completed</p>
</div>
<div class="text-center reveal delay-100 active">
<div class="text-3xl sm:text-5xl font-extrabold mb-2" data-count="15000">15,000+</div>
<p class="text-white/60 font-medium">Customers Served</p>
</div>
<div class="text-center reveal delay-200 active">
<div class="text-3xl sm:text-5xl font-extrabold mb-2" data-count="5000">5,000+</div>
<p class="text-white/60 font-medium">Workers Connected</p>
</div>
<div class="text-center reveal delay-300 active">
<div class="text-3xl sm:text-5xl font-extrabold mb-2" data-count="45">45</div>
<p class="text-white/60 font-medium">Communities Reached</p>
</div>
</div>
</div>
</section>
<!-- Gallery Section -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto" id="gallery">
<div class="text-center mb-16 reveal active">
<h2 class="font-headline-md text-headline-md text-primary mb-4">Projects Gallery</h2>
<p class="text-on-surface-variant">Visualizing our footprint across the continent.</p>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:h-[600px]">
<div class="reveal md:col-span-2 md:row-span-2 overflow-hidden rounded-3xl group active">
<img alt="Gallery 1" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700" data-alt="A spacious, high-end corporate office lobby with glass walls and minimalist furniture. The lighting is bright and airy, representing professional stability. Lush interior landscaping with vertical gardens provides a green, organic touch to the architectural space. People in business attire are seen walking purposefully through the space." src="assets/images/gallery1.jfif">
</div>
<div class="reveal overflow-hidden rounded-3xl group active">
<img alt="Gallery 2" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700" data-alt="A close-up of collaborative working hands over a table with tablets and architectural plans. Bright, warm morning light streams across the table, highlighting details of blueprints and digital screens. The mood is focused and productive, showcasing teamwork in a modern corporate setting with premium green stationery accents." src="assets/images/gallery2.jfif">
</div>
<div class="reveal overflow-hidden rounded-3xl group active">
<img alt="Gallery 3" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700" data-alt="A high-tech digital dashboard displaying vibrant charts and data analytics on a large sleek screen in a dark modern room. The data visualizations are colored in shades of forest green and leaf green. The reflection on the glossy table below adds a sense of depth and advanced technology. The aesthetic is data-driven and professional." src="assets/images/gallery3.jfif">
</div>
<div class="reveal md:col-span-2 overflow-hidden rounded-3xl group active">
<img alt="Gallery 4" class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700" data-alt="A group of smiling community workers in professional polo shirts with the company logo, standing in a sunny outdoor plaza surrounded by modern architecture. They are engaged in a community outreach event, holding tablets and educational brochures. The lighting is natural and bright, conveying optimism and growth." src="assets/images/gallery4.jfif">
</div>
</div>
<div class="mt-12 text-center reveal active">
<a 
    href="pages/gallery.php"
    class="inline-block bg-primary text-on-primary px-10 py-4 rounded-xl font-bold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all"
>
    View All Projects
</a>
</div>
</section>
<!-- Updates / Blog Section -->
<section class="py-section-gap bg-surface-container-low px-margin-desktop" id="blog">
        <div class="max-w-container-max mx-auto">
        <div class="flex justify-between items-end mb-16 reveal active">
        <div>
        <h2 class="font-headline-md text-headline-md text-primary mb-4">Latest Updates</h2>
        <p class="text-on-surface-variant">Insights and news from our corporate ecosystem.</p>
        </div>
        </div>
       <div class="grid md:grid-cols-3 gap-8">

            <?php foreach($blogs as $blog): ?>

            <div class="reveal bg-white rounded-3xl overflow-hidden group shadow-premium transition-all duration-300 border border-outline-variant/10">


        <div class="h-56 overflow-hidden">

        <img 
       src="uploads/blog/<?= htmlspecialchars($blog['image_path']) ?>"
        class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500"
        alt="<?= htmlspecialchars($blog['title']) ?>"
        >

        </div>


        <div class="p-8">

        <span class="text-primary font-bold text-xs uppercase tracking-widest">

        <?= htmlspecialchars($blog['category']) ?>

        </span>



        <h4 class="font-bold text-xl my-4 text-primary group-hover:text-secondary transition-colors">

        <?= htmlspecialchars($blog['title']) ?>

        </h4>




        <p class="text-on-surface-variant text-sm mb-6">

        <?= htmlspecialchars(substr($blog['content'],0,120)) ?>...

        </p>




                <a 
        href="pages/blog-details.php?id=<?= $blog['id'] ?>"
        class="text-primary font-bold inline-flex items-center gap-1 group/link">

        Read Article

        <span class="material-symbols-outlined text-sm group-hover/link:translate-x-1 transition-transform">
        arrow_forward
        </span>

        </a>


        </div>


        </div>


        <?php endforeach; ?>

        </div>
                 
        
</section>


<!-- Reviews Section -->
<!-- Reviews Section -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto" id="reviews">

    <div class="text-center mb-16 reveal active">

    <h2 class="font-headline-md text-headline-md text-primary mb-4">
    Client Feedback
    </h2>

    <p class="text-on-surface-variant">
    What our partners and customers say about us.
    </p>

    </div>



    <div class="grid md:grid-cols-3 gap-8">


    <?php if(count($reviews) > 0): ?>


    <?php foreach($reviews as $review): ?>


    <div class="reveal glass-card p-10 rounded-[32px] shadow-premium active">


    <!-- Stars -->

    <div class="flex gap-1 text-secondary mb-6">


    <?php for($i=1; $i<=5; $i++): ?>


    <span 
    class="material-symbols-outlined"
    style="font-variation-settings:'FILL' 1;"
    >

    <?= $i <= $review['rating'] ? 'star' : 'star_border' ?>

    </span>


    <?php endfor; ?>


    </div>




    <!-- Review -->

    <p class="italic text-on-surface-variant mb-8 text-lg">

    "
    <?= htmlspecialchars($review['review_text']) ?>
    "

    </p>




    <!-- User -->

    <div class="flex items-center gap-4">


    <div 
    class="w-12 h-12 rounded-full bg-primary-fixed flex items-center justify-center font-bold text-primary"
    >

    <?= strtoupper(substr($review['customer_name'],0,2)) ?>

    </div>



    <div>

    <h5 class="font-bold text-primary">

    <?= htmlspecialchars($review['customer_name']) ?>

    </h5>


    <p class="text-xs text-on-surface-variant">

    Customer

    </p>


    </div>


    </div>



    </div>


    <?php endforeach; ?>


    <?php else: ?>


    <div class="md:col-span-3 text-center bg-white rounded-3xl p-10 shadow">

    <span class="material-symbols-outlined text-primary text-5xl">
    rate_review
    </span>


    <h3 class="text-xl font-bold text-primary mt-4">

    No Reviews Yet

    </h3>


    <p class="text-on-surface-variant mt-2">

    Be the first customer to leave a review.

    </p>


    </div>



    <?php endif; ?>



    </div>

</section>
<?php include 'includes/footer.php'; ?>
<script>
        // Reveal on scroll logic
        const observerOptions = {
            threshold: 0.1
        };

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

        // Animated Counters
        const countObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const target = parseInt(entry.target.getAttribute('data-count'));
                    const duration = 2000;
                    const step = target / (duration / 16);
                    let current = 0;
                    
                    const updateCount = () => {
                        current += step;
                        if (current < target) {
                            entry.target.innerText = Math.floor(current).toLocaleString() + (target > 100 ? '+' : '');
                            requestAnimationFrame(updateCount);
                        } else {
                            entry.target.innerText = target.toLocaleString() + (target > 100 ? '+' : '');
                        }
                    };
                    updateCount();
                    countObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('[data-count]').forEach(el => countObserver.observe(el));

        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('top-nav');
            if (window.scrollY > 50) {
                nav.classList.add('py-2', 'shadow-md');
                nav.classList.remove('py-4');
            } else {
                nav.classList.add('py-4');
                nav.classList.remove('py-2', 'shadow-md');
            }
        });


    </script>




</body></html>
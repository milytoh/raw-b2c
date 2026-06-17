<?php
$page_title = 'Client Feedback & Reviews | RAW B2C LTD';
$base_path = '../';
$home_link = '../index.php';
$about_link = 'about.php';
$products_link = 'product.php';
$gallery_link = 'gallery.php';
$blog_link = 'blog.php';
$reviews_link = '#';
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
        <img alt="Hero Background" class="w-full h-full object-cover scale-105" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=1920">
    </div>
    <div class="relative z-10 max-w-container-max mx-auto px-margin-desktop text-center">
        <h1 class="font-display-lg text-4xl md:text-5xl text-white font-bold mb-6 reveal active">Client Feedback</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto reveal active delay-100">
            Read what our partners, customers, and community members have to say about their experience with RAW B2C LTD.
        </p>
    </div>
</section>

<!-- Reviews List Section -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
        <!-- Review 1 -->
        <div class="reveal glass-card p-10 rounded-[32px] shadow-premium bg-white border border-outline-variant/10">
            <div class="flex gap-1 text-secondary mb-6">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
            </div>
            <p class="italic text-on-surface-variant mb-8 text-lg">"The level of professionalism and the direct impact on our operations since partnering with RAW B2C LTD has been transformative."</p>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-primary-fixed flex items-center justify-center font-bold text-primary">JD</div>
                <div>
                    <h5 class="font-bold text-primary">John Doe</h5>
                    <p class="text-xs text-on-surface-variant">CEO, Tech Ventures</p>
                </div>
            </div>
        </div>
        
        <!-- Review 2 -->
        <div class="reveal delay-100 glass-card p-10 rounded-[32px] shadow-premium bg-white border border-outline-variant/10">
            <div class="flex gap-1 text-secondary mb-6">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
            </div>
            <p class="italic text-on-surface-variant mb-8 text-lg">"Mi Boo products have redefined what luxury means to us—practical, sustainable, and undeniably elegant."</p>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-secondary-container flex items-center justify-center font-bold text-secondary">SA</div>
                <div>
                    <h5 class="font-bold text-primary">Sarah Aminu</h5>
                    <p class="text-xs text-on-surface-variant">Lifestyle Consultant</p>
                </div>
            </div>
        </div>
        
        <!-- Review 3 -->
        <div class="reveal delay-200 glass-card p-10 rounded-[32px] shadow-premium bg-white border border-outline-variant/10">
            <div class="flex gap-1 text-secondary mb-6">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
            </div>
            <p class="italic text-on-surface-variant mb-8 text-lg">"Their commitment to community growth is not just a slogan; we've seen the results in our local neighborhoods firsthand."</p>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-tertiary-fixed flex items-center justify-center font-bold text-tertiary">MK</div>
                <div>
                    <h5 class="font-bold text-primary">Moussa Kone</h5>
                    <p class="text-xs text-on-surface-variant">Community Director</p>
                </div>
            </div>
        </div>

        <!-- Review 4 -->
        <div class="reveal glass-card p-10 rounded-[32px] shadow-premium bg-white border border-outline-variant/10">
            <div class="flex gap-1 text-secondary mb-6">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">star</span>
            </div>
            <p class="italic text-on-surface-variant mb-8 text-lg">"The collaborative environment at RAW HUB has helped our startup grow exponentially. Highly recommended!"</p>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full bg-primary-fixed flex items-center justify-center font-bold text-primary">AE</div>
                <div>
                    <h5 class="font-bold text-primary">Amara Eze</h5>
                    <p class="text-xs text-on-surface-variant">Startup Founder</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Submit Review Section -->
    <div class="reveal bg-surface-container-low p-10 rounded-[32px] shadow-premium border border-outline-variant/20 max-w-3xl mx-auto">
        <div class="text-center mb-8">
            <h2 class="font-headline-md text-3xl text-primary mb-4">Leave a Review</h2>
            <p class="text-on-surface-variant">We value your feedback. Let us know about your experience with our brands.</p>
        </div>
        <form class="space-y-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-bold text-primary mb-2">Your Name</label>
                    <input type="text" class="w-full bg-white border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="John Doe">
                </div>
                <div>
                    <label class="block text-sm font-bold text-primary mb-2">Email Address</label>
                    <input type="email" class="w-full bg-white border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="john@example.com">
                </div>
            </div>
            <div>
                <label class="block text-sm font-bold text-primary mb-2">Rating</label>
                <select class="w-full bg-white border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all text-on-surface-variant">
                    <option value="5">5 Stars - Excellent</option>
                    <option value="4">4 Stars - Very Good</option>
                    <option value="3">3 Stars - Average</option>
                    <option value="2">2 Stars - Poor</option>
                    <option value="1">1 Star - Terrible</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-bold text-primary mb-2">Your Review</label>
                <textarea rows="4" class="w-full bg-white border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="Tell us about your experience..."></textarea>
            </div>
            <div class="text-center pt-4">
                <button type="button" class="bg-primary text-on-primary px-10 py-4 rounded-xl font-bold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all w-full md:w-auto">
                    Submit Review
                </button>
                <p class="text-xs text-on-surface-variant mt-4 opacity-70">* All reviews are subject to approval by our moderation team before appearing on the website.</p>
            </div>
        </form>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

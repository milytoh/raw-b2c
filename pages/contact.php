<?php
$page_title = 'Contact Us | RAW B2C LTD';
$base_path = '../';
$home_link = '../index.php';
$about_link = 'about.php';
$products_link = 'product.php';
$gallery_link = 'gallery.php';
$blog_link = 'blog.php';
$reviews_link = 'reviews.php';
$contact_link = '#';

$footer_home = '../index.php';
$footer_about = 'about.php';
$footer_products = 'product.php';
$footer_blog = 'blog.php';
$footer_contact = '#';

include '../includes/header.php';
include '../includes/navbar.php';
?>

<!-- Hero Section -->
<section class="relative pt-40 pb-32 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-primary/80 z-10 mix-blend-multiply"></div>
        <img alt="Hero Background" class="w-full h-full object-cover scale-105" src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?auto=format&fit=crop&q=80&w=1920">
    </div>
    <div class="relative z-10 max-w-container-max mx-auto px-margin-desktop text-center">
        <h1 class="font-display-lg text-4xl md:text-5xl text-white font-bold mb-6 reveal active">Get In Touch</h1>
        <p class="text-white/80 text-lg max-w-2xl mx-auto reveal active delay-100">
            Have questions or want to partner with us? Reach out today.
        </p>
    </div>
</section>

<!-- Contact Form and Details Section -->
<section class="py-section-gap px-margin-desktop max-w-container-max mx-auto">
    <div class="grid md:grid-cols-2 gap-12">
        <!-- Contact Info -->
        <div class="reveal pr-0 md:pr-10">
            <h2 class="font-headline-md text-3xl text-primary mb-6">Contact Information</h2>
            <p class="text-on-surface-variant font-body-lg mb-8 leading-relaxed">
                Whether you're looking for enterprise solutions, lifestyle products, or want to join our workforce, our team is ready to assist you.
            </p>
            
            <div class="space-y-6 mb-12">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-primary-fixed rounded-full flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-primary">location_on</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-primary mb-1">Head Office</h4>
                        <p class="text-on-surface-variant text-sm">123 Corporate Avenue, Innovation District,<br>Abuja, Nigeria</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-secondary-container rounded-full flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-secondary">mail</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-primary mb-1">Email Us</h4>
                        <a href="mailto:info@rawb2c.com" class="text-on-surface-variant text-sm hover:text-primary transition-colors">info@rawb2c.com</a><br>
                        <a href="mailto:support@rawb2c.com" class="text-on-surface-variant text-sm hover:text-primary transition-colors">support@rawb2c.com</a>
                    </div>
                </div>
                
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-tertiary-fixed rounded-full flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-tertiary">phone</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-primary mb-1">Call Us</h4>
                        <a href="tel:+2348000000000" class="text-on-surface-variant text-sm hover:text-primary transition-colors">+234 800 000 0000</a><br>
                        <p class="text-on-surface-variant text-sm mt-1 opacity-80">Mon-Fri, 9am - 5pm WAT</p>
                    </div>
                </div>
            </div>
            
            <!-- Map Placeholder -->
            <div class="w-full h-64 rounded-3xl overflow-hidden bg-surface-container shadow-premium border border-outline-variant/10">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.8140306103683!2d7.491299314787019!3d9.076478493489816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0a4f5f5f5f5f%3A0x1234567890abcdef!2sAbuja%2C%20Nigeria!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" 
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
        <!-- Contact Form -->
        <div class="reveal delay-100 bg-white p-10 rounded-[32px] shadow-premium border border-outline-variant/10">
            <h3 class="font-headline-md text-2xl text-primary mb-6">Send a Message</h3>
            <form class="space-y-6">
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-primary mb-2">First Name</label>
                        <input type="text" class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="John">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-primary mb-2">Last Name</label>
                        <input type="text" class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="Doe">
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-bold text-primary mb-2">Email Address</label>
                    <input type="email" class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="john@example.com">
                </div>
                
                <div>
                    <label class="block text-sm font-bold text-primary mb-2">Subject</label>
                    <input type="text" class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="How can we help you?">
                </div>
                
                <div>
                    <label class="block text-sm font-bold text-primary mb-2">Message</label>
                    <textarea rows="5" class="w-full bg-surface border border-outline-variant/30 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all" placeholder="Your message here..."></textarea>
                </div>
                
                <button type="button" class="w-full bg-primary text-on-primary px-8 py-4 rounded-xl font-bold shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

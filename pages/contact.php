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


<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Contact Us | RAW B2C LTD</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed": "#bdefbd",
                        "tertiary": "#0d3a17",
                        "on-tertiary": "#ffffff",
                        "secondary-fixed-dim": "#95d68f",
                        "on-tertiary-container": "#93c393",
                        "on-primary": "#ffffff",
                        "primary-container": "#1a5319",
                        "error": "#ba1a1a",
                        "surface": "#f8f9fa",
                        "on-primary-fixed": "#002202",
                        "on-secondary-container": "#336f34",
                        "tertiary-fixed-dim": "#a2d3a2",
                        "on-error-container": "#93000a",
                        "primary": "#003b05",
                        "on-secondary-fixed-variant": "#14521a",
                        "on-background": "#191c1d",
                        "inverse-surface": "#2e3132",
                        "outline-variant": "#c1c9bb",
                        "on-secondary": "#ffffff",
                        "primary-fixed": "#b3f3a6",
                        "surface-bright": "#f8f9fa",
                        "on-tertiary-fixed-variant": "#24502a",
                        "on-primary-container": "#89c67e",
                        "on-surface-variant": "#41493e",
                        "surface-container-highest": "#e1e3e4",
                        "inverse-on-surface": "#f0f1f2",
                        "surface-tint": "#326a2d",
                        "surface-container": "#edeeef",
                        "on-tertiary-fixed": "#002107",
                        "on-primary-fixed-variant": "#185218",
                        "error-container": "#ffdad6",
                        "surface-container-low": "#f3f4f5",
                        "surface-container-high": "#e7e8e9",
                        "on-error": "#ffffff",
                        "surface-variant": "#e1e3e4",
                        "secondary-fixed": "#b1f3a9",
                        "on-surface": "#191c1d",
                        "secondary": "#2f6b30",
                        "on-secondary-fixed": "#002204",
                        "secondary-container": "#aef0a6",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-container": "#26512c",
                        "surface-dim": "#d9dadb",
                        "primary-fixed-dim": "#98d68c",
                        "inverse-primary": "#98d68c",
                        "background": "#f8f9fa",
                        "outline": "#71796d"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "container-max": "1280px",
                        "base": "8px",
                        "section-gap": "80px",
                        "margin-mobile": "16px",
                        "margin-desktop": "40px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter"],
                        "headline-md": ["Montserrat"],
                        "display-lg-mobile": ["Montserrat"],
                        "body-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "display-lg": ["Montserrat"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "display-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                        "label-sm": ["14px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "display-lg": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}]
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .floating-label-input:focus-within label,
        .floating-label-input input:not(:placeholder-shown) + label,
        .floating-label-input textarea:not(:placeholder-shown) + label {
            transform: translateY(-1.5rem) scale(0.85);
            color: #1a5319;
        }
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-in-out;
        }
        .accordion-active .accordion-content {
            max-height: 200px;
        }
        .accordion-active .accordion-icon {
            transform: rotate(180deg);
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md overflow-x-hidden">
<!-- Header (TopNavBar) -->

<main class="pt-20">
<!-- Hero Section -->
<section class="relative h-[614px] min-h-[500px] flex items-center justify-center text-center px-margin-mobile overflow-hidden">
<div class="absolute inset-0 z-0">
<div class="w-full h-full bg-cover bg-center" data-alt="A professional, high-end corporate office interior in Lagos, Nigeria, featuring sleek glass walls, modern furniture, and diverse African professionals collaborating in a bright, sunlit environment. The aesthetic is clean, sophisticated, and technologically advanced, dominated by white and deep green tones." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCUWOB5z9QfgDF-ZjaeDhIH1GvniG-rQkIeVYX2zgJ8MgPKyELYOw2bs7rqtxLIGNLYKfuJS8hc5njQQarW_x8r0jmM-yg_rXwubX8wIuFp9WwuXEMVFO7YrvaNxPh0w7Bp_sd76p-xzpGZ3WYgUZG0f2xFz1dwe3hwNMD-s-JyxKnRT-Y8V1NSkZ1Sx2vyVYXbo-AG6FMwud5j_ZxWkbnPKfERK7NNlPuA__k0nuxybN47kLFc0Gh0UsMTs9ajl-sbuuPMzOEB3h8')"></div>
<div class="absolute inset-0 bg-black/60 backdrop-blur-[2px]"></div>
</div>
<div class="relative z-10 max-w-4xl reveal">
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-white mb-6">Get In Touch</h1>
<p class="font-body-lg text-white/90 max-w-2xl mx-auto">We are here to answer your questions, discuss opportunities, and support your journey toward excellence in the African B2C market.</p>
</div>
</section>
<!-- Contact Info Cards -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop -mt-20 relative z-20">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
<!-- Address -->
<div class="glass-card p-8 rounded-[32px] shadow-sm hover:scale-105 transition-transform duration-300 flex flex-col items-center text-center reveal">
<div class="w-14 h-14 bg-primary-container/10 rounded-full flex items-center justify-center mb-4 text-primary">
<span class="material-symbols-outlined text-3xl">location_on</span>
</div>
<h3 class="font-headline-md text-headline-md mb-2">Office Address</h3>
<p class="text-on-surface-variant">umuahia, umudike</p>
</div>
<!-- Phone -->
<div class="glass-card p-8 rounded-[32px] shadow-sm hover:scale-105 transition-transform duration-300 flex flex-col items-center text-center reveal" style="transition-delay: 100ms;">
<div class="w-14 h-14 bg-primary-container/10 rounded-full flex items-center justify-center mb-4 text-primary">
<span class="material-symbols-outlined text-3xl">call</span>
</div>
<h3 class="font-headline-md text-headline-md mb-2">Phone</h3>
<p class="text-on-surface-variant">+234 816 311 8975<br/>+234 816 311 8975</p>
</div>
<!-- Email -->
<div class="glass-card p-8 rounded-[32px] shadow-sm hover:scale-105 transition-transform duration-300 flex flex-col items-center text-center reveal" style="transition-delay: 200ms;">
<div class="w-14 h-14 bg-primary-container/10 rounded-full flex items-center justify-center mb-4 text-primary">
<span class="material-symbols-outlined text-3xl">mail</span>
</div>
<h3 class="font-headline-md text-headline-md mb-2">Email</h3>
<p class="text-on-surface-variant">support@rawb2c.com<br/>support@rawb2c.com</p>
</div>
<!-- Hours -->
<div class="glass-card p-8 rounded-[32px] shadow-sm hover:scale-105 transition-transform duration-300 flex flex-col items-center text-center reveal" style="transition-delay: 300ms;">
<div class="w-14 h-14 bg-primary-container/10 rounded-full flex items-center justify-center mb-4 text-primary">
<span class="material-symbols-outlined text-3xl">schedule</span>
</div>
<h3 class="font-headline-md text-headline-md mb-2">Working Hours</h3>
<p class="text-on-surface-variant">Mon - Fri: 8:00 AM - 5:00 PM<br/>Weekends: open</p>
</div>
</div>
</section>
<!-- Contact Form & Social Section -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-section-gap">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
<!-- Form -->
 <!-- Success Message -->


<!-- Form -->
<div class="lg:col-span-7 bg-white p-8 md:p-12 rounded-[32px] shadow-sm reveal">

<!-- Success Message -->
<?php if(isset($_GET['success'])): ?>
<div class="mb-6 p-4 bg-green-100 text-green-700 rounded-xl flex items-center gap-2">
    <span class="material-symbols-outlined">check_circle</span>
    Thank you! Your message has been sent successfully.
</div>
<?php endif; ?>

    <h2 class="font-headline-md text-3xl mb-8 text-primary">
        Send us a Message
    </h2>

    <form
        id="contactForm"
        class="space-y-8"
        method="POST"
        action="contact-process.php">

        <!-- Name & Email -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <div class="relative floating-label-input">
                <input
                    class="w-full bg-surface-container-low border-0 rounded-xl p-4 focus:ring-2 focus:ring-primary transition-all peer"
                    id="name"
                    name="name"
                    type="text"
                    placeholder=" "
                    required>

                <label
                    class="absolute left-4 top-4 text-on-surface-variant pointer-events-none transition-all"
                    for="name">
                    Full Name
                </label>
            </div>

            <div class="relative floating-label-input">
                <input
                    class="w-full bg-surface-container-low border-0 rounded-xl p-4 focus:ring-2 focus:ring-primary transition-all peer"
                    id="email"
                    name="email"
                    type="email"
                    placeholder=" "
                    required>

                <label
                    class="absolute left-4 top-4 text-on-surface-variant pointer-events-none transition-all"
                    for="email">
                    Email Address
                </label>
            </div>

        </div>

        <!-- Phone & Subject -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <div class="relative floating-label-input">
                <input
                    class="w-full bg-surface-container-low border-0 rounded-xl p-4 focus:ring-2 focus:ring-primary transition-all peer"
                    id="phone"
                    name="phone"
                    type="tel"
                    placeholder=" "
                    required>

                <label
                    class="absolute left-4 top-4 text-on-surface-variant pointer-events-none transition-all"
                    for="phone">
                    Phone Number
                </label>
            </div>

            <div class="relative floating-label-input">
                <input
                    class="w-full bg-surface-container-low border-0 rounded-xl p-4 focus:ring-2 focus:ring-primary transition-all peer"
                    id="subject"
                    name="subject"
                    type="text"
                    placeholder=" "
                    required>

                <label
                    class="absolute left-4 top-4 text-on-surface-variant pointer-events-none transition-all"
                    for="subject">
                    Subject
                </label>
            </div>

        </div>

        <!-- Message -->
        <div class="relative floating-label-input">

            <textarea
                class="w-full bg-surface-container-low border-0 rounded-xl p-4 focus:ring-2 focus:ring-primary transition-all peer"
                id="message"
                name="message"
                rows="6"
                placeholder=" "
                required></textarea>

            <label
                class="absolute left-4 top-4 text-on-surface-variant pointer-events-none transition-all"
                for="message">
                Your Message
            </label>

        </div>

        <!-- Submit Button -->
        <button
            class="w-full md:w-auto bg-primary text-on-primary px-12 py-4 rounded-xl font-bold hover:shadow-xl transition-all flex items-center justify-center gap-2 group"
            type="submit">

            <span id="btnText">
                Send Message
            </span>

            <span
                class="material-symbols-outlined transition-transform group-hover:translate-x-1"
                id="btnIcon">
                send
            </span>

        </button>

    </form>

</div>


<!-- Social Media Cluster -->
<div class="lg:col-span-5 space-y-8 reveal" style="transition-delay: 200ms;">
<h2 class="font-headline-md text-3xl text-primary">Connect With Us</h2>
<p class="text-on-surface-variant font-body-lg">Stay updated with our latest ventures and industry insights through our social channels.</p>
<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
<a class="glass-card p-4 rounded-2xl flex flex-col items-center gap-3 hover:bg-primary group transition-all" href="https://www.facebook.com/share/1YDMbczg9x/" target="_blank">
<div class="w-10 h-10 flex items-center justify-center text-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-2xl">face_nod</span>
</div>
<span class="text-label-sm group-hover:text-white">Facebook</span>
</a>
<a 
class="glass-card p-4 rounded-2xl flex flex-col items-center gap-3 hover:bg-primary group transition-all"
href="https://www.tiktok.com/@rawhub.app?_r=1&_t=ZS-97RXynTkSn6"
target="_blank">

    <div class="w-10 h-10 flex items-center justify-center text-primary group-hover:text-white transition-colors">
        <i class="fab fa-tiktok text-2xl"></i>
    </div>

    <span class="text-label-sm group-hover:text-white">
        TikTok
    </span>

</a>
<a class="glass-card p-4 rounded-2xl flex flex-col items-center gap-3 hover:bg-primary group transition-all" href="#" target="_blank">
<div class="w-10 h-10 flex items-center justify-center text-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-2xl">link</span>
</div>
<span class="text-label-sm group-hover:text-white">Instagram</span>
</a>
<a class="glass-card p-4 rounded-2xl flex flex-col items-center gap-3 hover:bg-primary group transition-all" href="#" target="_blank">
<div class="w-10 h-10 flex items-center justify-center text-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-2xl">chat</span>
</div>
<span class="text-label-sm group-hover:text-white">WhatsApp</span>
</a>
<a class="glass-card p-4 rounded-2xl flex flex-col items-center gap-3 hover:bg-primary group transition-all" href="#" target="_blank">
<div class="w-10 h-10 flex items-center justify-center text-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-2xl">work</span>
</div>
<span class="text-label-sm group-hover:text-white">LinkedIn</span>
</a>
<a class="glass-card p-4 rounded-2xl flex flex-col items-center gap-3 hover:bg-primary group transition-all" href="#" target="_blank">
<div class="w-10 h-10 flex items-center justify-center text-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-2xl">alternate_email</span>
</div>
<span class="text-label-sm group-hover:text-white">Twitter</span>
</a>
<a class="glass-card p-4 rounded-2xl flex flex-col items-center gap-3 hover:bg-primary group transition-all" href="#" target="_blank">
<div class="w-10 h-10 flex items-center justify-center text-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-2xl">video_library</span>
</div>
<span class="text-label-sm group-hover:text-white">YouTube</span>
</a>
</div>
</div>
</div>
</section>
<!-- Google Map Section -->
<!-- Google Map Section -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop pb-section-gap reveal">
    <h2 class="font-headline-md text-3xl mb-8 text-primary text-center">
        Visit Our Office
    </h2>

    <div class="rounded-[40px] overflow-hidden shadow-lg h-[450px] relative border-8 border-white">

        <iframe
            src="https://maps.google.com/maps?q=Umuahia,Abia,Nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen
            loading="lazy">
        </iframe>

        <div class="absolute bottom-8 left-8 glass-card p-6 rounded-2xl hidden md:block bg-white/90">
            <p class="font-bold text-primary">RAW B2C LTD</p>
            <p class="text-sm">Umuahia, Abia State, Nigeria</p>

            <a
                href="https://maps.google.com/?q=Umuahia,Abia,Nigeria"
                target="_blank"
                class="text-primary text-sm font-bold flex items-center gap-1 mt-2">

                Get Directions

                <span class="material-symbols-outlined text-sm">
                    open_in_new
                </span>

            </a>
        </div>

    </div>
</section>
       

</section>
<!-- FAQ Section -->
<section class="bg-surface-container-low py-section-gap">
<div class="max-w-3xl mx-auto px-margin-mobile reveal">
<h2 class="font-headline-md text-3xl mb-12 text-center text-primary">Frequently Asked Questions</h2>
<div class="space-y-4">
<!-- Accordion Item 1 -->
<div class="accordion-item glass-card rounded-2xl overflow-hidden cursor-pointer">
<div class="flex justify-between items-center p-6 accordion-header">
<span class="font-bold text-lg">How can I contact RAW B2C LTD?</span>
<span class="material-symbols-outlined accordion-icon transition-transform">expand_more</span>
</div>
<div class="accordion-content">
<div class="px-6 pb-6 text-on-surface-variant">
                                You can reach us via our contact form above, email us directly at info@rawb2c.com, or visit our office in Victoria Island, Lagos. We are also active on WhatsApp for urgent inquiries.
                            </div>
</div>
</div>
<!-- Accordion Item 2 -->
<div class="accordion-item glass-card rounded-2xl overflow-hidden cursor-pointer">
<div class="flex justify-between items-center p-6 accordion-header">
<span class="font-bold text-lg">How long does it take to receive a response?</span>
<span class="material-symbols-outlined accordion-icon transition-transform">expand_more</span>
</div>
<div class="accordion-content">
<div class="px-6 pb-6 text-on-surface-variant">
                                Our support team typically responds to all inquiries within 24 business hours. For immediate assistance during business hours, we recommend using our WhatsApp support.
                            </div>
</div>
</div>
<!-- Accordion Item 3 -->
<div class="accordion-item glass-card rounded-2xl overflow-hidden cursor-pointer">
<div class="flex justify-between items-center p-6 accordion-header">
<span class="font-bold text-lg">Do you offer partnership opportunities?</span>
<span class="material-symbols-outlined accordion-icon transition-transform">expand_more</span>
</div>
<div class="accordion-content">
<div class="px-6 pb-6 text-on-surface-variant">
                                Yes! We are always looking for innovative partners to expand our B2C ecosystem. Please select "Partnership" in the message subject field above to be routed to our business development team.
                            </div>
</div>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop py-section-gap reveal">
<div class="bg-gradient-to-br from-primary to-secondary p-12 md:p-20 rounded-[48px] text-center text-white relative overflow-hidden">
<!-- Background decorative shapes -->
<div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
<div class="absolute bottom-0 left-0 w-48 h-48 bg-white/5 rounded-full blur-2xl -ml-24 -mb-24"></div>
<h2 class="font-display-lg text-display-lg-mobile md:text-4xl mb-6 relative z-10">Let's Build Something Great Together</h2>
<p class="font-body-lg text-white/80 mb-10 max-w-2xl mx-auto relative z-10">Experience the future of business empowerment in Africa with RAW B2C LTD.</p>
<div class="flex flex-col md:flex-row justify-center gap-4 relative z-10">
<a class="bg-white text-primary px-10 py-4 rounded-xl font-bold hover:bg-surface-container transition-all" href="#contactForm">Start a Conversation</a>
<a class="bg-primary-container/20 backdrop-blur-md border border-white/30 text-white px-10 py-4 rounded-xl font-bold hover:bg-white/10 transition-all flex items-center justify-center gap-2" href="#">
<span class="material-symbols-outlined">chat</span> WhatsApp Chat
                    </a>
</div>
</div>
</section>
</main>
<!-- Footer -->
<?php include '../includes/footer.php'; ?>
<script>
        // Scroll Reveal Animation
        const reveals = document.querySelectorAll('.reveal');
        const observerOptions = { threshold: 0.15 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);
        reveals.forEach(reveal => observer.observe(reveal));

        // Accordion Logic
        const accordionItems = document.querySelectorAll('.accordion-item');
        accordionItems.forEach(item => {
            const header = item.querySelector('.accordion-header');
            header.addEventListener('click', () => {
                const isActive = item.classList.contains('accordion-active');
                accordionItems.forEach(i => i.classList.remove('accordion-active'));
                if (!isActive) {
                    item.classList.add('accordion-active');
                }
            });
        });

     
       

        // Simple Parallax for Hero
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroBg = document.querySelector('[data-alt*="professional, high-end corporate office"]');
            if (heroBg) {
                heroBg.style.transform = `translateY(${scrolled * 0.3}px)`;
            }
        });
    </script>
</body></html>
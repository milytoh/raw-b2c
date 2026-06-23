<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>RAW HUB | Your Everyday Solution</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "secondary-fixed-dim": "#95d68f",
                      "outline": "#71796d",
                      "tertiary-fixed": "#bdefbd",
                      "outline-variant": "#c1c9bb",
                      "on-primary-container": "#89c67e",
                      "on-background": "#191c1d",
                      "on-error": "#ffffff",
                      "surface-container": "#edeeef",
                      "surface": "#f8f9fa",
                      "background": "#f8f9fa",
                      "on-tertiary-fixed": "#002107",
                      "surface-tint": "#326a2d",
                      "on-secondary": "#ffffff",
                      "on-secondary-fixed-variant": "#14521a",
                      "surface-container-high": "#e7e8e9",
                      "primary": "#003b05",
                      "inverse-surface": "#2e3132",
                      "surface-container-highest": "#e1e3e4",
                      "primary-container": "#1a5319",
                      "on-surface": "#191c1d",
                      "on-secondary-fixed": "#002204",
                      "primary-fixed-dim": "#98d68c",
                      "on-primary": "#ffffff",
                      "inverse-on-surface": "#f0f1f2",
                      "error-container": "#ffdad6",
                      "on-primary-fixed-variant": "#185218",
                      "on-tertiary-fixed-variant": "#24502a",
                      "on-surface-variant": "#41493e",
                      "secondary": "#2f6b30",
                      "on-primary-fixed": "#002202",
                      "inverse-primary": "#98d68c",
                      "tertiary-container": "#26512c",
                      "tertiary": "#0d3a17",
                      "on-tertiary": "#ffffff",
                      "secondary-fixed": "#b1f3a9",
                      "on-tertiary-container": "#93c393",
                      "surface-bright": "#f8f9fa",
                      "surface-container-lowest": "#ffffff",
                      "surface-variant": "#e1e3e4",
                      "on-secondary-container": "#336f34",
                      "secondary-container": "#aef0a6",
                      "surface-container-low": "#f3f4f5",
                      "error": "#ba1a1a",
                      "tertiary-fixed-dim": "#a2d3a2",
                      "primary-fixed": "#b3f3a6",
                      "on-error-container": "#93000a",
                      "surface-dim": "#d9dadb"
              },
              "borderRadius": {
                      "DEFAULT": "0.25rem",
                      "lg": "0.5rem",
                      "xl": "0.75rem",
                      "full": "9999px"
              },
              "spacing": {
                      "base": "8px",
                      "margin-mobile": "16px",
                      "section-gap": "80px",
                      "container-max": "1280px",
                      "margin-desktop": "40px",
                      "gutter": "24px"
              },
              "fontFamily": {
                      "headline-md": ["Montserrat"],
                      "body-lg": ["Inter"],
                      "label-sm": ["Inter"],
                      "body-md": ["Inter"],
                      "display-lg": ["Montserrat"],
                      "display-lg-mobile": ["Montserrat"]
              },
              "fontSize": {
                      "headline-md": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                      "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "label-sm": ["14px", {"lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600"}],
                      "body-md": ["16px", {"lineHeight": "1.5", "fontWeight": "400"}],
                      "display-lg": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                      "display-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "700"}]
              }
            },
          },
        }
    </script>
<style>
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
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
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .stagger-1 { transition-delay: 100ms; }
        .stagger-2 { transition-delay: 200ms; }
        .stagger-3 { transition-delay: 300ms; }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md overflow-x-hidden ml-0">
<!-- TopNavBar -->
<!-- TopNavBar -->
<header class="fixed top-0  w-full z-50 bg-surface/80 backdrop-blur-md shadow-sm">

<nav class="relative flex justify-between items-center max-w-container-max mx-auto px-margin-desktop py-4">


<!-- Logo -->
<div class="font-headline-md text-headline-md font-bold text-primary">
RAW HUB
</div>



<!-- Desktop Menu -->
<div class="hidden md:flex gap-8 items-center">


<a class="text-primary font-bold border-b-2 border-primary py-1 font-label-sm text-label-sm"
href="#">
Home
</a>


<a class="text-on-surface-variant hover:text-primary transition-colors duration-300 font-label-sm"
href="#about">
About
</a>


<a class="text-on-surface-variant hover:text-primary transition-colors duration-300 font-label-sm"
href="#services">
Services
</a>


<a class="text-on-surface-variant hover:text-primary transition-colors duration-300 font-label-sm"
href="#how-it-works">
How It Works
</a>


<a class="text-on-surface-variant hover:text-primary transition-colors duration-300 font-label-sm"
href="#partners">
Partners
</a>


<a class="text-on-surface-variant hover:text-primary transition-colors duration-300 font-label-sm"
href="#contact">
Contact
</a>


</div>





<div class="flex items-center gap-3">


<!-- Desktop CTA -->
<button class="hidden md:block bg-primary-container text-on-primary px-8 py-3 rounded-xl font-bold hover:bg-primary transition-all active:scale-95">

Book a Service

</button>



<!-- Mobile Button -->
<button 
onclick="toggleHubMenu()"
class="md:hidden w-11 h-11 rounded-xl bg-primary text-white flex items-center justify-center">


<span class="material-symbols-outlined">
menu
</span>


</button>


</div>


</nav>





<!-- Mobile Menu -->

<div 
id="hubMobileMenu"
class="hidden md:hidden bg-white shadow-lg px-6 py-6 space-y-5">


<a 
href="#"
class="block text-primary font-bold mobile-link">
Home
</a>


<a 
href="#about"
class="block text-on-surface-variant hover:text-primary mobile-link">
About
</a>


<a 
href="#services"
class="block text-on-surface-variant hover:text-primary mobile-link">
Services
</a>


<a 
href="#how-it-works"
class="block text-on-surface-variant hover:text-primary mobile-link">
How It Works
</a>


<a 
href="#partners"
class="block text-on-surface-variant hover:text-primary mobile-link">
Partners
</a>


<a 
href="#contact"
class="block text-on-surface-variant hover:text-primary mobile-link">
Contact
</a>




<button class="w-full bg-primary text-white py-3 rounded-xl font-bold">

Book a Service

</button>



</div>


</header>
<main>
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center pt-20 md:pt-20 overflow-hidden mt-0">
<div class="absolute inset-0 z-0">
<div class="w-full h-full opacity-30" data-alt="A high-resolution wide shot of a modern, sun-drenched Nigerian living room with premium wooden furniture and lush indoor plants. In the background, a professional technician in a clean uniform is checking an appliance while a homeowner uses a sleek smartphone app. The lighting is warm and natural, evoking a sense of trust, safety, and domestic harmony. The overall aesthetic is polished and high-end corporate." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA72nmPpe7ozmGcUzXQ--2H7imSTtIbv5kGetDZY4tUrLhPV2y2TiEa0N2a0EjWXr4wsf7dgEwhKfrvHuuEJOqH1mUMuU3GxV8RYXqY1RB40Nf7mPneSxWfEMKmyQ0ApuZDcwsFKEFdT7VQPczImwgcXuy4s9cX3qFP-1rxZv1kzZzINecUWH9-9wSDmzzY0fjhu5t5IIEFb4P14ezKv8frqyfbmz2WoS5nH0O8rycybANoUibOwmcB06qbW3LIPE5OGwLynH1fO9c')"></div>
<div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/80 to-transparent"></div>
</div>
<div class="relative z-10 max-w-container-max mx-auto px-6 md:px-margin-desktop grid md:grid-cols-2 gap-gutter items-center">
<div class="reveal">
<span class="inline-block px-4 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm mb-6">Your Everyday Solution</span>
<h1 class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary leading-tight mb-6">
                        RAW HUB: Empowering Your <span class="text-secondary">Household</span>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-8 max-w-lg">
                        Connecting households to reliable workmen, errands, and essential services — all in one trusted hub. Powered by RAW B2C LTD.
                    </p>
<div class="flex flex-wrap gap-4">
<button class="bg-primary text-on-primary px-10 py-4 rounded-xl font-bold shadow-lg hover:shadow-primary-container/20 transition-all flex items-center gap-2">
                            Explore Services <span class="material-symbols-outlined">arrow_forward</span>
</button>
<button class="border-2 border-primary text-primary px-10 py-4 rounded-xl font-bold hover:bg-primary-container/10 transition-all">
                            Partner With Us
                        </button>
</div>
</div>
<div class="relative hidden md:block h-[600px]">
<!-- Floating Cards -->
<div class="absolute top-10 left-10 glass-card p-6 rounded-2xl shadow-xl float-animation stagger-1 z-20 max-w-[240px]">
<div class="flex items-center gap-3 mb-2">
<div class="w-10 h-10 rounded-full bg-primary-fixed flex items-center justify-center text-primary">
<span class="material-symbols-outlined">verified</span>
</div>
<span class="font-bold text-primary">Verified Professional</span>
</div>
<p class="text-xs text-on-surface-variant">Thoroughly vetted experts for your peace of mind.</p>
</div>
<div class="absolute bottom-20 right-0 glass-card p-6 rounded-2xl shadow-xl float-animation stagger-2 z-20 max-w-[240px]">
<div class="flex items-center gap-3 mb-2">
<div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-secondary">
<span class="material-symbols-outlined">bolt</span>
</div>
<span class="font-bold text-secondary">Fast Response</span>
</div>
<p class="text-xs text-on-surface-variant">Services delivered exactly when you need them.</p>
</div>
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-primary/5 rounded-full blur-3xl"></div>
</div>
</div>
</section>
<!-- About Section -->
<section class="py-section-gap bg-surface" id="about">
<div class="max-w-container-max mx-auto px-margin-desktop text-center mb-16">
<h2 class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-4 reveal">Simplifying Everyday Life</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mx-auto reveal">Our core values define every interaction within the RAW HUB ecosystem.</p>
</div>
<div class="max-w-container-max mx-auto px-margin-desktop grid grid-cols-1 md:grid-cols-4 gap-gutter">
<div class="p-8 rounded-3xl bg-surface-container-low hover:bg-surface-container-high transition-all border border-outline-variant reveal stagger-1">
<span class="material-symbols-outlined text-primary text-4xl mb-6">shield_with_heart</span>
<h3 class="font-headline-md text-headline-md mb-3">Reliability</h3>
<p class="text-on-surface-variant">Count on us to show up and deliver excellence, every single time.</p>
</div>
<div class="p-8 rounded-3xl bg-surface-container-low hover:bg-surface-container-high transition-all border border-outline-variant reveal stagger-2">
<span class="material-symbols-outlined text-primary text-4xl mb-6">gavel</span>
<h3 class="font-headline-md text-headline-md mb-3">Integrity</h3>
<p class="text-on-surface-variant">Transparent pricing and vetted professionals you can trust in your home.</p>
</div>
<div class="p-8 rounded-3xl bg-surface-container-low hover:bg-surface-container-high transition-all border border-outline-variant reveal stagger-3">
<span class="material-symbols-outlined text-primary text-4xl mb-6">lightbulb</span>
<h3 class="font-headline-md text-headline-md mb-3">Innovation</h3>
<p class="text-on-surface-variant">Smart matching technology to find the perfect expert for your specific needs.</p>
</div>
<div class="p-8 rounded-3xl bg-surface-container-low hover:bg-surface-container-high transition-all border border-outline-variant reveal">
<span class="material-symbols-outlined text-primary text-4xl mb-6">speed</span>
<h3 class="font-headline-md text-headline-md mb-3">Convenience</h3>
<p class="text-on-surface-variant">Booking a service is as easy as sending a message or tapping a button.</p>
</div>
</div>
</section>
<!-- Problem Section -->
<section class="py-section-gap bg-primary text-on-primary rounded-[40px] mx-margin-mobile md:mx-margin-desktop overflow-hidden relative">
<div class="absolute inset-0 opacity-10">

</div>
<div class="relative z-10 max-w-container-max mx-auto px-margin-desktop text-center mb-16">
<h2 class="font-display-lg text-display-lg-mobile md:text-display-lg mb-4 reveal">Everyday Problems Need Smarter Solutions</h2>
<p class="font-body-lg text-body-lg text-on-primary/70 max-w-2xl mx-auto reveal">Why struggle with basic needs when RAW HUB can handle the heavy lifting?</p>
</div>
<div class="relative z-10 max-w-container-max mx-auto px-margin-desktop grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-primary-container p-8 rounded-2xl reveal stagger-1">
<h4 class="font-bold text-xl mb-4">Busy Professionals</h4>
<p class="text-on-primary/60 text-sm">Managing a career shouldn't mean neglecting your home's maintenance.</p>
</div>
<div class="bg-primary-container p-8 rounded-2xl reveal stagger-2">
<h4 class="font-bold text-xl mb-4">Untrusted Providers</h4>
<p class="text-on-primary/60 text-sm">Eliminate the risk of hiring unvetted strangers for critical household repairs.</p>
</div>
<div class="bg-primary-container p-8 rounded-2xl reveal stagger-3">
<h4 class="font-bold text-xl mb-4">Time-Consuming Errands</h4>
<p class="text-on-primary/60 text-sm">Stop wasting hours on grocery runs, gas refills, and school drop-offs.</p>
</div>
<div class="bg-primary-container p-8 rounded-2xl reveal">
<h4 class="font-bold text-xl mb-4">Poor Service Quality</h4>
<p class="text-on-primary/60 text-sm">No more mediocre work. We guarantee professional results on every job.</p>
</div>
</div>
</section>
<!-- Services Section - Bento Grid -->
<section class="py-section-gap" id="services">
<div class="max-w-container-max mx-auto px-margin-desktop">
<div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
<div class="max-w-xl reveal">
<h2 class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-4">Everything Your Home Needs</h2>
<p class="text-on-surface-variant font-body-lg">A comprehensive suite of essential services designed to give you back your time.</p>
</div>
<button class="bg-surface-container-highest px-6 py-3 rounded-xl font-bold text-primary hover:bg-primary-fixed transition-all reveal">View All Categories</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 grid-rows-2 gap-gutter h-auto md:h-[800px]">
<!-- Large Feature Card -->
<div class="md:col-span-2 md:row-span-2 group relative overflow-hidden rounded-[32px] bg-primary text-on-primary p-12 reveal">
<div class="absolute inset-0 opacity-40 group-hover:scale-105 transition-transform duration-700" data-alt="A professional Nigerian plumber and electrician working together on a high-end kitchen renovation. They are wearing branded RAW HUB uniforms and using modern digital diagnostic tools. The lighting is crisp and bright, emphasizing cleanliness and professional competence. A blurred mobile app interface is overlaid subtly on one corner to represent the smart matching process." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuByaHu1-HnvDi3RldM58Iujf6o-Fq-9lFwQf3odXdgXTo1opTQiE21bK3jICUPy8i1pG5b1zKQjpQ9J4N5FcxGq2K9x4b_GEUo41eYQJEQfhjLEWUY4yCo4QMYZdKF_C5p5m65q5yKqNAbBtjl2FHpGce0QddqVOO84VZ4Rq4n7lvoLQ15mYHsTMbr_ydaUsgP0SUYrIhYfSDmvlywVlY3Zov9APorS2be3xYKAh1A8u3OKV9LiVFZq87fwen42y7xDmZ039NUj-IM')"></div>
<div class="relative z-10 h-full flex flex-col justify-end">
<span class="w-fit px-4 py-1 rounded-full bg-secondary text-on-secondary font-label-sm text-label-sm mb-4">Most Popular</span>
<h3 class="text-4xl md:text-5xl font-bold mb-6">Home Maintenance &amp; Repairs</h3>
<p class="text-lg text-on-primary/80 mb-8 max-w-lg">From expert electrical wiring to intricate plumbing and general handyman tasks, our verified workmen are ready to restore your home's functionality.</p>
<div class="flex gap-4">
<span class="bg-white/10 backdrop-blur-md px-4 py-2 rounded-lg text-sm border border-white/20">Electrical</span>
<span class="bg-white/10 backdrop-blur-md px-4 py-2 rounded-lg text-sm border border-white/20">Plumbing</span>
<span class="bg-white/10 backdrop-blur-md px-4 py-2 rounded-lg text-sm border border-white/20">Painting</span>
</div>
</div>
</div>
<!-- Side Card 1 -->
<div class="group relative overflow-hidden rounded-[32px] bg-secondary-container text-on-secondary-container p-8 reveal stagger-1">
<div class="absolute inset-0 opacity-20 group-hover:scale-110 transition-transform duration-500" data-alt="A smiling young delivery person on a clean green electric scooter carrying a bag of groceries and a fresh gas cylinder. The background is a vibrant African suburban street with golden hour lighting. The image conveys speed, efficiency, and friendly service." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuArhaDWZqAjBNH_z-5WS5NROc-ByT5fYuJoG6kV8u1Gzm3Oql-I0ukiEglIcjWCleNZKXdj8Z8GeMFLmGN4GmuPRbI-AJlFvDTg5aXTkwpZJc3X8rbwJXNeopmptphr8GLXF_QRplo2WM-AMurx8ebUH37OpA8qIp6JgYe3wTDXUCrF1FJHUL-KEG9tFQh84rgY2k61qlDVp1h5RjqlHBvqCGURoHinRj0mI0Adrax0E6ibJMuGYvT1l0DdJFKJynA78gbiJbToxa8')"></div>
<div class="relative z-10 flex flex-col h-full justify-between">
<span class="material-symbols-outlined text-4xl">shopping_cart</span>
<div>
<h3 class="text-2xl font-bold mb-2">Household Errands</h3>
<p class="text-sm opacity-80">Grocery shopping, gas refilling, and school runs handled by trusted locals.</p>
</div>
</div>
</div>
<!-- Side Card 2 -->
<div class="group relative overflow-hidden rounded-[32px] bg-surface-container-highest text-primary p-8 reveal stagger-2">
<div class="absolute inset-0 opacity-10 group-hover:scale-110 transition-transform duration-500" data-alt="A logistics truck with a minimalist modern aesthetic unloading furniture at a new home. Two movers are carefully carrying a high-end sofa. The scene is organized and professional, set in a clean urban development." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCsjQ7mkqMV6eat7PBO6q38LQJfgLaP6ILRS5Oa1n2i_F9rfkrz2ViDgnnevstkkHS6rrENNgoe_zR92JtnHjmgRs7Qrts1jCjROaoYUknyClHfY0oTA1yzqYLedNEEVsD5XjibHbooutWGBvB6Q1rPea0IllYXwODoqi_DyFFyXyO-98Df0gr98S4Ob5eGvU2xa_XUywx-aH_ITyypOWXTyERrjoFDHwNH9ic4r_mX2HeKU69lEYpNB0Ibvx4truMPBsTV_9V0w68')"></div>
<div class="relative z-10 flex flex-col h-full justify-between">
<span class="material-symbols-outlined text-4xl">local_shipping</span>
<div>
<h3 class="text-2xl font-bold mb-2">Logistics &amp; Moving</h3>
<p class="text-sm text-on-surface-variant">Seamless relocation services and heavy item deliveries across your city.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- App Features / Mockup Section -->
<section class="py-section-gap bg-surface-container-low">
<div class="max-w-container-max mx-auto px-margin-desktop grid md:grid-cols-2 gap-20 items-center">
<div class="reveal">
<h2 class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-8">The Hub in Your Pocket</h2>
<ul class="space-y-8">
<li class="flex gap-6">
<div class="shrink-0 w-12 h-12 rounded-2xl bg-primary text-on-primary flex items-center justify-center">
<span class="material-symbols-outlined">psychology</span>
</div>
<div>
<h4 class="font-bold text-xl mb-1">AI Smart Match</h4>
<p class="text-on-surface-variant">Our algorithms analyze your request and the provider's track record to ensure the perfect fit.</p>
</div>
</li>
<li class="flex gap-6">
<div class="shrink-0 w-12 h-12 rounded-2xl bg-secondary text-on-secondary flex items-center justify-center">
<span class="material-symbols-outlined">location_on</span>
</div>
<div>
<h4 class="font-bold text-xl mb-1">Live Tracking</h4>
<p class="text-on-surface-variant">Real-time visibility of your assigned workman or errand runner from request to completion.</p>
</div>
</li>
<li class="flex gap-6">
<div class="shrink-0 w-12 h-12 rounded-2xl bg-tertiary-container text-on-tertiary-container flex items-center justify-center">
<span class="material-symbols-outlined">verified_user</span>
</div>
<div>
<h4 class="font-bold text-xl mb-1">Secure Escrow Payments</h4>
<p class="text-on-surface-variant">Funds are only released once you've confirmed you are satisfied with the service delivered.</p>
</div>
</li>
</ul>
</div>
<div class="relative reveal stagger-1">
<div class="aspect-[9/19] w-[300px] mx-auto bg-black rounded-[40px] border-[10px] border-outline p-4 relative shadow-2xl overflow-hidden">
<!-- App Content Mockup -->
<div class="bg-surface h-full w-full rounded-[24px] overflow-hidden flex flex-col">
<div class="p-4 flex justify-between items-center bg-primary text-on-primary">
<span class="font-bold">RAW HUB</span>
<span class="material-symbols-outlined">notifications</span>
</div>
<div class="p-4 space-y-4">
<div class="p-3 bg-primary-fixed rounded-xl flex items-center justify-between">
<span class="text-xs font-bold text-primary">Active Booking: Plumber</span>
<span class="text-[10px] px-2 py-0.5 bg-primary text-on-primary rounded-full">In Progress</span>
</div>
<div class="h-32 bg-surface-container-high rounded-xl overflow-hidden relative">
<div class="absolute inset-0 opacity-50" data-location="Port Harcourt" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC66kPHYgiCrsrDmid2pftQ9P0xhka7BH7HwrFR-X7AaU50II6xkczU2RKcEmMQPQCpgyRQAdAlWcWU7fkYZNr90a8JNdxtgqQbmjyF2yp18-RtkBfnfGFwQjOOTKaszyJKe6Hl2Yw3GMWEBdUl0pWKr27TkHo2LMp33n-mkn-WfjQTUpi3Hx3-CQVrBz5zmTJz2DDVOSkhLxrwOrxCjLiYy9vcIluJC7MPNP3ZfAgwD6nXSsMW0OmYL9VcBzvRzoV78cUnv3N1eXc')"></div>
<div class="absolute bottom-2 left-2 p-1 bg-white rounded shadow text-[10px] font-bold">Musa is 4 mins away</div>
</div>
<div class="grid grid-cols-2 gap-2">
<div class="h-16 bg-secondary-container rounded-xl flex flex-col items-center justify-center">
<span class="material-symbols-outlined text-sm">history</span>
<span class="text-[10px]">History</span>
</div>
<div class="h-16 bg-surface-container-highest rounded-xl flex flex-col items-center justify-center">
<span class="material-symbols-outlined text-sm">support_agent</span>
<span class="text-[10px]">Support</span>
</div>
</div>
<div class="p-4 border border-outline-variant rounded-xl flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-outline-variant"></div>
<div class="flex-1 space-y-1">
<div class="h-2 w-20 bg-outline-variant rounded"></div>
<div class="h-2 w-full bg-surface-container-highest rounded"></div>
</div>
</div>
</div>
</div>
</div>
<!-- Decorative Circles -->
<div class="absolute -top-10 -right-10 w-40 h-40 bg-secondary/20 rounded-full blur-3xl -z-10"></div>
<div class="absolute -bottom-10 -left-10 w-60 h-60 bg-primary/20 rounded-full blur-3xl -z-10"></div>
</div>
</div>
</section>
<!-- Traction Stats Section -->
<section class="py-20 bg-primary text-on-primary">
<div class="max-w-container-max mx-auto px-margin-desktop">
<div class="grid grid-cols-2 md:grid-cols-4 gap-gutter text-center">
<div class="reveal stagger-1">
<h2 class="text-4xl md:text-6xl font-bold mb-2">2,000+</h2>
<p class="text-primary-fixed-dim uppercase tracking-widest font-label-sm text-label-sm">Total Users</p>
</div>
<div class="reveal stagger-2">
<h2 class="text-4xl md:text-6xl font-bold mb-2">800+</h2>
<p class="text-primary-fixed-dim uppercase tracking-widest font-label-sm text-label-sm">Active Monthly</p>
</div>
<div class="reveal stagger-3">
<h2 class="text-4xl md:text-6xl font-bold mb-2">4</h2>
<p class="text-primary-fixed-dim uppercase tracking-widest font-label-sm text-label-sm">States Covered</p>
</div>
<div class="reveal">
<h2 class="text-4xl md:text-6xl font-bold mb-2">2023</h2>
<p class="text-primary-fixed-dim uppercase tracking-widest font-label-sm text-label-sm">Year Founded</p>
</div>
</div>
</div>
</section>
<!-- Story Section -->
<section class="py-section-gap overflow-hidden">
<div class="max-w-container-max mx-auto px-6 md:px-margin-desktop grid md:grid-cols-2 gap-gutter items-center">
<div class="reveal">
<h2 class="font-display-lg text-display-lg-mobile md:text-display-lg text-primary mb-8">From Real Problem To Real Solution</h2>
<div class="space-y-6 text-on-surface-variant font-body-lg">
<p>It started in 2023 at MOUAU, where a group of visionary students identified the friction in local service acquisition. What began as a campus errand service quickly evolved into a robust marketplace.</p>
<p>Today, RAW HUB is a core pillar of the <strong>RAW B2C LTD</strong> ecosystem, scaling across Abia, Enugu, Anambra, and Rivers States to redefine how households interact with service providers.</p>
</div>
<div class="mt-10 flex gap-4 overflow-x-auto pb-4">
<div class="shrink-0 px-6 py-3 rounded-full border border-primary/20 text-primary font-bold">Abia</div>
<div class="shrink-0 px-6 py-3 rounded-full border border-primary/20 text-primary font-bold">Enugu</div>
<div class="shrink-0 px-6 py-3 rounded-full border border-primary/20 text-primary font-bold">Anambra</div>
<div class="shrink-0 px-6 py-3 rounded-full border border-primary/20 text-primary font-bold">Rivers</div>
</div>
</div>
<div class="reveal stagger-1 rounded-[32px] overflow-hidden aspect-video relative shadow-2xl">
<div class="absolute inset-0 w-full h-full" data-alt="A montage of university students collaborating in a modern tech-hub workspace. They are sketching service flows on whiteboards and testing a mobile app. The mood is ambitious and focused, with a blend of academic energy and corporate professionalism. The lighting is bright and optimistic." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCw8GXiZkmHM3nAtb5oOIyAxJzWJeElgSMS-uHTkIRUKh9xag5QYYsGJSJ0nj9RyVXeXloSMkUTz3z6mgyXkeAqDrnFca9nLkvzCr_5A00RUEizvRVfB95nk_HIXFL4dS05BmH4-PRmF5ugjsjvco0RlytqDxM1lgnnlffVxcuU5wu4X-SjJfqqJ2_ObvjVqyhpIpApWMIOKgCiRNbb2NcG_qUgbrYhmuVIV4R8z1sRwXUndkO3yz3zVXod-rhAkO8-At9ADtWgeV8')"></div>
<div class="absolute inset-0 bg-primary/20"></div>
</div>
</div>
</section>
<!-- Testimonial Section -->
<section class="py-section-gap bg-surface-container">
<div class="max-w-container-max mx-auto px-margin-desktop">
<div class="glass-card max-w-4xl mx-auto p-12 md:p-20 rounded-[48px] text-center reveal">
<span class="material-symbols-outlined text-6xl text-secondary mb-8">format_quote</span>
<p class="text-2xl md:text-3xl font-headline-md text-primary mb-10 italic">"RAW HUB helped me get my gas and oven fixed the same day. The process was seamless, and the professional was polite and very efficient. I don't think I can ever go back to looking for workmen on the streets again."</p>
<div class="flex flex-col items-center">
<div class="w-16 h-16 rounded-full bg-outline-variant mb-4 overflow-hidden">
<div class="w-full h-full" data-alt="A portrait of a sophisticated Nigerian woman in her late 20s, looking professional and satisfied. She is in a well-lit home office setting. The style is soft-focus portrait photography with natural light." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDe272V35-EzWZn2YtPdAlZ47m00u08V49VLNRHo0tUvdZ57BMiFdjLyfM4U4Z1lHvwYdVaDnH86We9gSZzPF6EzljhXvkEDMffeydRFpfwOWZgklaOilLdLYCQeTAIUBzqZ_P53DiD82rsEFhPh1bczgM684jFXBLEk1kIDLMhjZ3o1Ev3hwr2LwF3pYDfvP_eYVD7VvrY6Yi-9U5U0a3KfqEV4X6B_2xoYRLOcv7RkWRuDeLjD4ZeGDItZ2rWNWE3mEANnWndYB8')"></div>
</div>
<h5 class="font-bold text-primary">Precious N.</h5>
<p class="text-on-surface-variant text-sm">Household User, Enugu</p>
</div>
</div>
</div>
</section>
<!-- Final CTA Section -->
<section class="py-section-gap">
<div class="max-w-container-max mx-auto px-margin-desktop">
<div class="bg-primary rounded-[48px] p-12 md:p-24 text-center text-on-primary overflow-hidden relative shadow-2xl reveal">
<div class="absolute inset-0 opacity-10">

</div>
<div class="relative z-10">
<h2 class="font-display-lg text-display-lg-mobile md:text-display-lg mb-8">Need Something Done?</h2>
<p class="text-xl md:text-2xl mb-12 opacity-80 max-w-2xl mx-auto">Join thousands of households across Nigeria who trust RAW HUB for their everyday needs.</p>
<div class="flex flex-col sm:flex-row gap-6 justify-center">
<button class="bg-secondary text-on-secondary px-12 py-5 rounded-2xl font-bold text-xl hover:scale-105 active:scale-95 transition-all shadow-xl">
                                Book A Service Now
                            </button>
<button class="bg-white/10 backdrop-blur-md border border-white/20 text-on-primary px-12 py-5 rounded-2xl font-bold text-xl hover:bg-white/20 transition-all">
                                Download Mobile App
                            </button>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-section-gap px-margin-desktop bg-surface-container border-t border-outline-variant">
<div class="flex flex-col md:flex-row justify-between items-start max-w-container-max mx-auto gap-gutter">
<div class="max-w-xs mb-10 md:mb-0">
<div class="font-headline-md text-headline-md font-bold text-primary mb-4">RAW HUB</div>
<p class="text-on-surface-variant text-sm leading-relaxed">
                    Connecting premium households to verified essential services. A product of RAW B2C LTD.
                </p>
</div>
<div class="grid grid-cols-2 sm:grid-cols-3 gap-20">
<div class="flex flex-col gap-4">
<h6 class="font-bold text-primary">Company</h6>
<a class="text-on-surface-variant hover:text-primary transition-all text-sm" href="#">Privacy Policy</a>
<a class="text-on-surface-variant hover:text-primary transition-all text-sm" href="#">Terms of Service</a>
<a class="text-on-surface-variant hover:text-primary transition-all text-sm" href="#">Careers</a>
</div>
<div class="flex flex-col gap-4">
<h6 class="font-bold text-primary">Support</h6>
<a class="text-on-surface-variant hover:text-primary transition-all text-sm" href="#">FAQ</a>
<a class="text-on-surface-variant hover:text-primary transition-all text-sm" href="#">Contact Us</a>
<a class="text-on-surface-variant hover:text-primary transition-all text-sm" href="#">Help Center</a>
</div>
</div>
</div>
<div class="max-w-container-max mx-auto mt-20 pt-8 border-t border-outline-variant/30 flex flex-col md:flex-row justify-between items-center gap-6">
<p class="text-on-surface-variant font-label-sm text-label-sm text-center">© 2026 RAW HUB. Powered by RAW B2C LTD. All rights reserved.</p>
<div class="flex gap-6">
<span class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer transition-colors">face_nod</span>
<span class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer transition-colors">share</span>
<span class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer transition-colors">linked_camera</span>
</div>
</div>
</footer>
<script>

    function toggleHubMenu(){

const menu = document.getElementById("hubMobileMenu");

menu.classList.toggle("hidden");

}



// close after clicking mobile link

document.querySelectorAll(".mobile-link").forEach(link=>{


link.addEventListener("click",()=>{


document.getElementById("hubMobileMenu")
.classList.add("hidden");


});


});
        // Simple scroll reveal interaction
        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach((el) => {
            observer.observe(el);
        });

        // Sticky Header transparency
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            if (window.scrollY > 50) {
                header.classList.add('shadow-md');
                header.classList.remove('shadow-sm');
            } else {
                header.classList.remove('shadow-md');
                header.classList.add('shadow-sm');
            }
        });
    </script>
</body></html>
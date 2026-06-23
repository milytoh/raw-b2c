<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Mi Look | Premium Beauty &amp; Grooming Services</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&amp;family=Playfair+Display:wght@600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "primary": "#735c00",
                    "error-container": "#ffdad6",
                    "surface-dim": "#dcd9d9",
                    "primary-fixed": "#ffe088",
                    "surface-container-highest": "#e4e2e1",
                    "surface-variant": "#e4e2e1",
                    "background": "#fbf9f8",
                    "on-tertiary": "#ffffff",
                    "secondary-container": "#ebddd7",
                    "on-surface-variant": "#4d4635",
                    "on-primary-fixed-variant": "#574500",
                    "on-error-container": "#93000a",
                    "on-secondary-container": "#6b605c",
                    "on-tertiary-fixed": "#301216",
                    "on-secondary-fixed-variant": "#4e4541",
                    "surface-container-high": "#eae8e7",
                    "on-tertiary-container": "#603b3e",
                    "outline": "#7f7663",
                    "surface-tint": "#735c00",
                    "surface-container-low": "#f6f3f2",
                    "on-primary-fixed": "#241a00",
                    "on-tertiary-fixed-variant": "#623c40",
                    "on-secondary-fixed": "#211a17",
                    "on-primary": "#ffffff",
                    "tertiary-container": "#d9a6aa",
                    "tertiary": "#7c5357",
                    "error": "#ba1a1a",
                    "on-error": "#ffffff",
                    "tertiary-fixed-dim": "#eeb9bd",
                    "inverse-surface": "#303030",
                    "on-secondary": "#ffffff",
                    "secondary-fixed": "#eedfda",
                    "secondary": "#675c58",
                    "surface-bright": "#fbf9f8",
                    "inverse-on-surface": "#f3f0f0",
                    "surface-container": "#f0eded",
                    "on-background": "#1b1c1c",
                    "on-primary-container": "#554300",
                    "primary-fixed-dim": "#e9c349",
                    "primary-container": "#d4af37",
                    "outline-variant": "#d0c5af",
                    "secondary-fixed-dim": "#d2c4be",
                    "inverse-primary": "#e9c349",
                    "surface": "#fbf9f8",
                    "surface-container-lowest": "#ffffff",
                    "tertiary-fixed": "#ffdadc",
                    "on-surface": "#1b1c1c"
            },
            "borderRadius": {
                    "DEFAULT": "1rem",
                    "lg": "2rem",
                    "xl": "3rem",
                    "full": "9999px"
            },
            "spacing": {
                    "xs": "4px",
                    "sm": "12px",
                    "lg": "48px",
                    "xl": "80px",
                    "margin-mobile": "20px",
                    "base": "8px",
                    "margin-desktop": "64px",
                    "md": "24px",
                    "gutter": "24px"
            },
            "fontFamily": {
                    "label-sm": ["Montserrat"],
                    "body-md": ["Montserrat"],
                    "display-lg": ["Playfair Display"],
                    "label-md": ["Montserrat"],
                    "headline-lg-mobile": ["Playfair Display"],
                    "headline-md": ["Playfair Display"],
                    "headline-lg": ["Playfair Display"],
                    "body-lg": ["Montserrat"]
            },
            "fontSize": {
                    "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.03em", "fontWeight": "500"}],
                    "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                    "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                    "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "600"}],
                    "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                    "headline-lg": ["32px", {"lineHeight": "40px", "fontWeight": "600"}],
                    "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}]
            }
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-panel {
            background: rgba(251, 249, 248, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
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
        .hover-lift {
            transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .hover-lift:hover {
            transform: translateY(-10px);
        }
        .zoom-img {
            transition: transform 12s linear;
        }
        .hero-container:hover .zoom-img {
            transform: scale(1.1);
        }
        .shadow-soft {
            box-shadow: 0px 10px 30px rgba(245, 230, 224, 0.25);
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed-dim selection:text-primary">
<!-- Top Navigation Bar -->
<!-- Top Navigation Bar -->
<nav class="fixed top-0 w-full z-50 shadow-soft bg-surface/80 backdrop-blur-md">

<div class="relative flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop py-base max-w-[1440px] mx-auto">


<!-- Logo -->
<div class="font-display-lg text-headline-md text-primary tracking-tight">
Mi Look
</div>



<!-- Desktop Navigation -->
<div class="hidden md:flex gap-md items-center">

<a class="text-primary border-b-2 border-primary pb-1 font-label-md" href="#home">
Home
</a>

<a class="text-on-surface-variant hover:text-primary transition-colors font-label-md" href="#about">
About
</a>

<a class="text-on-surface-variant hover:text-primary transition-colors font-label-md" href="#services">
Services
</a>

<a class="text-on-surface-variant hover:text-primary transition-colors font-label-md" href="#professionals">
Professionals
</a>

<a class="text-on-surface-variant hover:text-primary transition-colors font-label-md" href="#contact">
Contact
</a>

</div>



<div class="flex items-center gap-3">


<!-- Desktop CTA -->
<button class="hidden md:block bg-primary-container text-on-primary-container px-md py-xs rounded-full font-label-md hover:opacity-80 transition-opacity active:scale-95">

Book a Service

</button>



<!-- Mobile Menu Button -->
<button
onclick="toggleMobileMenu()"
class="md:hidden w-10 h-10 rounded-full bg-primary text-white flex items-center justify-center">

<span class="material-symbols-outlined">
menu
</span>

</button>


</div>



</div>





<!-- Mobile Menu -->

<div 
id="mobileMenu"
class="hidden md:hidden bg-white shadow-lg px-6 py-6 space-y-5">


<a 
href="#home"
class="block text-primary font-bold">
Home
</a>


<a 
href="#about"
class="block text-on-surface-variant hover:text-primary">
About
</a>


<a 
href="#services"
class="block text-on-surface-variant hover:text-primary">
Services
</a>


<a 
href="#professionals"
class="block text-on-surface-variant hover:text-primary">
Professionals
</a>


<a 
href="#contact"
class="block text-on-surface-variant hover:text-primary">
Contact
</a>



<button 
class="w-full bg-primary text-white py-3 rounded-full font-bold">

Book a Service

</button>


</div>


</nav>
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center pt-xl hero-container overflow-hidden" id="home">
<div class="absolute inset-0 z-0">
<img alt="Mi Look Brand Visual" class="w-full h-full object-cover zoom-img" src="https://lh3.googleusercontent.com/aida/AP1WRLsHbUyMEsMNkI4SfokDZnP_nZC6dS8zD1JVFioe5NanwngL9tPFBDo_FwhIoV-HuYCZOfkCiws2D43bdZvBsV1dOl2SeZFluQTkEmGkBS4l03CKrLILF3xkFg4sB1E7w2FZBqTOxxVnEyhH8XoWkdesI_o8SPF31oLU7eAZnDeh7uQZM9sUMarpXZ4ju0gNyT5RRF_NZ6NDSmc_kBSuefeNZl0wL2WiG-533aGniqksnAq2xrHMlhRm4To"/>
<div class="absolute inset-0 bg-gradient-to-r from-background via-background/60 to-transparent"></div>
</div>
<div class="relative z-10 w-full max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
<div class="max-w-2xl reveal">
<span class="inline-block px-md py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm mb-md">PREMIUM BEAUTY ON DEMAND</span>
<h1 class="font-display-lg text-[44px] md:text-display-lg leading-tight mb-md text-on-surface">
                    Your Beauty &amp; Appearance Partner, <span class="text-primary">Anytime, Anywhere.</span>
</h1>
<p class="font-body-lg text-on-surface-variant mb-lg max-w-lg">
                    Professional beauty and grooming services delivered directly to your location. Book trusted experts for your personal care, styling, and appearance needs.
                </p>
<div class="flex flex-col sm:flex-row gap-md">
<button class="bg-primary text-on-primary px-xl py-md rounded-full font-label-md hover:shadow-lg transition-all active:scale-95">
                        Book Now
                    </button>
<button class="glass-panel border border-outline-variant text-on-surface px-xl py-md rounded-full font-label-md hover:bg-surface-container-low transition-all active:scale-95">
                        Explore Services
                    </button>
</div>
</div>
</div>
</section>
<!-- About Section -->
<section class="py-xl bg-surface-container-lowest" id="about">
<div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop grid md:grid-cols-2 items-center gap-xl">
<div class="reveal">
<h2 class="font-display-lg text-headline-lg mb-md">Beauty Care Made Simple</h2>
<p class="font-body-lg text-on-surface-variant mb-lg leading-relaxed">
                    Mi Look connects customers with skilled beauty professionals across Nigeria, making it easy to access reliable beauty services wherever you are. We believe your appearance is your calling card, and accessing professional care shouldn't be a hurdle.
                </p>
<div class="grid grid-cols-3 gap-md">
<div class="text-center">
<div class="w-12 h-12 bg-secondary-container rounded-full flex items-center justify-center mx-auto mb-xs">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">verified</span>
</div>
<p class="font-label-md text-on-surface">Confidence</p>
</div>
<div class="text-center">
<div class="w-12 h-12 bg-secondary-container rounded-full flex items-center justify-center mx-auto mb-xs">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">schedule</span>
</div>
<p class="font-label-md text-on-surface">Convenience</p>
</div>
<div class="text-center">
<div class="w-12 h-12 bg-secondary-container rounded-full flex items-center justify-center mx-auto mb-xs">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-label-md text-on-surface">Quality</p>
</div>
</div>
</div>
<div class="relative reveal delay-100">
<div class="aspect-[4/5] rounded-xl overflow-hidden shadow-soft">
<img class="w-full h-full object-cover" data-alt="A portrait of a diverse group of African beauty professionals including a barber, a hairstylist, and a makeup artist, standing together in a bright, modern minimalist studio. The lighting is soft and golden, accentuating their professional attire and warm expressions. The overall vibe is high-end, inclusive, and authoritative, reflecting the premium quality of Mi Look's network." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3CsrB_ORjtCDwEzB_MZ0ROL1L5aZnKCHjVPpYTG99E2RbsA9Nm-vSTOAJv3ZJbs5VBRP7MRP-ThBGFKoDAo5kEnHP69UO6uIrEmANdOQq6YpjeDXLbuZvwymU0oq3PAnyus1_LueDYVFTXflalBqI0IAI6mhBUQ0xiDF07isciOExvq3FXAk1veJ2VjGA1Se23mIyG2gEFNXo_HSFyuf1pUe0O8-dlINkwODSTNi9Y6BPkd4HrHx7IQ1VkVrdZosfS9aLfmWr1J8"/>
</div>
<div class="absolute -bottom-md -left-md glass-panel p-lg rounded-lg shadow-soft border border-outline-variant/30 max-w-[240px] hidden md:block">
<p class="font-display-lg text-primary text-headline-md">500+</p>
<p class="font-label-md text-on-surface-variant">Verified Specialists in Nigeria</p>
</div>
</div>
</div>
</section>
<!-- Services Section -->
<section class="py-xl" id="services">
<div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop text-center mb-xl">
<h2 class="font-display-lg text-headline-lg mb-xs">Our Expert Services</h2>
<p class="font-body-md text-on-surface-variant">Curated beauty and wellness experiences delivered to your doorstep.</p>
</div>
<div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-md">
<!-- Service Card 1 -->
<div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift group reveal">
<div class="h-48 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="A macro shot of a precision fade haircut in progress, focusing on the sharp lines and clean scalp. The lighting is studio-quality, emphasizing the professional tools used. The aesthetic is clean and modern with warm beige highlights in the background, matching the brand colors of Mi Look." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_KP1jOq5TYvnGkaOSpdncMHdkJI6pNBKQMv4MmUaLOzBkGOzsnfgFoaWC1_rW_bkyfxqjPlZ0BVmzrlQEAdSHQlnIlMJupZQnC5t3MqvZAGm4AWLWPTFWlBLAZH4vgG9OttD4Jj7sZmVMQv1ZZQWegCY6ppbZD1-JF28B-itj1t_JcThx5uF_gtw1Zsz4VmTysTWBcx5e73W_bZbTKU_6DILHs0ZbdWqZbz5labX1elT7gaCR2-j0Jw8ShkwsKOugZPek5w38GWg"/>
</div>
<div class="p-md">
<div class="flex items-center gap-xs mb-xs">
<span class="material-symbols-outlined text-primary text-[20px]">content_cut</span>
<h3 class="font-headline-md text-[18px]">Barbing</h3>
</div>
<p class="text-label-sm text-on-surface-variant mb-md">Precision cuts and classic grooming from top specialists.</p>
<button class="w-full py-xs border border-primary text-primary rounded-full font-label-md group-hover:bg-primary group-hover:text-white transition-all">Book Now</button>
</div>
</div>
<!-- Service Card 2 -->
<div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift group reveal delay-100">
<div class="h-48 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="Intricate African hair braiding style showcased in a luxury setting. The lighting is soft and focuses on the detailed texture and sheen of the braids. The background is a soft-focus minimalist interior with neutral nude and blush tones, evoking a high-end beauty salon atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCAfh3fhwXl_kcaPl8Rkzzw14941btXOOYEOZbmwuzDLBq-uvfxVsnPjzePcXDjGf3WjyUtpwsaBncT4fEEzmx445DTDdciyoXhSW3xRuT7Prvr0ZGZyUOjRv45XigUbqT05VnrSwa1iZ0uIxyosX0hQ2PFXNa1oVMZi2Pai_D9i10uNPSsVG0cVYtP9Ejq2xZas-x7ZBZRh-QvBUb2IomAw9hJn15xJqb4GM25SNcDZ52IGRrv6RP7VhCfvm0W5ZKgQdFXnoDs8mo"/>
</div>
<div class="p-md">
<div class="flex items-center gap-xs mb-xs">
<span class="material-symbols-outlined text-primary text-[20px]">face_6</span>
<h3 class="font-headline-md text-[18px]">Braiding &amp; Weaving</h3>
</div>
<p class="text-label-sm text-on-surface-variant mb-md">Traditional and modern braiding styles tailored for you.</p>
<button class="w-full py-xs border border-primary text-primary rounded-full font-label-md group-hover:bg-primary group-hover:text-white transition-all">Book Now</button>
</div>
</div>
<!-- Service Card 3 -->
<div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift group reveal delay-200">
<div class="h-48 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="A professional nail technician applying gold foil accents to a nude-colored manicure. The scene is elegantly lit with a focus on hand care and high-end aesthetic. The background is soft and airy, consistent with the minimalist luxury tech theme of the Mi Look brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-TFHLsjc4ix6MTj3nEK-sBSTpAerux_YvTdDTXMafBjLFe5NwFvS03FU2-y43sH8ssbSTOYnfdfmPicP_6ggxrCvgtOC_WXW4Rq6ZLJkf5TXXTvZvzW-rXV9vx7AsBSQurwoMH8bwLdzieDsismZ1Njdlpvu__d7iMVU8bqmLLdD-HGKUkFri6waQ3dq9lfjRf1lJfIvdzw0TlLSe_dXRIzioRVdvV2hDY9jD5Z8fj0br45R2mdpxLG8qwb8y70sOQirwWKC00DA"/>
</div>
<div class="p-md">
<div class="flex items-center gap-xs mb-xs">
<span class="material-symbols-outlined text-primary text-[20px]">brush</span>
<h3 class="font-headline-md text-[18px]">Nail Care</h3>
</div>
<p class="text-label-sm text-on-surface-variant mb-md">Luxury manicures and pedicures in the comfort of home.</p>
<button class="w-full py-xs border border-primary text-primary rounded-full font-label-md group-hover:bg-primary group-hover:text-white transition-all">Book Now</button>
</div>
</div>
<!-- Service Card 4 -->
<div class="bg-white rounded-xl overflow-hidden shadow-soft hover-lift group reveal delay-300">
<div class="h-48 overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="A high-end makeup application session featuring vibrant yet sophisticated eyeshadow colors. The lighting is diffused and flattering, creating a cinematic look. The subject has glowing skin and a confident expression, perfectly capturing the premium hospitality and beauty essence of Mi Look." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAbPR5IIDZm6-myeFdTuwH-R1NmkdmHh-hcPKQ-phtrkPyUaCFQmKp4R6lNx8LV0Id70sJqhxhYKYAG-wf7TGXXYMY2n5gP_CRh3_zfeLQQYCpEdtCqKB778sVEtcgGfJKvAktQp5bZ6MundLr6BXyVDfIivWUy5AvgC3rwwADvbj5ymz1q37jBbXKm4O1WOjPflivOrXjI5xJ-6dvwH-1IeK93leXvvi0WU_FOzdqeu4zsg2-P8MvSQk0NYnnNUyx8lHRFgPCXvwE"/>
</div>
<div class="p-md">
<div class="flex items-center gap-xs mb-xs">
<span class="material-symbols-outlined text-primary text-[20px]">flare</span>
<h3 class="font-headline-md text-[18px]">Makeup Artist</h3>
</div>
<p class="text-label-sm text-on-surface-variant mb-md">Glamour or natural looks for weddings, events, or shoots.</p>
<button class="w-full py-xs border border-primary text-primary rounded-full font-label-md group-hover:bg-primary group-hover:text-white transition-all">Book Now</button>
</div>
</div>
</div>
</section>
<!-- How It Works Section -->
<section class="py-xl bg-secondary-container/30">
<div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
<h2 class="font-display-lg text-headline-lg text-center mb-xl">How It Works</h2>
<div class="grid md:grid-cols-3 gap-xl relative">
<!-- Step 1 -->
<div class="flex flex-col items-center text-center reveal">
<div class="w-20 h-20 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center text-headline-md mb-md shadow-soft">
<span class="material-symbols-outlined text-[32px]">touch_app</span>
</div>
<h3 class="font-headline-md mb-xs">1. Choose Service</h3>
<p class="text-on-surface-variant">Browse our extensive menu of beauty and grooming services.</p>
</div>
<!-- Step 2 -->
<div class="flex flex-col items-center text-center reveal delay-100">
<div class="w-20 h-20 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center text-headline-md mb-md shadow-soft">
<span class="material-symbols-outlined text-[32px]">event_available</span>
</div>
<h3 class="font-headline-md mb-xs">2. Book Professional</h3>
<p class="text-on-surface-variant">Select a verified expert and choose a time that fits your schedule.</p>
</div>
<!-- Step 3 -->
<div class="flex flex-col items-center text-center reveal delay-200">
<div class="w-20 h-20 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center text-headline-md mb-md shadow-soft">
<span class="material-symbols-outlined text-[32px]">check_circle</span>
</div>
<h3 class="font-headline-md mb-xs">3. Enjoy Service</h3>
<p class="text-on-surface-variant">Relax as our professional arrives at your location to deliver excellence.</p>
</div>
</div>
</div>
</section>
<!-- Professionals Showcase -->
<section class="py-xl" id="professionals">
<div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
<div class="flex flex-col md:flex-row justify-between items-end mb-xl gap-md">
<div>
<h2 class="font-display-lg text-headline-lg mb-xs">Our Top Specialists</h2>
<p class="font-body-md text-on-surface-variant">Work with the best in the industry, thoroughly vetted for quality.</p>
</div>
<a class="text-primary font-label-md flex items-center gap-xs hover:gap-md transition-all" href="#">
                    View All Experts <span class="material-symbols-outlined">arrow_forward</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-md">
<!-- Expert Card 1 -->
<div class="glass-panel border border-outline-variant/30 rounded-xl p-md flex items-center gap-md reveal">
<div class="w-24 h-24 rounded-lg overflow-hidden shrink-0">
<img class="w-full h-full object-cover" data-alt="A headshot of a smiling, professional male barber with impeccably groomed facial hair. He is wearing a minimalist, modern apron over a clean white shirt. The background is a soft blur of a high-end salon with gold and wood accents. His expression conveys trust, expertise, and friendly service." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCuYpwzM6SAdpayxOV6qVm1pWhfj0nWm-YxNHpFHzMfBTCo0cytiuw3RqQfKkzDMGyhXIULn8iCqh7zHHxaen1e_mzSI5LblInicsj1se51pMLCIpmZC2aKxoi_QWHX6foy2CUP9hknGQQ9aC3gFu3bHl11WPXoaD9K10OtaaED5Bln7vAy_kl9oM4k91BG8aHciVqepfRUo2BB1aymIU0XLP4oIHzRTn2eM5wZRDNBAgSxFrKJl9al_yWE34Wt7OadLyPzol5Yg64"/>
</div>
<div>
<div class="flex items-center gap-xs mb-1">
<h4 class="font-headline-md text-[16px]">Daniel K.</h4>
<span class="material-symbols-outlined text-primary text-[14px]" style="font-variation-settings: 'FILL' 1;">verified</span>
</div>
<p class="text-label-sm text-on-surface-variant mb-1">Master Barber</p>
<div class="flex items-center gap-1 mb-2">
<span class="material-symbols-outlined text-[#D4AF37] text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-label-sm font-bold">4.9</span>
<span class="text-label-sm text-on-surface-variant">(120 reviews)</span>
</div>
<p class="text-[12px] font-medium text-primary">8 Years Experience</p>
</div>
</div>
<!-- Expert Card 2 -->
<div class="glass-panel border border-outline-variant/30 rounded-xl p-md flex items-center gap-md reveal delay-100">
<div class="w-24 h-24 rounded-lg overflow-hidden shrink-0">
<img class="w-full h-full object-cover" data-alt="A portrait of a professional female hair stylist with beautiful, natural braids. She is smiling warmly in a bright, airy setting with soft blush pink lighting. She is wearing stylish but practical work clothes. The image conveys a high level of skill, care, and approachability in line with Mi Look's brand identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuABx7-5WJkf1ISucmmj5qheIK3axPnzTJHmqMG_eCHeiD1bCH1AChNLMUBHnDCFOoLWWdybVlDd9TivVHflEbKu-B4O5A323pjBJqAq3YV1yF3y8mNfYr565KwiiekjNEFJyacB_CUrWMsgx9UnvhcrokB0HHQXhWgqRLJFQVOxe87AX5fevsAl4ZmT15LKnVdec2J2tey5rga_t4d3RgNEDXAsu3_Lm3eaRTwM1gwjui_RajPerrNT9LayU1laamzwzLkrZLgpfgU"/>
</div>
<div>
<div class="flex items-center gap-xs mb-1">
<h4 class="font-headline-md text-[16px]">Sarah O.</h4>
<span class="material-symbols-outlined text-primary text-[14px]" style="font-variation-settings: 'FILL' 1;">verified</span>
</div>
<p class="text-label-sm text-on-surface-variant mb-1">Braiding Expert</p>
<div class="flex items-center gap-1 mb-2">
<span class="material-symbols-outlined text-[#D4AF37] text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-label-sm font-bold">5.0</span>
<span class="text-label-sm text-on-surface-variant">(85 reviews)</span>
</div>
<p class="text-[12px] font-medium text-primary">5 Years Experience</p>
</div>
</div>
<!-- Expert Card 3 -->
<div class="glass-panel border border-outline-variant/30 rounded-xl p-md flex items-center gap-md reveal delay-200">
<div class="w-24 h-24 rounded-lg overflow-hidden shrink-0">
<img class="w-full h-full object-cover" data-alt="Professional female makeup artist looking directly at the camera with a calm and confident expression. Her own makeup is flawless and sophisticated. The background is a soft, warm neutral tone with subtle studio lighting hints. The style is modern, upscale, and reflects professional artistry and premium beauty tech vibes." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCscsEZehNn_u54ba_RQ0XvH6mcmsnOe7XEtQeCYvPX3C4RWW333hemjh9NhkLasZZuDsh1u_EY8-1ry3J21_AtUxaHmdhd-Unvin7fZAHX4VI2PVa61UsrjiBMThiKDxCI7sfWOTK1gEwimWUwIi8sjFa8dCCg2CFKBcB8CxXZ7PvhTlzoJmVA3vBVgXZfeVnFg06tWs8JEWDZn7A-O16Kjs_zVVUv79Iw_QXlZzYB8I4mQmt9EI1vZiXc40dLxM92Dp_wf6PIyrI"/>
</div>
<div>
<div class="flex items-center gap-xs mb-1">
<h4 class="font-headline-md text-[16px]">Amara J.</h4>
<span class="material-symbols-outlined text-primary text-[14px]" style="font-variation-settings: 'FILL' 1;">verified</span>
</div>
<p class="text-label-sm text-on-surface-variant mb-1">Editorial Makeup</p>
<div class="flex items-center gap-1 mb-2">
<span class="material-symbols-outlined text-[#D4AF37] text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-label-sm font-bold">4.8</span>
<span class="text-label-sm text-on-surface-variant">(210 reviews)</span>
</div>
<p class="text-[12px] font-medium text-primary">10 Years Experience</p>
</div>
</div>
</div>
</div>
</section>
<!-- App Booking & Phone Mockup -->
<section class="py-xl bg-surface-container overflow-hidden">
<div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop grid md:grid-cols-2 items-center gap-xl">
<div class="reveal">
<h2 class="font-display-lg text-headline-lg mb-md">The Modern Way to Look Good</h2>
<p class="font-body-lg text-on-surface-variant mb-lg">
                    Download the Mi Look app to manage your appointments, discover new styles, and earn rewards with every booking.
                </p>
<div class="space-y-md mb-lg">
<div class="flex items-start gap-md">
<div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary">notifications_active</span>
</div>
<div>
<h4 class="font-label-md">Real-time Tracking</h4>
<p class="text-label-sm text-on-surface-variant">Know exactly when your professional will arrive.</p>
</div>
</div>
<div class="flex items-start gap-md">
<div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary">payments</span>
</div>
<div>
<h4 class="font-label-md">Secure Payments</h4>
<p class="text-label-sm text-on-surface-variant">Hassle-free, cashless transactions via the app.</p>
</div>
</div>
</div>
<div class="flex gap-md">
<button class="bg-black text-white px-md py-sm rounded-lg flex items-center gap-xs">
<span class="material-symbols-outlined">apps</span>
<div class="text-left"><p class="text-[10px] leading-none">Download on</p><p class="font-bold text-sm">App Store</p></div>
</button>
<button class="bg-black text-white px-md py-sm rounded-lg flex items-center gap-xs">
<span class="material-symbols-outlined">play_books</span>
<div class="text-left"><p class="text-[10px] leading-none">Get it on</p><p class="font-bold text-sm">Google Play</p></div>
</button>
</div>
</div>
<div class="relative reveal delay-200">
<div class="relative mx-auto w-[280px] h-[580px] bg-[#111] rounded-[3rem] border-[8px] border-[#333] shadow-2xl overflow-hidden">
<div class="absolute top-0 w-full h-6 bg-[#111] z-20 flex justify-center">
<div class="w-20 h-4 bg-[#111] rounded-b-xl"></div>
</div>
<div class="p-md pt-lg bg-background h-full">
<div class="flex justify-between items-center mb-md">
<div class="font-display-lg text-primary text-[18px]">Mi Look</div>
<span class="material-symbols-outlined text-primary">account_circle</span>
</div>
<div class="bg-secondary-container p-sm rounded-lg mb-md">
<p class="text-label-sm font-bold mb-xs">Find Your Next Look</p>
<div class="bg-white/80 h-8 rounded-full flex items-center px-sm gap-xs">
<span class="material-symbols-outlined text-[16px] text-outline">search</span>
<span class="text-[10px] text-outline">Search barbing, nails...</span>
</div>
</div>
<p class="font-label-md mb-xs">Recommended</p>
<div class="space-y-sm">
<div class="flex gap-sm items-center bg-white p-sm rounded-lg shadow-sm">
<div class="w-10 h-10 bg-surface-dim rounded-md"></div>
<div class="flex-1"><div class="h-2 w-20 bg-surface-dim rounded-full mb-1"></div><div class="h-2 w-12 bg-surface-container-highest rounded-full"></div></div>
<div class="w-6 h-6 rounded-full border border-primary"></div>
</div>
<div class="flex gap-sm items-center bg-white p-sm rounded-lg shadow-sm">
<div class="w-10 h-10 bg-surface-dim rounded-md"></div>
<div class="flex-1"><div class="h-2 w-20 bg-surface-dim rounded-full mb-1"></div><div class="h-2 w-12 bg-surface-container-highest rounded-full"></div></div>
<div class="w-6 h-6 rounded-full border border-primary"></div>
</div>
</div>
</div>
</div>
<!-- Decorative Elements -->
<div class="absolute -z-10 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[400px] h-[400px] bg-primary/5 rounded-full blur-[80px]"></div>
</div>
</div>
</section>
<!-- Testimonials -->
<section class="py-xl">
<div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop">
<h2 class="font-display-lg text-headline-lg text-center mb-xl">What Our Clients Say</h2>
<div class="grid md:grid-cols-3 gap-md">
<div class="bg-white p-lg rounded-xl shadow-soft reveal">
<div class="flex gap-xs mb-md">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-on-surface mb-lg italic">"The convenience is unmatched. I booked a barber for my sons on a Sunday morning and they were here within the hour. Quality service!"</p>
<div class="flex items-center gap-md">
<div class="w-12 h-12 rounded-full bg-secondary-container"></div>
<div>
<p class="font-label-md">Tunde A.</p>
<p class="text-label-sm text-on-surface-variant">Lagos, NG</p>
</div>
</div>
</div>
<div class="bg-white p-lg rounded-xl shadow-soft reveal delay-100">
<div class="flex gap-xs mb-md">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
</div>
<p class="font-body-md text-on-surface mb-lg italic">"I was nervous about booking a makeup artist for my wedding through an app, but Amara was incredible. Simply flawless work."</p>
<div class="flex items-center gap-md">
<div class="w-12 h-12 rounded-full bg-secondary-container"></div>
<div>
<p class="font-label-md">Ify N.</p>
<p class="text-label-sm text-on-surface-variant">Abuja, NG</p>
</div>
</div>
</div>
<div class="bg-white p-lg rounded-xl shadow-soft reveal delay-200">
<div class="flex gap-xs mb-md">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 0;">star</span>
</div>
<p class="font-body-md text-on-surface mb-lg italic">"Mi Look is my go-to for hair braiding now. No more sitting in traffic for hours. The stylist came to me and did a perfect job."</p>
<div class="flex items-center gap-md">
<div class="w-12 h-12 rounded-full bg-secondary-container"></div>
<div>
<p class="font-label-md">Bisi O.</p>
<p class="text-label-sm text-on-surface-variant">Port Harcourt, NG</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Final CTA Section -->
<section class="py-[120px] bg-primary relative overflow-hidden">
<div class="absolute inset-0 opacity-10">
<div class="absolute top-0 right-0 w-[600px] h-[600px] bg-white rounded-full blur-[150px] -translate-y-1/2 translate-x-1/2"></div>
<div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-primary-fixed-dim rounded-full blur-[150px] translate-y-1/2 -translate-x-1/2"></div>
</div>
<div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop relative z-10 text-center">
<h2 class="font-display-lg text-white text-[40px] md:text-[56px] leading-tight mb-lg max-w-3xl mx-auto reveal">
                Ready to upgrade your look? Book professional beauty services today.
            </h2>
<button class="bg-white text-primary px-xl py-md rounded-full font-headline-md text-lg hover:shadow-2xl transition-all hover:scale-105 active:scale-95 reveal delay-200">
                Start Booking
            </button>
</div>
</section>
<!-- Footer -->
<footer class="bg-surface-container-low border-t border-secondary-container">
<div class="flex flex-col md:flex-row justify-between items-start w-full px-margin-mobile md:px-margin-desktop py-xl gap-md max-w-[1440px] mx-auto">
<div class="max-w-xs">
<div class="font-display-lg text-headline-lg text-primary mb-md">Mi Look</div>
<p class="text-body-md text-secondary mb-md">Premium beauty and grooming services delivered to your doorstep across Nigeria.</p>
<div class="flex gap-md">
<a class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all" href="#"><span class="material-symbols-outlined">face_nod</span></a>
<a class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all" href="#"><span class="material-symbols-outlined">camera</span></a>
<a class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all" href="#"><span class="material-symbols-outlined">alternate_email</span></a>
</div>
</div>
<div class="grid grid-cols-2 sm:grid-cols-3 gap-xl w-full md:w-auto">
<div>
<h4 class="font-label-md text-primary mb-md">Company</h4>
<ul class="space-y-sm">
<li><a class="text-secondary hover:text-primary transition-all font-body-md" href="#">About</a></li>
<li><a class="text-secondary hover:text-primary transition-all font-body-md" href="#">Careers</a></li>
<li><a class="text-secondary hover:text-primary transition-all font-body-md" href="#">Blog</a></li>
</ul>
</div>
<div>
<h4 class="font-label-md text-primary mb-md">Services</h4>
<ul class="space-y-sm">
<li><a class="text-secondary hover:text-primary transition-all font-body-md" href="#">Barbing</a></li>
<li><a class="text-secondary hover:text-primary transition-all font-body-md" href="#">Hair Braiding</a></li>
<li><a class="text-secondary hover:text-primary transition-all font-body-md" href="#">Makeup</a></li>
</ul>
</div>
<div>
<h4 class="font-label-md text-primary mb-md">Support</h4>
<ul class="space-y-sm">
<li><a class="text-secondary hover:text-primary transition-all font-body-md" href="#">Help Center</a></li>
<li><a class="text-secondary hover:text-primary transition-all font-body-md" href="#">Contact</a></li>
<li><a class="text-secondary hover:text-primary transition-all font-body-md" href="#">Privacy Policy</a></li>
</ul>
</div>
</div>
</div>
<div class="max-w-[1440px] mx-auto px-margin-mobile md:px-margin-desktop py-md border-t border-outline-variant/30 flex flex-col md:flex-row justify-between items-center gap-md">
<p class="text-body-md text-secondary">© 2026 Mi Look. Powered by RAW B2C LTD</p>
<div class="flex gap-md">
<span class="text-label-sm text-secondary">Terms of Service</span>
<span class="text-label-sm text-secondary">Cookies</span>
</div>
</div>
</footer>
<script>
    function toggleMobileMenu(){

const menu = document.getElementById("mobileMenu");

menu.classList.toggle("hidden");

}


// close after clicking link
document.querySelectorAll("#mobileMenu a").forEach(link=>{

link.addEventListener("click",()=>{

document.getElementById("mobileMenu")
.classList.add("hidden");

});

});
        // Reveal Animations on Scroll
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        // Initial check
        reveal();

        // Smooth Navbar Shrink
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('py-2');
                nav.classList.remove('py-base');
            } else {
                nav.classList.add('py-base');
                nav.classList.remove('py-2');
            }
        });
    </script>
</body></html>
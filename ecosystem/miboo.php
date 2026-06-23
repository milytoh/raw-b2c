<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Mi Boo's Kitchen | Soft. Nourishing. Intentional.</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&amp;family=Playfair+Display:wght@600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-high": "#e9e8e5",
                        "on-primary-container": "#765162",
                        "surface-bright": "#faf9f6",
                        "on-tertiary-fixed-variant": "#3e4a41",
                        "tertiary-container": "#cbd8cc",
                        "error-container": "#ffdad6",
                        "surface-dim": "#dbdad7",
                        "secondary": "#60603e",
                        "primary-fixed-dim": "#e9bacd",
                        "on-background": "#1a1c1a",
                        "inverse-surface": "#2f312f",
                        "secondary-fixed-dim": "#cac99f",
                        "secondary-container": "#e6e5b9",
                        "on-primary-fixed": "#2e1221",
                        "error": "#ba1a1a",
                        "surface-tint": "#795465",
                        "on-secondary-fixed-variant": "#484828",
                        "on-tertiary-container": "#535f55",
                        "on-primary": "#ffffff",
                        "primary": "#795465",
                        "tertiary-fixed-dim": "#bdcabe",
                        "on-tertiary": "#ffffff",
                        "primary-container": "#f8c8dc",
                        "inverse-primary": "#e9bacd",
                        "on-secondary-container": "#666643",
                        "secondary-fixed": "#e6e5b9",
                        "outline": "#817478",
                        "on-error-container": "#93000a",
                        "on-surface": "#1a1c1a",
                        "outline-variant": "#d2c3c7",
                        "surface-container-lowest": "#ffffff",
                        "tertiary-fixed": "#d9e6da",
                        "on-tertiary-fixed": "#131e17",
                        "surface-container": "#efeeeb",
                        "surface": "#faf9f6",
                        "surface-variant": "#e3e2e0",
                        "on-secondary-fixed": "#1d1d03",
                        "primary-fixed": "#ffd8e7",
                        "surface-container-highest": "#e3e2e0",
                        "surface-container-low": "#f4f3f1",
                        "on-error": "#ffffff",
                        "background": "#faf9f6",
                        "inverse-on-surface": "#f2f1ee",
                        "on-primary-fixed-variant": "#5f3c4d",
                        "on-secondary": "#ffffff",
                        "tertiary": "#556158",
                        "on-surface-variant": "#4f4448"
                    },
                    "borderRadius": {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-mobile": "20px",
                        "section-padding": "80px",
                        "container-max": "1200px",
                        "gutter": "24px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "body-lg": ["Montserrat"],
                        "label-caps": ["Montserrat"],
                        "display-lg-mobile": ["Playfair Display"],
                        "display-lg": ["Playfair Display"],
                        "headline-md": ["Playfair Display"],
                        "body-md": ["Montserrat"],
                        "headline-sm": ["Playfair Display"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "label-caps": ["12px", {"lineHeight": "1", "letterSpacing": "0.1em", "fontWeight": "600"}],
                        "display-lg-mobile": ["32px", {"lineHeight": "1.2", "fontWeight": "700"}],
                        "display-lg": ["48px", {"lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "headline-md": ["32px", {"lineHeight": "1.3", "fontWeight": "600"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                        "headline-sm": ["24px", {"lineHeight": "1.4", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
<style>
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 30px rgba(248, 200, 220, 0.3);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .hover-lift {
            transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .hover-lift:hover {
            transform: translateY(-8px);
        }
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        .stagger-reveal > * {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease-out;
        }
        .reveal-visible {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
    </style>
</head>
<!-- Top Navigation -->
<nav class="fixed top-0 left-0 w-full z-50 bg-white/70 dark:bg-surface-dim/70 backdrop-blur-xl shadow-sm">

    <div class="flex justify-between items-center px-margin-mobile md:px-gutter py-4 max-w-container-max mx-auto">

        <div class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed-dim">
            Mi Boo's Kitchen
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-8">
            <a class="font-label-caps text-label-caps text-primary border-b-2 border-primary pb-1" href="#">Home</a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors" href="#about">About</a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors" href="#products">Products</a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors" href="#delivery">Delivery Areas</a>
            <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors" href="#contact">Contact</a>
        </div>

        <!-- Desktop Order Button -->
        <a href="#contact"
           class="hidden md:block bg-primary text-on-primary px-6 py-3 rounded-full font-label-caps text-label-caps hover:scale-105 transition-transform">
            Order Now
        </a>

        <!-- Mobile Menu Button -->
        <button
            id="mobileMenuBtn"
            class="md:hidden flex items-center justify-center w-10 h-10 rounded-lg bg-primary text-white">

            <span class="material-symbols-outlined">
                menu
            </span>

        </button>

    </div>

    <!-- Mobile Menu -->
    <div
        id="mobileMenu"
        class="hidden md:hidden bg-white border-t border-gray-100 shadow-lg">

        <div class="flex flex-col p-6 space-y-4">

            <a href="#"
               class="font-semibold text-primary">
                Home
            </a>

            <a href="#about"
               class="font-semibold text-on-surface-variant hover:text-primary">
                About
            </a>

            <a href="#products"
               class="font-semibold text-on-surface-variant hover:text-primary">
                Products
            </a>

            <a href="#delivery"
               class="font-semibold text-on-surface-variant hover:text-primary">
                Delivery Areas
            </a>

            <a href="#contact"
               class="font-semibold text-on-surface-variant hover:text-primary">
                Contact
            </a>

            <a href="#contact"
               class="bg-primary text-white text-center py-3 rounded-full font-bold">
                Order Now
            </a>

        </div>

    </div>

</nav>
<!-- Hero Section -->
<header class="relative min-h-screen flex items-center pt-24 overflow-hidden">
<div class="absolute inset-0 z-0">
<img alt="Mi Boo Hero Image" class="w-full h-full object-cover brightness-95" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDrPnag8v7UqydjSX8q9UjE0FgzlhP5XcuDEiKv7JLNpxThosETQnHpJHMgVs-4zKjSv2MI4juOPUJlCo31Y32upvyYfvzSGv0pwmgd3bgvAQ4tDASp02DxWeZgqlERn_IqTv_vjJ3tgVdEO6jkDUirLqG_ELL_i25eZiQxkg7CalyKyZFM4uV0gZueV9N5iJQR7lcbKScUPxJbI8S7yoePif60qZ6jbTpxdO8R0AIBJZ4OmPqEBMWYyalHiVnX3FKaPH51lqHD-9M"/>
<div class="absolute inset-0 bg-gradient-to-r from-background/90 via-background/40 to-transparent"></div>
</div>
<div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-gutter w-full">
<div class="max-w-2xl stagger-reveal">
<span class="inline-block bg-primary-container text-on-primary-container px-4 py-1.5 rounded-full font-label-caps text-label-caps mb-6">Soft. Nourishing. Intentional.</span>
<h1 class="font-display-lg text-display-lg md:text-6xl text-primary mb-6 leading-tight">Healthy Fruits.<br/>Delivered With Love.</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-10 max-w-lg">Experience the gentle warmth of premium curated fruits, hand-picked for your wellness and delivered with a touch of romantic elegance.</p>
<div class="flex flex-col sm:flex-row gap-4">
<button class="bg-primary text-on-primary px-8 py-4 rounded-full font-label-caps text-label-caps shadow-lg shadow-primary/20 hover:scale-105 transition-transform">Order Now</button>
<button class="border-2 border-primary text-primary px-8 py-4 rounded-full font-label-caps text-label-caps hover:bg-primary/5 transition-colors">Gift Fruits To Someone</button>
</div>
</div>
</div>
</header>
<!-- Problem & Gaps Section -->
<section class="py-section-padding bg-surface-container-low overflow-hidden">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-gutter">
<div class="text-center mb-16 stagger-reveal">
<h2 class="font-headline-md text-headline-md text-primary mb-4">Why We Care</h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-xl mx-auto">Modern life often gets in the way of our nutritional intentions. We're here to bridge that gap with love.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 stagger-reveal">
<div class="glass-card p-8 rounded-lg hover-lift">
<span class="material-symbols-outlined text-primary text-4xl mb-6" data-icon="schedule"></span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-3">Time Scarcity</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Slicing and prepping fresh fruit takes time you don't always have.</p>
</div>
<div class="glass-card p-8 rounded-lg hover-lift">
<span class="material-symbols-outlined text-primary text-4xl mb-6" data-icon="eco"></span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-3">Inconsistent Quality</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Finding truly ripe, premium grade fruit is a daily struggle.</p>
</div>
<div class="glass-card p-8 rounded-lg hover-lift">
<span class="material-symbols-outlined text-primary text-4xl mb-6" data-icon="restaurant_menu"></span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-3">Boring Varieties</h3>
<p class="font-body-md text-body-md text-on-surface-variant">We tend to buy the same few fruits, missing out on seasonal diversity.</p>
</div>
<div class="glass-card p-8 rounded-lg hover-lift">
<span class="material-symbols-outlined text-primary text-4xl mb-6" data-icon="favorite"></span>
<h3 class="font-headline-sm text-headline-sm text-primary mb-3">Lacking Intention</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Health should feel like a reward, not just a checked box.</p>
</div>
</div>
</div>
</section>
<!-- About Section -->
<section class="py-section-padding bg-background overflow-hidden" id="about">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-gutter grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
<div class="relative stagger-reveal">
<div class="aspect-square rounded-xl overflow-hidden shadow-2xl relative z-10">
<img class="w-full h-full object-cover" data-alt="A warm and inviting high-end kitchen scene with soft morning light streaming through a window. A woman is carefully arranging vibrant, exotic fruits into a beautiful ceramic bowl. The colors are dominated by soft pinks, creams, and the natural jewel tones of the fruit. The atmosphere is peaceful, healthy, and premium." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3BYaOLObmNtDLv0NF5nJjYopiR08XyNuJ8eWvUG4MEmJkZqA8NauRGeKFHpMNqIuXKEwM0tVM8apjCQaYeEwiDahXtzIEwLqM5UvXIBVZrj6SB_GqLrYomxf8bq_ZHEEMbE6ZIrY27MYUyO7AyPMHhAL1RettFuiXUUJCf3KePRTwJvAO9swVKXyD-II5k9jjHmJfxYCorN4tA3L1G98mrSfWn8DSa2l7Mc6xpOTyQqCQ42A2Yq--ymAnyj7a7Nfs2gA6REwvew4"/>
</div>
<div class="absolute -bottom-10 -right-10 w-64 h-64 bg-primary-container rounded-full blur-3xl opacity-30 -z-10"></div>
<div class="absolute -top-10 -left-10 w-64 h-64 bg-tertiary-container rounded-full blur-3xl opacity-30 -z-10"></div>
</div>
<div class="stagger-reveal">
<h2 class="font-headline-md text-headline-md text-primary mb-6">Born From Pure Intention</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-6">Mi Boo's Kitchen was founded on the belief that healthy eating shouldn't be a chore—it should be a romantic experience. We exist to provide the convenience of premium nutrition delivered with an emotional depth usually reserved for fine gifts.</p>
<div class="space-y-4 mb-8">
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-xl" data-icon="check"></span>
</div>
<p class="font-body-md text-body-md text-on-surface">Meticulously Hand-Picked Selections</p>
</div>
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-xl" data-icon="check"></span>
</div>
<p class="font-body-md text-body-md text-on-surface">Sustainable &amp; Ethical Sourcing</p>
</div>
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-xl" data-icon="check"></span>
</div>
<p class="font-body-md text-body-md text-on-surface">Infused with Care &amp; Affection</p>
</div>
</div>
<button class="bg-primary text-on-primary px-8 py-4 rounded-full font-label-caps text-label-caps hover:scale-105 transition-transform">Read Our Story</button>
</div>
</div>
</section>
<!-- Product Solutions -->
<section class="py-section-padding bg-surface-bright" id="products">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-gutter">
<div class="text-center mb-16 stagger-reveal">
<h2 class="font-headline-md text-headline-md text-primary mb-4">Our Curated Offerings</h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-xl mx-auto">A selection designed for every moment of your healthy lifestyle journey.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 stagger-reveal">
<!-- Salad -->
<div class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col">
<div class="h-64 overflow-hidden relative">
<img alt="Fruit Salad" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAhoeJNU_kCjwhKAmaaAoSwCj-kpIOlPHUZvLbPL7uXtbE-68oVILuHVRJbDg-AK_kblPQRTkEKvw86bEkgDaRoFm9BGXF76HGPyK9L-lzqAxWErfJvwGnZts8VRItvcqAK0JOdLc0PgTyXoaLUEouokOmTB4E8_RY0FFleO9bTkOCjNmc0mejvvGAphMn_CTAQ8q2RZdSdBtiE2yYLjjpS_DbWSkuvYoR2jwErt2VfwRsV3uUkJDi-Ji0XyMFu9DOp4ZudEnGyclo"/>
<div class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full font-label-caps text-[10px] text-primary">BEST SELLER</div>
</div>
<div class="p-6 flex flex-col flex-grow">
<h3 class="font-headline-sm text-headline-sm text-primary mb-2">Fresh Fruit Salads</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-grow">A daily medley of the season's finest, prepped and ready to glow.</p>
<button class="w-full py-3 rounded-full border border-primary text-primary font-label-caps text-label-caps group-hover:bg-primary group-hover:text-on-primary transition-colors">Add to cart</button>
</div>
</div>
<!-- Combos -->
<div class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col">
<div class="h-64 overflow-hidden">
<img alt="Fruit Combos" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDbS_XMmvx7NiwpLe3KHosLfWqyC0fZtQWMzN8YPiDyrz2zndqqqh7ng8qIpaW7VfnPOvP0G7LwSPy1pUEOsXxGrg7OwlsRX_wSIXeCcQOEiOteNsiUMldzf2rm11hJSl1ljmioX95RHOn733lcCOHFd1tz-1KvxChgrK96L3HksklpxHymnUqGo9QztnnaqKQLpLH4ZxtXuAQRIhlY3lrOe9lR_ViLyglNeF5GdAlN8yYTHShDygWjgf0-6y8h6FxHXEAQZtnu5Mw"/>
</div>
<div class="p-6 flex flex-col flex-grow">
<h3 class="font-headline-sm text-headline-sm text-primary mb-2">Fruit Combos</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-grow">Perfectly balanced pairings for specific health and palate goals.</p>
<button class="w-full py-3 rounded-full border border-primary text-primary font-label-caps text-label-caps group-hover:bg-primary group-hover:text-on-primary transition-colors">Explore options</button>
</div>
</div>
<!-- Plans -->
<div class="group bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col">
<div class="h-64 overflow-hidden">
<img alt="Fruit Delivery Plans" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-Fr0NP09FaB7gB5LP9NWu-r2DyO3_0h0MSqz3tQnAxqoPMlTnop01BGcxdUPCaOoFgwcu590zk8T-b1u0c9JhrYtz8Q7KzUBjzIMTgUzLwTawas_iPwATTQsg_deEO__3kEO-mVBBa-3c-uhio6zLF58e_LdVnDndEZe4Ej6vI8_Ag2obJ1YQLUhywYYezFqiPDBLThxLomv5vizXYOFZOu5EUYDDB3v-TJkdgKAhjj4S0qOepP2zDfGT9yLfEyfvsRe-Omg9D_4"/>
</div>
<div class="p-6 flex flex-col flex-grow">
<h3 class="font-headline-sm text-headline-sm text-primary mb-2">Daily Plans</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-grow">Consistency is key. Automate your daily nutrition with our sub plans.</p>
<button class="w-full py-3 rounded-full border border-primary text-primary font-label-caps text-label-caps group-hover:bg-primary group-hover:text-on-primary transition-colors">Choose plan</button>
</div>
</div>
<!-- Free Delivery -->
<div class="group bg-primary-container/20 rounded-lg overflow-hidden shadow-sm border border-primary-container hover:shadow-xl transition-all duration-500 flex flex-col">
<div class="h-64 flex items-center justify-center bg-primary/5">
<span class="material-symbols-outlined text-8xl text-primary/30 floating" data-icon="local_shipping"></span>
</div>
<div class="p-6 flex flex-col flex-grow">
<h3 class="font-headline-sm text-headline-sm text-primary mb-2">Free Delivery</h3>
<p class="font-body-md text-body-md text-on-surface-variant mb-6 flex-grow">We believe love shouldn't have hidden costs. Enjoy free shipping locally.</p>
<button class="w-full py-3 rounded-full bg-primary text-on-primary font-label-caps text-label-caps hover:bg-on-primary-container transition-colors">Learn more</button>
</div>
</div>
</div>
</div>
</section>
<!-- Emotional Value (Large Cards) -->
<section class="py-section-padding bg-background relative overflow-hidden">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-gutter stagger-reveal">
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<div class="relative rounded-xl overflow-hidden h-[500px] group">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="A soft-focus lifestyle image of a couple laughing together over a shared bowl of fresh fruit. Warm sunlight illuminates the scene, highlighting the textures of their linen clothing and the vibrant colors of the fruit. The mood is intimate, joyful, and healthy. High-key aesthetic with a romantic glow." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCRAcpaIRmRKKuG4om0km74tXaq4qRZNoO32B8j-qPScKcIRZTx-8zfZ-zZ7Kpk4RtoO-AFm4m_potkoqCK-7G9vFh3s3iq6SnLrLC0e4IQs0WXFljxxUc2EvCki11hJYiQyeb9-BLJkem50eIJ1CNOHF1oBpcp_LeosoPrTY-4FZ897tdMWFBVWS6IJ2irCojMPk_X49_YQMDfGRFMjtxzOkS0RvofzKEriTEg7Wj_V-gizVpzlldF4ZmZCI3ptV7bIOQFu0UqZZQ"/>
<div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-colors"></div>
<div class="absolute bottom-10 left-10 text-white">
<h3 class="font-display-lg text-4xl mb-2">Care</h3>
<p class="font-body-md text-white/90 max-w-[200px]">Because you deserve to be looked after.</p>
</div>
</div>
<div class="relative rounded-xl overflow-hidden h-[500px] group">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="Close-up of elegant gift packaging for fruit delivery. The box is cream-colored with subtle rose gold lettering. Inside, various exotic fruits are nestled in soft protective material. The lighting is sophisticated and editorial, emphasizing the premium quality of the gift. The overall style is Apple-level minimalist luxury." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVau-UbuYjIkjXUfpnwp8Lf7yoYJrcXOVaHjTsVkUbgx5WkCuA120v3MH6RpYeWKfF2GsTshmS-PCTWsC6OB6P1H_b9mXGT9KHxg8cAABFaLAIroivILMEdgHybqeZ6P7rta2cuD3Np5wtkAc_Bi4qpUo3v-IXkzlE8iqchBgdnz2q9PqZftaNi6OgO5cetIRLJBQfYeF-VRezj62C3-j4FAm1IYXc_q3-x1jNluHqRRBd7mlluHGq8hGqZ-ZYssL9rZxnk3u3eKM"/>
<div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-colors"></div>
<div class="absolute bottom-10 left-10 text-white">
<h3 class="font-display-lg text-4xl mb-2">Love</h3>
<p class="font-body-md text-white/90 max-w-[200px]">The perfect gift for yourself or another.</p>
</div>
</div>
<div class="relative rounded-xl overflow-hidden h-[500px] group">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" data-alt="A vibrant, flat-lay arrangement of sliced nutrient-dense fruits like dragon fruit, kiwi, and pomegranates on a clean white surface. The composition is artistic and fresh, with water droplets adding a dewy texture. Bright, natural lighting highlights the intense colors and healthy appeal. Minimalist and appetizing." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtgrZWWMIMOZxvQIupr5xLycPbfLh9gYtItLT2wmdnROUtxhvoP7A1tPjiE8QvYIe9SBOyx1DSOT7uplEyk_pmxktoDL4DWbbTFjr9Lg5mBH-d0fTg5rD5xy_NqdL0bqaAkvPhREipoyTRX54lnZ7QQOsMKhETiNFP2Ks1hqdkGfPHZSScXKwMLuJhfuP6g67hOdk348OUZYbYDSW8ja-_EFn-1N3p2zGKf6rKkGAlTY-vUMX49xNsFxISxWz9x49190YBx_DtOcU"/>
<div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-colors"></div>
<div class="absolute bottom-10 left-10 text-white">
<h3 class="font-display-lg text-4xl mb-2">Health</h3>
<p class="font-body-md text-white/90 max-w-[200px]">Nourishment for your body and soul.</p>
</div>
</div>
</div>
</div>
</section>
<!-- How It Works -->
<section class="py-section-padding bg-surface-container-low">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-gutter">
<div class="text-center mb-16 stagger-reveal">
<h2 class="font-headline-md text-headline-md text-primary mb-4">The Journey To Your Door</h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-xl mx-auto">Four simple steps to intentional nourishment.</p>
</div>
<div class="relative stagger-reveal">
<div class="hidden lg:block absolute top-1/2 left-0 w-full h-px bg-outline-variant/30 -translate-y-1/2 z-0"></div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 relative z-10">
<div class="flex flex-col items-center text-center">
<div class="w-16 h-16 rounded-full bg-primary text-on-primary flex items-center justify-center font-display-lg text-2xl mb-6 shadow-xl shadow-primary/20">1</div>
<h4 class="font-headline-sm text-primary mb-2">Pick Your Combo</h4>
<p class="font-body-md text-on-surface-variant">Choose from our curated salads or monthly plans.</p>
</div>
<div class="flex flex-col items-center text-center">
<div class="w-16 h-16 rounded-full bg-white text-primary flex items-center justify-center font-display-lg text-2xl mb-6 shadow-lg">2</div>
<h4 class="font-headline-sm text-primary mb-2">We Hand-Pick</h4>
<p class="font-body-md text-on-surface-variant">Our experts select the peak-ripeness fruit for you.</p>
</div>
<div class="flex flex-col items-center text-center">
<div class="w-16 h-16 rounded-full bg-white text-primary flex items-center justify-center font-display-lg text-2xl mb-6 shadow-lg">3</div>
<h4 class="font-headline-sm text-primary mb-2">Careful Prep</h4>
<p class="font-body-md text-on-surface-variant">Washed, sliced, and packed with delicate care.</p>
</div>
<div class="flex flex-col items-center text-center">
<div class="w-16 h-16 rounded-full bg-white text-primary flex items-center justify-center font-display-lg text-2xl mb-6 shadow-lg">4</div>
<h4 class="font-headline-sm text-primary mb-2">Swift Delivery</h4>
<p class="font-body-md text-on-surface-variant">Delivered fresh and chilled to your preferred location.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Coverage Map / Locations -->
<section class="py-section-padding bg-background" id="delivery">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-gutter">
<div class="text-center mb-16 stagger-reveal">
<h2 class="font-headline-md text-headline-md text-primary mb-4">Our Primary Coverage</h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-xl mx-auto">We are currently spreading health and love across these key regions.</p>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-6 stagger-reveal">
<div class="group relative aspect-square rounded-lg overflow-hidden glass-card p-4 flex flex-col items-center justify-center text-center hover-lift border-primary/20">
<img class="absolute inset-0 w-full h-full object-cover opacity-20 group-hover:opacity-40 transition-opacity" data-location="Abia" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDcXEM17noiDGEkttFscAYjegZxau--TQJ05dGE1tsZgAFtauGgX2ix03pvF9sWCNfuE2f2xMd8caGl-su5W7CYmSNHEhyIyyWx3JRCA286itq8Ujbv7Vrlxy6iBfWa55_34ZyiyHyif44ZQMq8zVfqmu05eRkk9VW3VFy-5tpCbi9tLRXACrGPNfSItLL6-4gh2SQCM3lHQvqB6yBns5YSZeKneiECTl3Bf6WbyPzE1lSh7SCHR3CHdQxL2DxIbUNXOkv9cgiskq8"/>
<h5 class="relative z-10 font-headline-sm text-primary">Abia</h5>
<p class="relative z-10 font-label-caps text-label-caps text-on-surface-variant">Next Day</p>
</div>
<div class="group relative aspect-square rounded-lg overflow-hidden glass-card p-4 flex flex-col items-center justify-center text-center hover-lift border-primary/20">
<img class="absolute inset-0 w-full h-full object-cover opacity-20 group-hover:opacity-40 transition-opacity" data-location="Enugu" src="https://lh3.googleusercontent.com/aida-public/AB6AXuApAiQvASjwPvMfc1fgQ9nXOQpcVZvxenAzqrngsG5c8dfDfc98UkZ7QTDg60y_7U6NQ1fIo4ueEivcRb8Gh5m0_Hwjqe8SbpFfuKepjByS7RIcV7xisggvM6nlRdEvqImEjLXpuaW2fteop9enGp03l2mOHZ10CByR_H0gALcCsZ5jsGs4IbAKfWM5vz8EW1saMFV9XWRcZuig8NvbG3l1a2IC0Tbn2hcD9hM9Xqwux6NIe5gZXOWF03PtWgXVenHC3sy92EGWIiE"/>
<h5 class="relative z-10 font-headline-sm text-primary">Enugu</h5>
<p class="relative z-10 font-label-caps text-label-caps text-on-surface-variant">Daily Delivery</p>
</div>
<div class="group relative aspect-square rounded-lg overflow-hidden glass-card p-4 flex flex-col items-center justify-center text-center hover-lift border-primary/20">
<img class="absolute inset-0 w-full h-full object-cover opacity-20 group-hover:opacity-40 transition-opacity" data-location="Anambra" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCcPa4i6zVutLES4opamC_8RI4CjUR27sc-tKP5e-gCEvZtN_8fF1KEhzC7fYJgEVPe6k6tZZjvpFUsk8pTKbWQMtywco2apB-zEknzIg5wxLN22MnLKJC6fXRGvlgbpD5JRxlPbndvyFWQuAumHsb0NmChEL3IvZE7AzKUF8UtI-j8yLFc9SsUwuyfHfxO6eLXWqpg0npg7eXPIW25QjjWHR5eORCuKUeUcMrCHTB809AbwZEFF6xr16X2cRWS6i9edb-GI3RVkRk"/>
<h5 class="relative z-10 font-headline-sm text-primary">Anambra</h5>
<p class="relative z-10 font-label-caps text-label-caps text-on-surface-variant">Weekly Plans</p>
</div>
<div class="group relative aspect-square rounded-lg overflow-hidden glass-card p-4 flex flex-col items-center justify-center text-center hover-lift border-primary/20">
<img class="absolute inset-0 w-full h-full object-cover opacity-20 group-hover:opacity-40 transition-opacity" data-location="Rivers" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDq7-NCWNiX0atzZQO8xLNni6JR_8bFSJn3dgd4-cEFOMoj8kzophH2bJ71CkdeokNN63WhKWJiOobr5u7InMWzU7g7OgU3--orDcCBUr33ovaQJiSEzsOv9zmuG7jukSeLJ_DA5RJOaHZ1ZrhZOjViBve9LvQTZJFM3HP6YeYLUSE8cLApqaH-0EmTzoXxCeIPmSfU4GEmHeBZyMjPjvrbtGOIt1vWxj_KpMzSB3BICmBdk7-PvyxmJW60U99TD_ygIrEVnCuDDu0"/>
<h5 class="relative z-10 font-headline-sm text-primary">Rivers</h5>
<p class="relative z-10 font-label-caps text-label-caps text-on-surface-variant">Scheduled</p>
</div>
</div>
</div>
</section>
<!-- Testimonials -->
<section class="py-section-padding bg-surface-container-low">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-gutter">
<div class="text-center mb-16 stagger-reveal">
<h2 class="font-headline-md text-headline-md text-primary mb-4">Heartfelt Reviews</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 stagger-reveal">
<div class="glass-card p-10 rounded-lg italic text-on-surface-variant relative">
<span class="material-symbols-outlined absolute top-6 right-6 text-primary/20 text-6xl" data-icon="format_quote"></span>
<div class="flex text-primary mb-4">
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;"></span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;"></span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;"></span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;"></span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;"></span>
</div>
<p class="mb-6 font-body-lg">"The fruits are so fresh, it's like they were picked minutes before delivery. The packaging makes it feel like a luxury gift to myself every day."</p>
<p class="font-label-caps text-primary">— Amaka, Enugu</p>
</div>
<div class="glass-card p-10 rounded-lg italic text-on-surface-variant relative">
<span class="material-symbols-outlined absolute top-6 right-6 text-primary/20 text-6xl" data-icon="format_quote"></span>
<div class="flex text-primary mb-4">
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;"></span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;"></span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;"></span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;"></span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;"></span>
</div>
<p class="mb-6 font-body-lg">"Mi Boo's Kitchen has transformed my mornings. I no longer struggle to eat healthy because they've made it so effortless and beautiful."</p>
<p class="font-label-caps text-primary">— Chidi, Rivers</p>
</div>
<div class="glass-card p-10 rounded-lg italic text-on-surface-variant relative">
<span class="material-symbols-outlined absolute top-6 right-6 text-primary/20 text-6xl" data-icon="format_quote"></span>
<div class="flex text-primary mb-4">
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;"></span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;"></span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;"></span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;"></span>
<span class="material-symbols-outlined" data-icon="star" style="font-variation-settings: 'FILL' 1;"></span>
</div>
<p class="mb-6 font-body-lg">"The fruit combos are ingenious. The energy boost I get is much better than caffeine. Truly nourished by love."</p>
<p class="font-label-caps text-primary">— Sarah, Anambra</p>
</div>
</div>
</div>
</section>
<!-- Powered By Section -->
<section class="py-12 bg-white/50 border-y border-outline-variant/10">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-gutter flex flex-col md:flex-row justify-center items-center gap-12 stagger-reveal">
<span class="font-label-caps text-label-caps text-on-surface-variant opacity-60">POWERED BY RAW HUB</span>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary" data-icon="verified_user"></span>
<span class="font-label-caps text-label-caps text-primary">SECURE DELIVERY</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary" data-icon="high_quality"></span>
<span class="font-label-caps text-label-caps text-primary">PREMIUM GRADE</span>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary" data-icon="local_mall"></span>
<span class="font-label-caps text-label-caps text-primary">B2C EXCELLENCE</span>
</div>
</div>
</section>
<!-- Final CTA -->
<section class="py-section-padding bg-background overflow-hidden">
<div class="max-w-container-max mx-auto px-margin-mobile md:px-gutter stagger-reveal">
<div class="relative glass-card rounded-xl p-12 md:p-24 overflow-hidden text-center">
<div class="absolute -top-20 -left-20 w-80 h-80 bg-primary-container rounded-full blur-[100px] opacity-40"></div>
<div class="absolute -bottom-20 -right-20 w-80 h-80 bg-tertiary-container rounded-full blur-[100px] opacity-40"></div>
<h2 class="font-display-lg text-display-lg text-primary mb-6 relative z-10">Start Your Healthy Fruit<br/>Journey Today</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant mb-10 max-w-xl mx-auto relative z-10">Join thousands of others who choose intentional nourishment every single day. Delivered fresh. Delivered with love.</p>
<div class="flex justify-center relative z-10">
<button class="bg-primary text-on-primary px-12 py-5 rounded-full font-label-caps text-label-caps text-lg shadow-xl hover:scale-105 transition-transform active:scale-95">Place Your Order</button>
</div>
</div>
</div>
</section>
<!-- Footer -->
<footer class="w-full py-section-padding px-margin-mobile md:px-gutter flex flex-col md:flex-row justify-between items-start gap-8 bg-surface-container-low dark:bg-surface-dim border-t border-outline-variant/30">
<div class="max-w-sm">
<div class="font-headline-sm text-headline-sm font-bold text-primary dark:text-primary-fixed-dim mb-4">Mi Boo's Kitchen</div>
<p class="font-body-md text-body-md text-on-surface-variant opacity-70">A subsidiary of RAW B2C LTD. Dedicated to premium fruit delivery experiences that nourish both body and soul.</p>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 gap-12">
<div>
<h6 class="font-label-caps text-label-caps text-primary mb-6">Explore</h6>
<ul class="space-y-4">
<li><a class="font-body-md text-on-surface-variant hover:text-primary transition-all" href="#">Products</a></li>
<li><a class="font-body-md text-on-surface-variant hover:text-primary transition-all" href="#">Sub Plans</a></li>
<li><a class="font-body-md text-on-surface-variant hover:text-primary transition-all" href="#">Gift Cards</a></li>
</ul>
</div>
<div>
<h6 class="font-label-caps text-label-caps text-primary mb-6">Support</h6>
<ul class="space-y-4">
<li><a class="font-body-md text-on-surface-variant hover:text-primary transition-all" href="#">Shipping Info</a></li>
<li><a class="font-body-md text-on-surface-variant hover:text-primary transition-all" href="#">FAQ</a></li>
<li><a class="font-body-md text-on-surface-variant hover:text-primary transition-all" href="#">Returns</a></li>
</ul>
</div>
<div>
<h6 class="font-label-caps text-label-caps text-primary mb-6">Company</h6>
<ul class="space-y-4">
<li><a class="font-body-md text-on-surface-variant hover:text-primary transition-all" href="#">About Us</a></li>
<li><a class="font-body-md text-on-surface-variant hover:text-primary transition-all" href="#">Privacy Policy</a></li>
<li><a class="font-body-md text-on-surface-variant hover:text-primary transition-all" href="#">Terms</a></li>
</ul>
</div>
<div class="flex flex-col gap-4">
<h6 class="font-label-caps text-label-caps text-primary mb-6">Follow Us</h6>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full glass-card flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="photo_camera"></span>
</a>
<a class="w-10 h-10 rounded-full glass-card flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="share"></span>
</a>
</div>
</div>
</div>
<div class="w-full mt-12 pt-12 border-t border-outline-variant/10 text-center md:text-left">
<p class="font-body-md text-body-md text-on-surface-variant opacity-60">© 2026 Mi Boo's Kitchen. Powered by RAW HUB.</p>
</div>
</footer>
<script>

    document.addEventListener("DOMContentLoaded", function () {

    const mobileMenuBtn = document.getElementById("mobileMenuBtn");
    const mobileMenu = document.getElementById("mobileMenu");

    if(mobileMenuBtn && mobileMenu){

        mobileMenuBtn.addEventListener("click", function(){

            mobileMenu.classList.toggle("hidden");

        });

    }

});

document.addEventListener("DOMContentLoaded", function () {

    const mobileLinks = document.querySelectorAll("#mobileMenu a");

    mobileLinks.forEach(link => {

        link.addEventListener("click", function () {

            document.getElementById("mobileMenu").classList.add("hidden");

        });

    });

});
        // Reveal animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const staggerChildren = entry.target.classList.contains('stagger-reveal') 
                        ? Array.from(entry.target.children) 
                        : [entry.target];
                    
                    staggerChildren.forEach((child, index) => {
                        setTimeout(() => {
                            child.classList.add('reveal-visible');
                        }, index * 100);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.stagger-reveal, .hover-lift').forEach(el => observer.observe(el));

        // Smooth nav glass effect on scroll
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('shadow-md');
            } else {
                nav.classList.remove('shadow-md');
            }
        });
    </script>
</body></html>
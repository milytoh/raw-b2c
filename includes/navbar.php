<!-- Navigation Bar -->
<nav class="fixed top-0 left-0 w-full z-50 bg-surface/90 backdrop-blur-md shadow-sm transition-all duration-300" id="top-nav">
    <div class="max-w-container-max mx-auto px-margin-desktop py-4 flex justify-between items-center">
        <!-- Logo Section -->
        <div class="flex items-center gap-4">
            <img alt="RAW B2C LTD Logo" class="h-10 w-auto" src="<?php echo isset($logo_src) ? $logo_src : ''; ?>">
            <span class="font-headline-md text-headline-md text-primary font-bold hidden sm:block">RAW B2C LTD</span>
        </div>

        <!-- Desktop Navigation Links -->
        <div class="hidden md:flex items-center gap-8 font-body-md text-body-md text-on-surface-variant">
            <a class="text-primary border-b-2 border-primary pb-1 transition-colors" href="<?php echo isset($home_link) ? $home_link : '#'; ?>">Home</a>
            <a class="hover:text-primary transition-colors" href="<?php echo isset($about_link) ? $about_link : '#about'; ?>">About</a>
            <a class="hover:text-primary transition-colors" href="<?php echo isset($products_link) ? $products_link : '#products'; ?>">Products</a>
            <a class="hover:text-primary transition-colors" href="<?php echo isset($gallery_link) ? $gallery_link : '#gallery'; ?>">Gallery</a>
            <a class="hover:text-primary transition-colors" href="<?php echo isset($blog_link) ? $blog_link : '#blog'; ?>">Blog</a>
            <a class="hover:text-primary transition-colors" href="<?php echo isset($reviews_link) ? $reviews_link : '#reviews'; ?>">Reviews</a>
        </div>

        <!-- CTA and Mobile Menu Button -->
        <div class="flex items-center gap-4">
            <a class="bg-primary text-on-primary px-8 py-3 rounded-xl font-semibold hover:bg-primary-container transition-all duration-300 shadow-md" href="<?php echo isset($contact_link) ? $contact_link : '#contact'; ?>">
                Contact Us
            </a>
            <button class="md:hidden text-on-surface" id="mobile-menu-btn">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-surface border-t border-surface-variant">
        <div class="px-margin-desktop py-4 space-y-2">
            <a class="block py-2 text-primary font-semibold" href="<?php echo isset($home_link) ? $home_link : '#'; ?>">Home</a>
            <a class="block py-2 hover:text-primary transition-colors" href="<?php echo isset($about_link) ? $about_link : '#about'; ?>">About</a>
            <a class="block py-2 hover:text-primary transition-colors" href="<?php echo isset($products_link) ? $products_link : '#products'; ?>">Products</a>
            <a class="block py-2 hover:text-primary transition-colors" href="<?php echo isset($gallery_link) ? $gallery_link : '#gallery'; ?>">Gallery</a>
            <a class="block py-2 hover:text-primary transition-colors" href="<?php echo isset($blog_link) ? $blog_link : '#blog'; ?>">Blog</a>
            <a class="block py-2 hover:text-primary transition-colors" href="<?php echo isset($reviews_link) ? $reviews_link : '#reviews'; ?>">Reviews</a>
        </div>
    </div>
</nav>

<!-- Footer Section -->
<footer class="bg-primary text-on-primary py-section-gap">
    <div class="max-w-container-max mx-auto px-margin-desktop">
        <!-- Footer Grid -->
        <div class="grid md:grid-cols-4 gap-gutter mb-12">
            <!-- About Column -->
            <div>
                <h4 class="font-bold text-lg mb-4">RAW B2C LTD</h4>
                <p class="text-on-primary/80 text-sm leading-relaxed">
                    Building solutions and empowering people across the African market through innovative business frameworks.
                </p>
               
            </div>

            <!-- Quick Links Column -->
            <div>
                <h4 class="font-bold text-lg mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="<?php echo isset($footer_home) ? $footer_home : '#'; ?>" class="hover:text-primary-fixed transition-colors">Home</a></li>
                    <li><a href="<?php echo isset($footer_about) ? $footer_about : '#about'; ?>" class="hover:text-primary-fixed transition-colors">About Us</a></li>
                    <li><a href="<?php echo isset($footer_products) ? $footer_products : '#products'; ?>" class="hover:text-primary-fixed transition-colors">Products</a></li>
                    <li><a href="<?php echo isset($footer_blog) ? $footer_blog : '#blog'; ?>" class="hover:text-primary-fixed transition-colors">Blog</a></li>
                    <li><a href="<?php echo isset($footer_contact) ? $footer_contact : '#contact'; ?>" class="hover:text-primary-fixed transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Services Column -->
            <div>
                <h4 class="font-bold text-lg mb-4">Our Brands</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="<?php echo isset($brand_rawhub) ? $brand_rawhub : '#'; ?>" class="hover:text-primary-fixed transition-colors">RAW HUB</a></li>
                    <li><a href="<?php echo isset($brand_rawconnect) ? $brand_rawconnect : '#'; ?>" class="hover:text-primary-fixed transition-colors">RAW CONNECT</a></li>
                    <li><a href="<?php echo isset($brand_rawelite) ? $brand_rawelite : '#'; ?>" class="hover:text-primary-fixed transition-colors">RAW ELITE</a></li>
                    <li><a href="<?php echo isset($brand_rawspeaker) ? $brand_rawspeaker : '#'; ?>" class="hover:text-primary-fixed transition-colors">RAW SPEAKER</a></li>
                </ul>
            </div>

            <!-- Contact Column -->
            <div>
                <h4 class="font-bold text-lg mb-4">Contact Info</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex gap-2">
                        <span class="material-symbols-outlined text-sm">location_on</span>
                        <span><?php echo isset($address) ? $address : 'Africa'; ?></span>
                    </li>
                    <li class="flex gap-2">
                        <span class="material-symbols-outlined text-sm">mail</span>
                        <a href="mailto:<?php echo isset($email) ? $email : 'info@rawb2c.com'; ?>" class="hover:text-primary-fixed transition-colors">
                            <?php echo isset($email) ? $email : 'info@rawb2c.com'; ?>
                        </a>
                    </li>
                    <li class="flex gap-2">
                        <span class="material-symbols-outlined text-sm">phone</span>
                        <a href="tel:<?php echo isset($phone) ? $phone : '+1-000-000-0000'; ?>" class="hover:text-primary-fixed transition-colors">
                            <?php echo isset($phone) ? $phone : '+1-000-000-0000'; ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-on-primary/20 my-8"></div>

        <!-- Footer Bottom -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-on-primary/80">
            <p>&copy; <?php echo date('Y'); ?> RAW B2C LTD. All rights reserved.</p>
            <div class="flex gap-6">
                <a href="<?php echo isset($privacy_policy) ? $privacy_policy : '#'; ?>" class="hover:text-primary-fixed transition-colors">Privacy Policy</a>
                <a href="<?php echo isset($terms_conditions) ? $terms_conditions : '#'; ?>" class="hover:text-primary-fixed transition-colors">Terms & Conditions</a>
                <a href="<?php echo isset($sitemap) ? $sitemap : '#'; ?>" class="hover:text-primary-fixed transition-colors">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

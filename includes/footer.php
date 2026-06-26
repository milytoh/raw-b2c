
<!-- Footer Section -->
<footer class="bg-primary text-on-primary py-section-gap">

    <div class="max-w-container-max mx-auto px-margin-desktop">

        <!-- Tagline -->
        <div class="text-center mb-12">

            <h3 class="text-3xl font-bold mb-3">
                Building Solutions. Connecting People. Creating Impact.
            </h3>

            <p class="text-on-primary/80 max-w-3xl mx-auto">
                RAW B2C LTD is building innovative businesses across technology,
                lifestyle, beauty, logistics, food, and household services to
                improve everyday life across Africa.
            </p>

        </div>

        <!-- Footer Grid -->
        <div class="grid md:grid-cols-4 gap-gutter mb-12">

            <!-- About -->
            <div>

                <h4 class="font-bold text-lg mb-4">
                    RAW B2C LTD
                </h4>

                <p class="text-on-primary/80 text-sm leading-relaxed">
                    A multi-sector company creating practical solutions through
                    technology, commerce, lifestyle brands, logistics, beauty,
                    food, and community-focused innovation.
                </p>

            </div>


            <!-- Company Links -->
            <div>

                <h4 class="font-bold text-lg mb-4">
                    Company
                </h4>

                <ul class="space-y-2 text-sm">

                    <li>
                        <a href="<?php echo isset($footer_home) ? $footer_home : '#'; ?>"
                           class="hover:text-primary-fixed transition-colors">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo isset($footer_about) ? $footer_about : '#'; ?>"
                           class="hover:text-primary-fixed transition-colors">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo isset($footer_products) ? $footer_products : '#'; ?>"
                           class="hover:text-primary-fixed transition-colors">
                            Our Ecosystem
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo isset($footer_blog) ? $footer_blog : '#'; ?>"
                           class="hover:text-primary-fixed transition-colors">
                            Blog & Updates
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo isset($footer_contact) ? $footer_contact : '#'; ?>"
                           class="hover:text-primary-fixed transition-colors">
                            Contact Us
                        </a>
                    </li>

                </ul>

            </div>


            <!-- Ecosystem -->
            <div>

                <h4 class="font-bold text-lg mb-4">
                    Our Ecosystem
                </h4>

                <ul class="space-y-2 text-sm">

                    <li>
                        <a href="/raw-b2c/ecosystem/rawhub.php"
                           class="hover:text-primary-fixed transition-colors">
                            RAW HUB
                        </a>
                    </li>

                    <li>
                        <a href="/raw-b2c/ecosystem/miboo.php"
                           class="hover:text-primary-fixed transition-colors">
                            Mi Boo's Kitchen
                        </a>
                    </li>

                    <li>
                        <a href="/raw-b2c/ecosystem/milook.php"
                           class="hover:text-primary-fixed transition-colors">
                            Mi Look
                        </a>
                    </li>

                    <li>
                        <a href="#"
                           class="hover:text-primary-fixed transition-colors">
                            More Brands Coming Soon
                        </a>
                    </li>

                </ul>

            </div>


            <!-- Contact -->
            <div>

                <h4 class="font-bold text-lg mb-4">
                    Head Office
                </h4>

                <ul class="space-y-3 text-sm">

                    <li class="flex gap-2">
                        <span class="material-symbols-outlined text-sm">
                            location_on
                        </span>

                        <span>
                            Umuahia, Abia State, Nigeria
                        </span>
                    </li>

                    <li class="flex gap-2">
                        <span class="material-symbols-outlined text-sm">
                            mail
                        </span>

                        <a href="mailto:info@rawb2c.com"
                           class="hover:text-primary-fixed transition-colors">
                            info@rawb2c.com
                        </a>
                    </li>

                    <li class="flex gap-2">
                        <span class="material-symbols-outlined text-sm">
                            phone
                        </span>

                        <a href="tel:+2348000000000"
                           class="hover:text-primary-fixed transition-colors">
                            +234 816 311 8975
                        </a>
                    </li>

                </ul>

            </div>

        </div>


        <!-- Divider -->
        <div class="border-t border-on-primary/20 my-8"></div>


        <!-- Bottom Footer -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-on-primary/80">

            <p>
                © <?php echo date('Y'); ?> RAW B2C LTD. All Rights Reserved.
            </p>

            <div class="flex flex-wrap justify-center gap-6">

                <a href="#"
                   class="hover:text-primary-fixed transition-colors">
                    Privacy Policy
                </a>

                <a href="#"
                   class="hover:text-primary-fixed transition-colors">
                    Terms of Service
                </a>

                <a href="<?php echo isset($footer_contact) ? $footer_contact : '#'; ?>"
                   class="hover:text-primary-fixed transition-colors">
                    Support
                </a>

            </div>

        </div>

    </div>

</footer>


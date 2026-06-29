

<!-- Cookie Consent Banner -->
<div id="cookie-consent" class="fixed bottom-0 left-0 right-0 bg-white border-t border-slate-200 shadow-2xl p-5 md:p-6 z-50 hidden">
  <div class="max-w-4xl mx-auto flex flex-col md:flex-row items-start md:items-center gap-4 md:gap-6">
    <div class="flex-1 text-sm text-slate-600">
      We use cookies and similar technologies to improve your experience. 
      By continuing to use RAWB2C, you agree to our 
      <a href="/pages/privacy-policy.php" class="text-primary hover:underline">Privacy Policy</a> and 
      <a href="/pages/terms-of-service.php" class="text-primary hover:underline">Terms of Service</a>.
    </div>
    
    <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
      <button onclick="acceptCookies()" 
              class="px-8 py-3 bg-primary text-white rounded-2xl font-semibold hover:bg-[#04956f] transition">
        Accept All
      </button>
      <button onclick="declineCookies()" 
              class="px-6 py-3 border border-slate-300 rounded-2xl font-medium hover:bg-slate-50 transition">
        Decline
      </button>
    </div>
  </div>
</div>
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

                <a href="/privacy-policy.php"
                   class="hover:text-primary-fixed transition-colors">
                    Privacy Policy
                </a>

                <a href="/pages/terms-of-service.php"
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
<script>
      ///terms and conditions
        function checkCookies() {
  if (!localStorage.getItem('cookiesAccepted')) {
    document.getElementById('cookie-consent').classList.remove('hidden');
  }
}

function acceptCookies() {
  localStorage.setItem('cookiesAccepted', 'true');
  document.getElementById('cookie-consent').classList.add('hidden');
  // You can also set real cookies here if needed
}

function declineCookies() {
  localStorage.setItem('cookiesAccepted', 'false');
  document.getElementById('cookie-consent').classList.add('hidden');
  // Optionally show a minimal notice
}

// Run on page load
window.addEventListener('load', checkCookies);
    </script>

</footer>


